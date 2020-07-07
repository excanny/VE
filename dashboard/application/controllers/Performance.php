<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public $layout;

	public function __construct()
	{
	  parent::__construct();
	  $this->load->model(['Calendar_model', 'User_model', 'Leave_model', 'Requisition_model', 'Department_model', 'Performance_model']);
	  $this->load->library('form_validation');
	  $this->layout = 'layouts/master';
	  
		if (!$_SESSION['email'])
		{
			redirect('user/login'); // the user is not logged in, redirect them!
		}
	}


	public function index()
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$data['reqsMD'] = $this->Requisition_model->GetAllApprovedItems();
		$data['procured_reqs'] = $this->Requisition_model->GetAllProcuredItems();
		$data['content'] = 'performance/index';
		$this->load->view($this->layout, $data);
	}

	public function CreateAction()
	{

		$config['upload_path'] = './uploads/evaluation_sheets';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('performance_sheet'))
		{
			$uploadData = $this->upload->data();
			$performance_sheet = $uploadData['file_name'];	
		}
	

		if ($this->upload->do_upload('action_plan'))
		{
			$uploadData2 = $this->upload->data();
			 $action_plan = $uploadData2['file_name'];
		}
		

		$data['staff_email'] = $this->input->post('staff_email');
		$data['dept'] = $this->input->post('dept');
		$data['job_length'] = $this->input->post('job_length');
		$data['appraisal_period'] = $this->input->post('appraisal_period') . ' '. $this->input->post('year');
		$data['employ_date'] = date('Y-m-d', strtotime($this->input->post('employ_date')));
		$data['academic_qual'] = $this->input->post('academic_qual');
		$data['leadership_staff'] = $this->input->post('leadership_staff');
		$data['mgt_skills_staff'] = $this->input->post('mgt_skills_staff');
		$data['decision_staff'] = $this->input->post('decision_staff');
		$data['planning_staff'] = $this->input->post('planning_staff');
		$data['business_understanding_staff'] = $this->input->post('business_understanding_staff');
		$data['customer_service_staff'] = $this->input->post('customer_service_staff');
		$data['interpersonal_staff'] = $this->input->post('interpersonal_staff');
		$data['discipline_staff'] = $this->input->post('discipline_staff');
		$data['budget_control_staff'] = $this->input->post('budget_control_staff');
		$data['communication_staff'] = $this->input->post('communication_staff');
		$data['tasks'] = $this->input->post('tasks');
		$data['cost_saving'] = $this->input->post('cost_saving');
		$data['performance_sheet'] = $performance_sheet;
		$data['action_plan'] = $action_plan;
		$data['career_dev'] = $this->input->post('career_dev');
		
		
		//var_dump($data);

	 $inserted = $this->Performance_model->InsertPerformance($data);

		if($inserted > 0)
		{
			$_SESSION['success'] = 'Form successfully submitted.'; 
			redirect(site_url('/'));
		}	
			
	}

	public function HOD()
	{
		$email = $_SESSION['email'];
		$user = $this->User_model->FindUser($email);
		$data['user'] = $this->User_model->FindUser($email);
		
		
		if ($user->isHOD != 1)
		{
			redirect('/'); // the user is not logged in, redirect them!
		}
        
		$dept = $_SESSION['dept'];
		$data['performanceHODPending'] = $this->Performance_model->GetDeptPerformancePending($dept);
		$data['performanceHODTreated'] = $this->Performance_model->GetDeptPerformanceTreated($dept);
		$data['content'] = 'performance/hod_list';
		$this->load->view($this->layout, $data);
	}

	public function HODView($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['performance'] = $this->Performance_model->GetPerformance($id);
		$data['content'] = 'performance/hod_view';
		$this->load->view($this->layout, $data);
	}

	public function HODUpdate($id)
	{
		$data['employ_date'] = date('Y-m-d', strtotime($this->input->post('employ_date')));
		$data['leadership_hod'] = $this->input->post('leadership_hod');
		$data['mgt_skills_hod'] = $this->input->post('mgt_skills_hod');
		$data['decision_hod'] = $this->input->post('decision_hod');
		$data['planning_hod'] = $this->input->post('planning_hod');
		$data['business_understanding_hod'] = $this->input->post('business_understanding_hod');
		$data['customer_service_hod'] = $this->input->post('customer_service_hod');
		$data['interpersonal_hod'] = $this->input->post('interpersonal_hod');
		$data['discipline_hod'] = $this->input->post('discipline_hod');
		$data['budget_control_hod'] = $this->input->post('budget_control_hod');
		$data['communication_hod'] = $this->input->post('communication_hod');
		$data['total_assessment_rating1'] = $this->input->post('total_assessment_rating1');
		$data['total_assessment_rating2'] = $this->input->post('total_assessment_rating2');
		$data['staff_strength'] = $this->input->post('staff_strength');
		$data['areas_to_dev'] = $this->input->post('areas_to_dev');
		$data['recommended_trainings'] = $this->input->post('recommended_trainings');
		$data['recommendation'] = $this->input->post('recommendation');
		$data['hod_name'] = $this->input->post('hod_name');
		$data['hod_review_date'] = $this->input->post('hod_review_date');
		$data['process_level'] = 1;
		
		
		//var_dump($data);

	 $inserted = $this->Performance_model->HODUpdate($data, $id);

		if($inserted > 0)
		{
			$_SESSION['success'] = 'Form successfully submitted.'; 
			redirect(site_url('performance/hod'));
		}	
			
	}

	public function HODViewDone($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['performance'] = $this->Performance_model->GetPerformance($id);
		$data['content'] = 'performance/hod_view_done';
		$this->load->view($this->layout, $data);
	}

	public function HR()
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['performanceHRPending'] = $this->Performance_model->GetHRPerformancePending($dept);
		$data['performanceHRTreated'] = $this->Performance_model->GetHRPerformanceTreated($dept);
		$data['content'] = 'performance/hr_list';
		$this->load->view($this->layout, $data);
	}

	public function HRView($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['performance'] = $this->Performance_model->GetPerformance($id);
		$data['content'] = 'performance/hr_view';
		$this->load->view($this->layout, $data);
	}

	public function HRUpdate($id)
	{
		$data['leadership_hr'] = $this->input->post('leadership_hr');
		$data['mgt_skills_hr'] = $this->input->post('mgt_skills_hr');
		$data['decision_hr'] = $this->input->post('decision_hr');
		$data['planning_hr'] = $this->input->post('planning_hr');
		$data['business_understanding_hr'] = $this->input->post('business_understanding_hr');
		$data['customer_service_hr'] = $this->input->post('customer_service_hr');
		$data['interpersonal_hr'] = $this->input->post('interpersonal_hr');
		$data['discipline_hr'] = $this->input->post('discipline_hr');
		$data['budget_control_hr'] = $this->input->post('budget_control_hr');
		$data['communication_hr'] = $this->input->post('communication_hr');
		$data['hr_comment'] = $this->input->post('hr_comment');
		$data['process_level'] = 2;
		
		
		//var_dump($data);

	  echo $inserted = $this->Performance_model->HRUpdate($data, $id);

		if($inserted > 0)
		{
			$_SESSION['success'] = 'Form successfully submitted.'; 
			redirect(site_url('performance/hr'));
		}	
			
	}

	public function HRViewDone($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['performance'] = $this->Performance_model->GetPerformance($id);
		$data['content'] = 'performance/hr_view_done';
		$this->load->view($this->layout, $data);
	}

	public function MD()
	{
		$email = $_SESSION['email'];
		$user = $this->User_model->FindUser($email);
		$data['user'] = $this->User_model->FindUser($email);
		
		
		if ($user->isMD != 1)
		{
			redirect('/'); // the user is not logged in, redirect them!
		}
        
		$dept = $_SESSION['dept'];
		$data['performanceMDPending'] = $this->Performance_model->GetMDPerformancePending($dept);
		$data['performanceMDTreated'] = $this->Performance_model->GetMDPerformanceTreated($dept);
		$data['content'] = 'performance/md_list';
		$this->load->view($this->layout, $data);
	}

	public function MDView($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['performance'] = $this->Performance_model->GetPerformance($id);
		$data['content'] = 'performance/md_view';
		$this->load->view($this->layout, $data);
	}

	public function MDUpdate($id)
	{
		
		$data['md_comment'] = $this->input->post('md_comment');
		$data['process_level'] = 3;
		
		
		//var_dump($data);

	 $inserted = $this->Performance_model->MDUpdate($data, $id);

		if($inserted > 0)
		{
			$_SESSION['success'] = 'Form successfully submitted.'; 
			redirect(site_url('performance/md'));
		}	
			
	}

	public function MDViewDone($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['performance'] = $this->Performance_model->GetPerformance($id);
		$data['content'] = 'performance/md_view_done';
		$this->load->view($this->layout, $data);
	}




	public function GetDeptWithDeptID($dept_ID)
	{
        $dept = $this->Department_model->GetDeptWithDeptID($dept_ID);
        return $dept->name; 
	}

	public function GetUserWithEmail($email)
	{
        $user= $this->User_model->GetUserWithEmail($email);
        return $user->first_name . ' ' . $user->last_name; 
	}
	
	public function GetUnreadMessageCount($id)
	{
        $count = $this->User_model->GetUnreadMessageCount($id);
        return $count; 
	}
	
}
