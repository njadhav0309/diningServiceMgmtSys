<?php
class Students extends CI_Controller {

    /*public function __construct() {
        parent::__construct();
        $this->load->model('Student_model');
    }*/

    public function index() {
    	echo "Reached";
    	exit;
        /*$data = array();
        $tab = $this->Student_model->user_list();
        $this->load->view('student/list', $data);*/
        // $data['title'] = 'Home';
        // $this->load->view('templates/header.php')
        // $this->load->view('page1.php',$data)
        // $this->load->view('templates/footer.php')
    }
}