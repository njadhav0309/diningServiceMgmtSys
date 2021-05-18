<?php
class Department_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function department_list() {
       return $this->db->select('*')->from('department')->get()->result_array();
    }

    public function saverecords($data) {
        $this->db->insert('department', $data);
    }

    public function getDepartment($dept_id) {
        $query = $this->db->get_where ( 'department', array (
                'dept_id' => $dept_id 
        ) );
        return $query->row_array ();
    }

    public function updaterecords($dept_id, $data) {
        $this->db->where('dept_id', $dept_id);
        $this->db->update('department', $data);
    }

    public function deleterecord($dept_id) {
        $this->db->delete('department', array('dept_id' => $dept_id)); 
    }
}
