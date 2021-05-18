<?php
class Opsmgr_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function opsmgr_list() {
       return $this->db->select('*')->from('operation_manager')->get()->result_array();
    }

    public function saverecords($data) {
        $this->db->insert('operation_manager', $data);
    }

    public function getOpsMgr($ops_mgr_id) {
        $query = $this->db->get_where ( 'operation_manager', array (
                'ops_mgr_id' => $ops_mgr_id 
        ) );
        return $query->row_array ();
    }

    public function updaterecords($ops_mgr_id, $data) {
        $this->db->where('ops_mgr_id', $ops_mgr_id);
        $this->db->update('operation_manager', $data);
    }

    public function deleterecord($ops_mgr_id) {
        $this->db->delete('operation_manager', array('ops_mgr_id' => $ops_mgr_id)); 
    }
}
