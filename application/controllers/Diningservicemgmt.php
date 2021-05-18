<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diningservicemgmt extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');

	}

	/* Start of Department */
		public function departmentlist()
		{
			$data = array();
			$data['title'] = 'New Title';
			// $data['heading'] = 'Student List';
	        $data['departments'] = $this->Department_model->department_list();
	        $this->load->view('templates/header',array('heading'=> 'University Departments'));
	        $this->load->view('departments/departmentlist', $data);
	        $this->load->view('templates/footer');
		}

		public function adddepartment()
		{
			//Check submit button 
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Department_model->saverecords($this->input->post());
				redirect('diningservicemgmt/departmentlist');
			}
	        $this->load->view('templates/header',array('heading'=> 'Add Department'));
	        $this->load->view('departments/adddepartment');
	        $this->load->view('templates/footer');
		}

		public function editdepartment($dept_id)
		{
			$data['deptData'] = $this->Department_model->getDepartment($dept_id);
			//print_r($data);exit;
			//Check submit button 
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Department_model->updaterecords($dept_id, $this->input->post());
				redirect('diningservicemgmt/departmentlist');
			}
	        $this->load->view('templates/header',array('heading'=> 'Edit Department'));
	        $this->load->view('departments/editdepartment',$data);
	        $this->load->view('templates/footer');
		}

		public function deletedepartment($dept_id=0)
		{
			if($dept_id>0){
				$this->Department_model->deleterecord($dept_id);
			}
			redirect('diningservicemgmt/departmentlist');
		}

	/* End of Department*

	/* Start of Student*/
		public function liststudent()
		{
			$data = array();
			$data['title'] = 'New Title';
			// $data['heading'] = 'Student List';
	        $data['students'] = $this->Student_model->student_list();
	        $this->load->view('templates/header',array('heading'=> 'Students'));
	        $this->load->view('students/studentlist', $data);
	        $this->load->view('templates/footer');
		}

		public function addstudent()
		{
			//Check submit button 
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Student_model->saverecords($this->input->post());
				redirect('diningservicemgmt/liststudent');
			}
	        $this->load->view('templates/header',array('heading'=> 'Add Student'));
	        $this->load->view('students/addstudent');
	        $this->load->view('templates/footer');
		}

		public function editstudent($student_id)
		{
			$data['studentData'] = $this->Student_model->getStudent($student_id);
			//print_r($data);exit;
			//Check submit button 
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Student_model->updaterecords($student_id, $this->input->post());
				redirect('diningservicemgmt/liststudent');
			}
	        $this->load->view('templates/header',array('heading'=> 'Edit Student'));
	        $this->load->view('students/editstudent',$data);
	        $this->load->view('templates/footer');
		}

		public function deletestudent($student_id=0)
		{
			if($student_id>0){
				$this->Student_model->deleterecord($student_id);
			}
			redirect('diningservicemgmt/liststudent');
		}

		public function hirestudent($student_id) {
			$data['duData'] = $this->Diningunit_model->diningunit_list();
			$data['studentData'] = $this->Student_model->getStudent($student_id);
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Student_model->hirestudent($student_id,$this->input->post());
				redirect('diningservicemgmt/liststudent');
			}
	        $this->load->view('templates/header',array('heading'=> 'Hire Student'));
	        $this->load->view('students/hirestudent',$data);
	        $this->load->view('templates/footer');
		}

	/* End of Student*/

	/* Start of Dining Unit */
		public function listdiningunit()
		{
			$data = array();
			$data['title'] = 'New Title';
			// $data['heading'] = 'Student List';
	        $data['diningunits'] = $this->Diningunit_model->diningunit_list();
	        $this->load->view('templates/header',array('heading'=> 'Dining Units'));
	        $this->load->view('diningunits/diningunitlist', $data);
	        $this->load->view('templates/footer');
		}

		public function adddiningunit()
		{
			//Check submit button 
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Diningunit_model->saverecords($this->input->post());
				redirect('diningservicemgmt/listdiningunit');
			}
	        $this->load->view('templates/header',array('heading'=> 'Add Dining Unit'));
	        $this->load->view('diningunits/adddiningunit');
	        $this->load->view('templates/footer');
		}

		public function editdiningunit($DU_id)
		{
			$data['duData'] = $this->Diningunit_model->getDiningunit($DU_id);
			//print_r($data);exit;
			//Check submit button 
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Diningunit_model->updaterecords($DU_id, $this->input->post());
				redirect('diningservicemgmt/listdiningunit');
			}
	        $this->load->view('templates/header',array('heading'=> 'Edit Dining Unit'));
	        $this->load->view('diningunits/editdiningunit',$data);
	        $this->load->view('templates/footer');
		}

		public function deletediningunit($DU_id=0)
		{
			if($DU_id>0){
				$this->Diningunit_model->deleterecord($DU_id);
			}
			redirect('diningservicemgmt/listdiningunit');
		}

		public function addstaff($DU_id) {
			$data['duData'] = $this->Diningunit_model->getDiningunit($DU_id);
			$data['departments'] = $this->Diningunit_model->getDUDepts($DU_id);
			
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Diningunit_model->addStaff($this->input->post());
				redirect('diningservicemgmt/listdiningunit');
			}
	        $this->load->view('templates/header',array('heading'=> 'Add staff'));
	        $this->load->view('diningunits/addstaff',$data);
	        $this->load->view('templates/footer');
		}

	/* End of Dining Unit*/

	/* Start of Operation Manager */
		public function listopsmgr()
		{
			$data = array();
			$data['title'] = 'New Title';
	        $data['Mgrs'] = $this->Opsmgr_model->opsmgr_list();
	        $this->load->view('templates/header',array('heading'=> 'Operation Managers'));
	        $this->load->view('opsmgr/mgrlist.php', $data);
	        $this->load->view('templates/footer');
		}

		public function addopsmgr()
		{
			//Check submit button 
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Opsmgr_model->saverecords($this->input->post());
				redirect('diningservicemgmt/listopsmgr');
			}
	        $this->load->view('templates/header',array('heading'=> 'Add Operation Manager'));
	        $this->load->view('opsmgr/addopsmgr');
	        $this->load->view('templates/footer');
		}

		public function editopsmgr($ops_mgr_id)
		{
			$data['mgrData'] = $this->Opsmgr_model->getOpsMgr($ops_mgr_id);
			//print_r($data);exit;
			//Check submit button 
			if($this->input->server('REQUEST_METHOD') === 'POST')
			{
				$this->Opsmgr_model->updaterecords($ops_mgr_id, $this->input->post());
				redirect('diningservicemgmt/listopsmgr');
			}
	        $this->load->view('templates/header',array('heading'=> 'Edit Operation Manager'));
	        $this->load->view('opsmgr/editopsmgr',$data);
	        $this->load->view('templates/footer');
		}

		public function deleteopsmgr($ops_mgr_id=0)
		{
			if($ops_mgr_id>0){
				$this->Opsmgr_model->deleterecord($ops_mgr_id);
			}
			redirect('diningservicemgmt/listopsmgr');
		}

	/* End of Operation Manager */

	/* Start of Reports */
		public function reports($name = 'active_students') {
			$data = array();
			switch($name) {
				case 'active_students': $heading = 'Active Student List';
								$data['activeStudents'] = $this->Report_model->active_student_list();
				break;
				case 'employed_students': $heading = 'Employed Student List';
								$data['employedStudents'] = $this->Report_model->employed_student_list();
				break;
				case 'total_working_hours': $heading = "Student's Total Working Hours";
								$data['student_working_hours'] = $this->Report_model->total_working_hours();
				break;
				case 'gt_20_hours': $heading = "Students who exceeded the 20 hours limit";
								$data['student_working_hours_gt_20'] = $this->Report_model->total_working_hours_gt_20();
				break;
				case 'student_details_ssn': $heading = "Student Details with SSN[Decrypted]";
								$data['student_details_ssn'] = $this->Report_model->student_details_ssn();
				break;
				case 'salary_calculate': $heading = "Salary Calculations for Feb 2020 First Half";
								$data['salary_calculate'] = $this->Report_model->salary_calculate();
				break;
				case 'du_all_staff': $heading = "Dinig Unit Staff[All]";
								$data['du_all_staff'] = $this->Report_model->du_all_staff();
				break;
				case 'du_details': $heading = "Dining Unit Details";
								$data['du_details'] = $this->Report_model->du_details();
				break;
				case 'schedule_matches': $heading = "Student and Dining Unit Schedule Matching";
								$data['schedule_matches'] = $this->Report_model->du_stu_schedule_match();
				break;
				case 'work_strikes': $heading = "Student Work Strikes";
								$data['work_strikes'] = $this->Report_model->work_strikes();
				break;
			}
			// print_R($data);
			$this->load->view('templates/header',array('heading'=> $heading));
			$this->load->view('reports/'.$name,$data);
		    $this->load->view('templates/footer');
		}

	/* End of Reports */

}
