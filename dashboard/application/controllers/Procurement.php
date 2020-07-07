<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurement extends CI_Controller {

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
	  $this->load->model(['Calendar_model', 'User_model', 'Leave_model', 'Requisition_model', 'Department_model']);
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
		$data['content'] = 'procurement/index';
		$this->load->view($this->layout, $data);
	}

	public function ProcureView($id)
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $data['basic_info'] = $this->Requisition_model->FindItem($id);
	   $data['details_info'] = $this->Requisition_model->FindItemDetails($id);
	   $data['process_level'] = $this->Requisition_model->CheckProcessLevel($id);
		 	//var_dump($data);
	   $data['content'] = 'procurement/procure-view';
	   $this->load->view($this->layout, $data);
	}

	public function View($id)
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $data['basic_info'] = $this->Requisition_model->FindItem($id);
	   $data['details_info'] = $this->Requisition_model->FindItemDetails($id);
	   $data['process_level'] = $this->Requisition_model->CheckProcessLevel($id);
		 	//var_dump($data);
	   $data['content'] = 'procurement/user-view';
	   $this->load->view($this->layout, $data);
	}
	
	public function MarkedAsProccessed($id)
	{
		
		echo $inserted = $this->Requisition_model->MarkedAsProccessed($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];

			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Procured";
			$message2 = "Dear Staff, your submitted requisition Requisition ID: VG$id is now available for pick up";
			
			SendMail($email, $name, $to2, $subject2, $message2);

			$_SESSION['success'] = 'Requisition successfully marked as procured.'; 
			redirect(site_url('procurement')); 
		}
			
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
