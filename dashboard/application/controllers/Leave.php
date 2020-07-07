<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller {

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
	 $this->load->model(['Requisition_model', 'Leave_model','User_model', 'Department_model']);
	  $this->load->library('form_validation');
	  $this->layout = 'layouts/master';

	 	

		if (!$_SESSION['email'])
		{
			redirect('user/login'); // the user is not logged in, redirect them!
		}
	}


	public function Index()
	{
		$email = $_SESSION['email'];
		$dept = $_SESSION['dept'];
		$data['user'] = $this->User_model->FindUser($email);
		$data['user_leaves'] = $this->Leave_model->GetUserLeaveRequests($email);
		$data['dept_pending_leaves'] = $this->Leave_model->GetDeptPendingLeaveRequests($dept);
		$data['dept_approved_leaves'] = $this->Leave_model->GetDeptApprovedLeaveRequests($dept);
		$data['MD_pending_leaves'] = $this->Leave_model->GetAllPendingLeaveRequests();
        $data['MD_approved_leaves'] = $this->Leave_model->GetAllApprovedLeaveRequests();
        //var_dump($data['MD_approved_leaves']);
		$data['content'] = 'leaves/lists';
		$this->load->view($this->layout, $data);
	}

	public function Create()
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $data['content'] = 'leaves/create';
       $this->load->view($this->layout, $data);
    }
    
    public function CreateAction()
	{
		$data['email'] = $_SESSION['email'];
		$data['name'] = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
		 $data['dept'] = $_SESSION['dept'];
		$data['purpose'] = $this->input->post('purpose');
		$data['from'] = date('Y-m-d', strtotime($this->input->post('from')));
		$data['to'] = date('Y-m-d', strtotime($this->input->post('to')));
		//var_dump($data);

		$inserted = $this->Leave_model->InsertLeave($data);

		if($inserted > 0)
		{
			$email = $data['email'];
			$name = 	$data['name'];
			$HODEmail = $this->User_model->GetHODEmail($data['dept']);
			$to = $HODEmail->email;
			$subject = "Leave Approval Needed";
			$message = "Dear HOD, your approval is kindly needed for my newly submitted leave application.";
			
			SendMail($email, $name, $to, $subject, $message);
			
		}	
			$_SESSION['success'] = 'Leave request successfully submitted.'; 
			redirect(site_url('leave'));
	}

	public function HODView($id)
	{
	    $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Leave_model->FindItem($id);
		$data['process_level'] = $this->Leave_model->CheckProcessLevel($id);
		 	//var_dump($data);
	   $data['content'] = 'leaves/hod_view';
	   $this->load->view($this->layout, $data);
	}

	public function HodRecommend($id)
	{
		$inserted = $this->Leave_model->HodRecommend($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];

			$UserEmail = $this->User_model->GetUserEmail3($id);
			 $to2 = $UserEmail->email;
			 
			$subject2 = "Your Leave Request Has Been Recommended";
			$message2 = "Congratulations, your leave request has been recommended by your line manager!";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Leave successfully recommended.'; 
			redirect(site_url('leave')); 
	}

	public function HodReject($id)
	{
		$inserted = $this->Leave_model->HodReject($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];

			$UserEmail = $this->User_model->GetUserEmail3($id);
			$to2 = $UserEmail->email;
			$subject2 = "Your Leave Has Been Rejected";
			$message2 = "Dear Staff, Sorry to inform you that your leave application was not approved.";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Leave request rejected successfully.';
		  redirect('leave'); 
	}
	
	public function MDView($id)
	{
	    $email = $_SESSION['email'];
	    $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Leave_model->FindItem($id);
		$data['process_level'] = $this->Leave_model->CheckProcessLevel($id);
		 	//var_dump($data);
	    $data['content'] = 'leaves/MD-view';
	    $this->load->view($this->layout, $data);
	}
	
	public function MDApprove($id)
	{
		$inserted = $this->Leave_model->MDApprove($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];

			$UserEmail = $this->User_model->GetUserEmail3($id);
			 $to2 = $UserEmail->email;
			 
			$subject2 = "Your Leave Request Has Been Approved";
			$message2 = "Congratulations, your leave request has been approved!";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Leave successfully approved.'; 
			redirect(site_url('leave')); 
	}
	
	public function MDReject($id)
	{
		$inserted = $this->Leave_model->MDReject($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];

			$UserEmail = $this->User_model->GetUserEmail3($id);
			$to2 = $UserEmail->email;
			$subject2 = "Your Leave Has Been Rejected";
			$message2 = "Dear Staff, Sorry to inform you that your leave application was not approved.";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Leave request rejected successfully.';
		  redirect('leave'); 
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
