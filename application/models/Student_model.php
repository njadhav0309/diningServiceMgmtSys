<?php
class Student_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function student_list() {
       //return $this->db->select('*')->from('student')->get()->result_array();
       $query = $this->db->query("
            SELECT
                s.*, se.student_emp_id
            FROM 
                 student s
            LEFT JOIN student_employment se ON s.student_id = se.student_id 
        ");
        return $query->result_array();
    }

    public function saverecords($data) {
        $this->db->insert('student', $data);
    }

    public function getStudent($student_id) {
        $query = $this->db->get_where ( 'student', array (
                'student_id' => $student_id 
        ) );
        return $query->row_array ();
    }

    public function updaterecords($student_id, $data) {
        $this->db->where('student_id', $student_id);
        $this->db->update('student', $data);
    }

    public function deleterecord($student_id) {
        $this->db->delete('student', array('student_id' => $student_id)); 
    }

    public function hirestudent($student_id,$data){
        $data['student_id'] = $student_id;
        $this->db->insert('student_employment', $data);
    }
}
