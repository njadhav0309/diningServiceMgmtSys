<?php
class Report_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function active_student_list() {
        $query = $this->db->query("
            SELECT
                s.student_id, s.student_name,s.local_address,s.contact_no
            FROM 
                student_employment emp 
            JOIN
                student s ON s.student_id = emp.student_id
            WHERE 
                emp.status = 'active'
        ");
        return $query->result_array();
    }

    public function employed_student_list() {
        $query = $this->db->query("
            SELECT 
                s.student_id,s.student_name,emp.joining_date, d.DU_name
            FROM
                student_employment emp 
            JOIN
                student s ON s.student_id= emp.student_id
            JOIN
                dining_unit d ON d.DU_id = emp.DU_id
        ");
        return $query->result_array();
    }

    public function total_working_hours() {
        $query = $this->db->query("
            SELECT 
                s.student_name, att.student_id,sum(att.total_hours) as total_working_hours 
            FROM 
                student_work_attendance att 
            JOIN 
                student_employment emp ON att.student_id = emp.student_id
            JOIN
                student s ON s.student_id = att.student_id 
            GROUP BY 
                att.student_id ,s.student_name
        ");
        return $query->result_array();
    }

    public function total_working_hours_gt_20() {
        $query = $this->db->query("
            SELECT 
                s.student_name, s.contact_no,att.student_id,sum(att.total_hours) as total_working_hours 
            FROM 
                student_work_attendance att 
            JOIN 
                student_employment emp ON att.student_id = emp.student_id
            JOIN
                student s ON s.student_id = att.student_id
            WHERE 
                attended_date BETWEEN '2020-02-01' AND '2020-02-15' 
            GROUP BY 
                att.student_id ,s.student_name, s.contact_no
            HAVING 
                total_working_hours>20
        ");
        return $query->result_array();
    }

    public function student_details_ssn() {
        $query = $this->db->query("
            SELECT 
                s.student_id,s.student_name,s.contact_no,s.arrival_date,
                emp.joining_date,CAST(AES_DECRYPT(emp.ssn,'diningServiceMgmtKey')AS CHAR(20)) as SSN  
            FROM 
                student_employment emp
            JOIN
                student s ON s.student_id = emp.student_id
            ORDER BY s.student_id
        ");
        return $query->result_array();
    }

    public function salary_calculate() {
        $query = $this->db->query("
            SELECT 
                s.student_id,s.student_name,temp_tbl.total_working_hours, 
                (temp_tbl.total_working_hours * emp.hourly_wage) as totalpay
            FROM
                student_employment emp 
            JOIN
                student s ON s.student_id = emp.student_id
            JOIN
                (SELECT 
                    att.student_id,sum(att.total_hours) as total_working_hours 
                FROM 
                    student_work_attendance att 
                WHERE
                    attended_date BETWEEN '2020-02-01' AND '2020-02-15' 
                GROUP BY 
                    att.student_id) temp_tbl ON temp_tbl.student_id = emp.student_id
        ");
        return $query->result_array();
    }

    public function du_all_staff() {
        $query = $this->db->query("
            (SELECT 
                d.DU_id,d.DU_name,d_dep.name as DU_dept_name,staff.name as staff_name,staff.position,staff.email,staff.address
            FROM
                dining_unit d
            JOIN
                dining_unit_department d_dep ON d_dep.DU_id = d.DU_id
            JOIN
                dining_unit_staff staff ON staff.DU_dept_id = d_dep.DU_dept_id) UNION
            (SELECT
                d.DU_id,d.DU_name,'', s.student_name as staff_name,'entry-level','',s.local_address
            FROM
                dining_unit d
            JOIN
                student_employment emp ON emp.DU_id = d.DU_id
            JOIN
                student s ON s.student_id = emp.student_id 
            )
            order by DU_id
        ");
        return $query->result_array();
    }

    public function du_details() {
         $query = $this->db->query("
            SELECT
                d.DU_id,d.DU_name,staff.name,staff.position,staff.email,staff.contact_no,staff.address
            FROM
                dining_unit d
            JOIN 
                dining_unit_department dep on dep.DU_id = d.DU_id
            JOIN
                dining_unit_staff staff on staff.DU_dept_id = dep.DU_dept_id
            where staff.position ='Director'
        ");
        return $query->result_array();
    }

    public function du_stu_schedule_match() {
        $query = $this->db->query("
            SELECT
                    d.DU_id,d.DU_name, d.zipcode, 
                    dsc.day,dsc.start_time,dsc.end_time,
                    s.student_id, s.student_name,
                    sc.day as stu_day,sc.start_time as student_startTime,sc.end_time as student_endTime
            FROM 
                dining_unit d 
            JOIN 
                dining_unit_schedule dsc ON d.DU_id = dsc.DU_id
            JOIN 
                student_employment emp ON emp.DU_id = d.DU_id
            JOIN
                student s ON s.student_id = emp.student_id
            JOIN 
                student_work_schedule sc ON sc.student_id = emp.student_id 
            WHERE 
                emp.status = 'active' AND
                sc.day = dsc.day AND 
                hour(sc.start_time) between hour(dsc.start_time) AND hour(dsc.end_time)
 
        ");
        return $query->result_array();
    }

    public function work_strikes() {
        $query = $this->db->query("
            SELECT
                emp.student_id,s.student_name,s.contact_no,s.local_address,
                sum(wsk.no_of_strikes) as total_strikes
            FROM
                student_employment emp 
            JOIN
                student s ON s.student_id = emp.student_id
            JOIN
                student_work_strikes wsk ON emp.student_id=wsk.student_id
            GROUP BY
                wsk.student_id
            ORDER BY total_strikes desc
        ");
        return $query->result_array();
    }

}
