<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requisition extends CI_Controller 
{

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
	 $this->load->model(['Requisition_model', 'User_model', 'Department_model']);
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
		$data['reqsMD'] = $this->Requisition_model->GetAllApprovedItems();
		$data['pending_reqsMD'] = $this->Requisition_model->GetAllPendingItemsMD();
		$data['user_req'] = $this->Requisition_model->GetAllItemsByUser($email);
		$data['dept_req'] = $this->Requisition_model->GetAllItemsByDept($dept);
		$data['pending_dept_req'] = $this->Requisition_model->GetAllPendingItemsByDept($dept);
		//var_dump($data);
		$data['content'] = 'requisitions/lists';
		$this->load->view($this->layout, $data);
	}

	public function Create()
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $data['content'] = 'requisitions/create';
	   $this->load->view($this->layout, $data);
	}

	public function CreateDetails()
	{
	    $email = $_SESSION['email'];
	    $data['user'] = $this->User_model->FindUser($email);
		$data2['user_email'] = $email;
		$data2['dept'] = $_SESSION['dept'];
		$data2['no_of_items'] = $this->input->post('no_of_items');
		$data['req_ID'] = $this->Requisition_model->InsertItem($data2);
		//var_dump($data2);
		
		$data['no_of_items'] = $this->input->post('no_of_items');

		$data['content'] = 'requisitions/create_details';
	    $this->load->view($this->layout, $data);	
	}

	public function CreateDetailsAction()
	{
		$email = $_SESSION['email'];
		$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
		$user_email = $email;
		$dept = $_SESSION['dept'];
		$req_ID = $this->input->post('rID');

		for($i=0; $i<count($this->input->post('id')); $i++)
		{
			$data[]=array(
				'req_ID' => $this->input->post('req_ID')[$i],
				'name'=>$this->input->post('name')[$i],
				'price'=>$this->input->post('price')[$i],
				'description'=>$this->input->post('description')[$i],
			);
		}

		$inserted = $this->Requisition_model->InsertBatchItems($data);
		
		if($inserted > 0)
		{
			$email = $email;
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
			$HODEmail = $this->User_model->GetHODEmail($dept);
			$to = $HODEmail->email;
		
			$subject = "Requisition Recommedation Needed";
			$message = "Dear HOD, your recommendation is kindly needed for my newly submitted requisition form with Requisition ID: VG$req_ID";
			
			SendMail($email, $name, $to, $subject, $message);
			
		}	
			$_SESSION['success'] = 'Requisition successfully submitted.'; 
			redirect(site_url('requisition'));
	}

	public function AccountsView($id)
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Requisition_model->FindItem($id);
		$data['details_info'] = $this->Requisition_model->FindItemDetails($id);
		$data['process_level'] = $this->Requisition_model->CheckProcessLevel($id);
		 	//var_dump($data);
	   $data['content'] = 'requisitions/accounts-view';
	   $this->load->view($this->layout, $data);
	}

	public function UserView($id)
	{
		$email = $_SESSION['email'];
	    $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Requisition_model->FindItem($id);
		$data['details_info'] = $this->Requisition_model->FindItemDetails($id);
		 	//var_dump($data);
	   $data['content'] = 'requisitions/user-view';
	   $this->load->view($this->layout, $data);
	}

	public function HODView($id)
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Requisition_model->FindItem($id);
		$data['details_info'] = $this->Requisition_model->FindItemDetails($id);
		$data['process_level'] = $this->Requisition_model->CheckProcessLevel($id);
		 	//var_dump($data);
	   $data['content'] = 'requisitions/hod_view';
	   $this->load->view($this->layout, $data);
	}

	public function HodRecommend($id)
	{
		
		$inserted = $this->Requisition_model->HodRecommend($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
			$MDEmail = $this->User_model->GetMDEmail();
			$to = $MDEmail->email;
			$subject = "Requisition Approval Needed";
			$message = "Dear MD, your approval is kindly needed for a submitted requisition Requisition ID: VG$id";
			
			SendMail($email, $name, $to, $subject, $message);

			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Recommended";
			$message2 = "Dear Staff, your submitted requisition Requisition ID: VG$id has been recommended for approval";
			
			SendMail($email, $name, $to2, $subject2, $message2);

			$_SESSION['success'] = 'Requisition successfully recommended.'; 
			redirect(site_url('requisition')); 
		}
			
	}

	public function HodReject($id)
	{
		$inserted = $this->Requisition_model->HodReject($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];

			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Rejected";
			$message2 = "Dear Staff, sorry to inform you that your submitted requisition form with Requisition ID: VG$id has been rejected";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Requisition rejected successfully.';
			redirect(site_url('requisition'));   
	}

	public function MDView($id)
	{
		$email = $_SESSION['email'];
	    $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Requisition_model->FindItem($id);
		$data['details_info'] = $this->Requisition_model->FindItemDetails($id);
		$data['process_level'] = $this->Requisition_model->CheckProcessLevel($id);
		//var_dump($data['process_level']);
	   $data['content'] = 'requisitions/MD-view';
	   $this->load->view($this->layout, $data);
	}

	public function MDRecommend($id)
	{
		date_default_timezone_set('Africa/Lagos');
		$approval_date = date('Y-m-d H:i:s');
		$inserted = $this->Requisition_model->MDRecommend($id, $approval_date);
		
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
	
			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Approved";
			$message2 = "Dear Staff, This is to inform you that your submitted requisition form with Requisition ID: VG$id has been approved. You can go ahead to procurement. Thank you";
			
			SendMail($email, $name, $to2, $subject2, $message2);

			$_SESSION['success'] = 'Requisition successfully approved.'; 
			redirect(site_url('requisition')); 
		}	
	}

	public function MDReject($id)
	{
		$inserted = $this->Requisition_model->MDReject($id);

		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
	
			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Rejected";
			$message2 = "Dear Staff, Sorry to inform you that your submitted requisition Requisition ID: VG$id has been rejected";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Requisition rejected successfully.'; 
			redirect(site_url('requisition')); 
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


?>