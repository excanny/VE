<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class appraisal extends CI_Controller {

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
	  $this->load->model(['Calendar_model', 'User_model', 'Leave_model', 'Requisition_model', 'Department_model', 'Appraisal_model']);
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
		$data['content'] = 'appraisal/index';
		$this->load->view($this->layout, $data);
	}

	public function CreateAction()
	{
		$config['upload_path'] = './uploads/appraisal_sheets';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('appraisal_sheet'))
		{
			$uploadData = $this->upload->data();
			$appraisal_sheet = $uploadData['file_name'];	
		}
	

		if ($this->upload->do_upload('action_plan'))
		{
			$uploadData2 = $this->upload->data();
			 $action_plan = $uploadData2['file_name'];
		}
		
		$data['staff_email'] = $this->input->post('staff_email');
		$data['dept'] = $this->input->post('dept');
		$data['appraisal_period'] = $this->input->post('appraisal_period') . ' '. $this->input->post('year');
		$data['employ_date'] = date('Y-m-d', strtotime($this->input->post('employ_date')));
        $data['academic_qual'] = $this->input->post('academic_qual');
        $data['appraisal_sheet'] = $appraisal_sheet;
        $data['action_plan'] = $action_plan;
        $data['career_dev'] = $this->input->post('career_dev');
    
		
		//var_dump($data);

	  $inserted = $this->Appraisal_model->InsertAppraisal($data);

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
		$data['appraisalHODPending'] = $this->Appraisal_model->GetDeptAppraisalPending($dept);
		$data['appraisalHODTreated'] = $this->Appraisal_model->GetDeptAppraisalTreated($dept);
		
		$data['content'] = 'appraisal/hod_list';
		$this->load->view($this->layout, $data);
	}

	public function HODView($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['appraisal'] = $this->Appraisal_model->Getappraisal($id);
		$data['content'] = 'appraisal/hod_view';
		$this->load->view($this->layout, $data);
	}

	public function HODUpdate($id)
	{

		$data['core_values'] = $this->input->post('core_values');
		$data['team_work'] = $this->input->post('team_work');
		$data['innovative'] = $this->input->post('innovative');
		$data['job_knowledge'] = $this->input->post('job_knowledge');
		$data['analytic'] = $this->input->post('analytic');
		$data['awareness'] = $this->input->post('awareness');
		$data['follow_up'] = $this->input->post('follow_up');
		$data['attention_to_details'] = $this->input->post('attention_to_details');
		$data['good_judgement'] = $this->input->post('good_judgement');
        $data['business_understanding'] = $this->input->post('business_understanding');
        $data['negotiate'] = $this->input->post('negotiate');
		$data['good_dress'] = $this->input->post('good_dress');
		$data['punctual'] = $this->input->post('punctual');
		$data['assertive'] = $this->input->post('assertive');
        $data['confidence'] = $this->input->post('confidence');
        $data['communicate'] = $this->input->post('communicate');
		$data['feedback'] = $this->input->post('feedback');
        $data['patient'] = $this->input->post('patient');
        $data['responsible'] = $this->input->post('responsible');
		$data['telephone_etiquette'] = $this->input->post('telephone_etiquette');
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

	$inserted = $this->Appraisal_model->HODUpdate($data, $id);

		if($inserted > 0)
		{
			$_SESSION['success'] = 'Form successfully submitted.'; 
			redirect(site_url('appraisal/hod'));
		}	
			
	 }

	public function HODViewDone($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['appraisal'] = $this->Appraisal_model->Getappraisal($id);
		$data['content'] = 'appraisal/hod_view_done';
		$this->load->view($this->layout, $data);
	}

	public function HR()
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['appraisalHRPending'] = $this->Appraisal_model->GetHRappraisalPending($dept);
		$data['appraisalHRTreated'] = $this->Appraisal_model->GetHRappraisalTreated($dept);
		$data['content'] = 'appraisal/hr_list';
		$this->load->view($this->layout, $data);
	}

	public function HRView($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['appraisal'] = $this->Appraisal_model->Getappraisal($id);
		$data['content'] = 'appraisal/hr_view';
		$this->load->view($this->layout, $data);
	}

	public function HRUpdate($id)
	{
		$data['hr_comment'] = $this->input->post('hr_comment');
		$data['process_level'] = 2;
		
		
		//var_dump($data);

	   $inserted = $this->Appraisal_model->HRUpdate($data, $id);

		if($inserted > 0)
		{
			$_SESSION['success'] = 'Form successfully submitted.'; 
			redirect(site_url('appraisal/hr'));
		}	
			
	}

	public function HRViewDone($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['appraisal'] = $this->Appraisal_model->Getappraisal($id);
		$data['content'] = 'appraisal/hr_view_done';
		$this->load->view($this->layout, $data);
	}

	public function MD()
	{
		$email = $_SESSION['email'];
		$user = $this->User_model->FindUser($email);
		$data['user'] = $this->User_model->FindUser($email);
		
		
		if ($user->isHOD != 1)
		{
			redirect('/'); // the user is not logged in, redirect them!
		}
        
		$dept = $_SESSION['dept'];
		$data['appraisalMDPending'] = $this->Appraisal_model->GetMDappraisalPending($dept);
		$data['appraisalMDTreated'] = $this->Appraisal_model->GetMDappraisalTreated($dept);
		$data['content'] = 'appraisal/md_list';
		$this->load->view($this->layout, $data);
	}

	public function MDView($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['appraisal'] = $this->Appraisal_model->Getappraisal($id);
		$data['content'] = 'appraisal/md_view';
		$this->load->view($this->layout, $data);
	}

	public function MDUpdate($id)
	{
		
		$data['md_comment'] = $this->input->post('md_comment');
		$data['process_level'] = 3;
		
		
		//var_dump($data);

	 $inserted = $this->Appraisal_model->MDUpdate($data, $id);

		if($inserted > 0)
		{
			$_SESSION['success'] = 'Form successfully submitted.'; 
			redirect(site_url('appraisal/md'));
		}	
			
	}

	public function MDViewDone($id)
	{
        $email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		$dept = $_SESSION['dept'];
		$data['appraisal'] = $this->Appraisal_model->Getappraisal($id);
		$data['content'] = 'appraisal/md_view_done';
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
