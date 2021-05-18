<?php
class Diningunit_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function diningunit_list() {
       return $this->db->select('*')->from('dining_unit')->get()->result_array();
    }

    public function saverecords($data) {
        $this->db->insert('dining_unit', $data);
    }

    public function getDiningunit($DU_id) {
        $query = $this->db->get_where ( 'dining_unit', array (
                'DU_id' => $DU_id 
        ) );
        return $query->row_array ();
    }

    public function updaterecords($DU_id, $data) {
        $this->db->where('DU_id', $DU_id);
        $this->db->update('dining_unit', $data);
    }

    public function deleterecord($DU_id) {
        $this->db->delete('dining_unit', array('DU_id' => $DU_id)); 
    }

    public function getDUDepts($DU_id) {
        $query = $this->db->query("
            SELECT
                *
            FROM 
                 dining_unit_department 
            WHERE 
                DU_id = " . $DU_id
        );
        return $query->result_array();
    }

    public function addStaff($data) {
        $this->db->insert('dining_unit_staff', $data);
    }
}
