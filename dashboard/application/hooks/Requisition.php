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
	  $this->load->library('session');

	 	

		if (! $this->session->userdata('logged_in'))
		{
			redirect('user/login'); // the user is not logged in, redirect them!
		}
	}


	public function Index()
	{	
		$email = $this->session->userdata('logged_in')['email'];
		$dept = $this->session->userdata('logged_in')['dept'];
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
	   $email = $this->session->userdata('logged_in')['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $data['content'] = 'requisitions/create';
	   $this->load->view($this->layout, $data);
	}

	public function CreateDetails()
	{
	   $email = $this->session->userdata('logged_in')['email'];
	   $data['user'] = $this->User_model->FindUser($email);
		$data['user_email'] = $this->session->userdata('logged_in')['email'];
		$data['dept'] = $this->session->userdata('logged_in')['dept'];
		$data['no_of_items'] = $this->input->post('no_of_items');
		$data['req_ID'] = $this->Requisition_model->InsertItem($data);

		$data['content'] = 'requisitions/create_details';
	    $this->load->view($this->layout, $data);	
	}

	public function CreateDetailsAction()
	{
		$email = $this->session->userdata('logged_in')['email'];
		$name = $this->session->userdata('logged_in')['first_name'] . ' ' . $this->session->userdata('logged_in')['last_name'];
		$user_email = $this->session->userdata('logged_in')['email'];
		$dept = $this->session->userdata('logged_in')['dept'];
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
			$email = $this->session->userdata('logged_in')['email'];
			$name = $this->session->userdata('logged_in')['first_name'] . ' ' . $this->session->userdata('logged_in')['last_name'];
			$HODEmail = $this->User_model->GetHODEmail($dept);
			$to = $HODEmail->email;
		
			$subject = "Requisition Recommedation Needed";
			$message = "Dear HOD, your recommendation kindly needed for my newly submitted requisition Requisition ID: VG$req_ID";
			
			SendMail($email, $name, $to, $subject, $message);
			
		}	
			$this->session->set_flashdata('message', 'Requisition successfully submitted.'); 
			redirect(site_url('requisition'));
	}

	public function AccountsView($id)
	{
	   $email = $this->session->userdata('logged_in')['email'];
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
		$email = $this->session->userdata('logged_in')['email'];
	    $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Requisition_model->FindItem($id);
		$data['details_info'] = $this->Requisition_model->FindItemDetails($id);
		 	//var_dump($data);
	   $data['content'] = 'requisitions/user-view';
	   $this->load->view($this->layout, $data);
	}

	public function HODView($id)
	{
	   $email = $this->session->userdata('logged_in')['email'];
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
			$email = $this->session->userdata('logged_in')['email'];
			$name = $this->session->userdata('logged_in')['first_name'] . ' ' . $this->session->userdata('logged_in')['last_name'];
			$MDEmail = $this->User_model->GetMDEmail();
			$to = $MDEmail->email;
			$subject = "Requisition Approval Needed";
			$message = "Dear MD, your approval is needed for a submitted requisition Requisition ID: VG$id";
			
			SendMail($email, $name, $to, $subject, $message);

			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Recommended";
			$message2 = "Dear Staff, your submitted requisition Requisition ID: VG$id has been recommended for approval";
			
			SendMail($email, $name, $to2, $subject2, $message2);

			$this->session->set_flashdata('message', 'Requisition successfully recommended.'); 
			redirect(site_url('requisition')); 
		}
			
	}

	public function HodReject($id)
	{
		$inserted = $this->Requisition_model->HodReject($id);
		if($inserted > 0)
		{
			$email = $this->session->userdata('logged_in')['email'];
			$name = $this->session->userdata('logged_in')['first_name'] . ' ' . $this->session->userdata('logged_in')['last_name'];

			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Rejected";
			$message2 = "Dear Staff, Sorry to inform you that your submitted requisition Requisition ID: VG$id has been rejected";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$this->session->set_flashdata('message', 'Requisition rejected successfully.');
			redirect(site_url('requisition'));   
	}

	public function MDView($id)
	{
		$email = $this->session->userdata('logged_in')['email'];
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
			$email = $this->session->userdata('logged_in')['email'];
			$name = $this->session->userdata('logged_in')['first_name'] . ' ' . $this->session->userdata('logged_in')['last_name'];
	
			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Approved";
			$message2 = "Dear Staff, your submitted requisition Requisition ID: VG$id has been approved";
			
			SendMail($email, $name, $to2, $subject2, $message2);

			$this->session->set_flashdata('message', 'Requisition successfully approved.'); 
			redirect(site_url('requisition')); 
		}	
	}

	public function MDReject($id)
	{
		$inserted = $this->Requisition_model->MDReject($id);

		if($inserted > 0)
		{
			$email = $this->session->userdata('logged_in')['email'];
			$name = $this->session->userdata('logged_in')['first_name'] . ' ' . $this->session->userdata('logged_in')['last_name'];
	
			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Requisition Has Been Rejected";
			$message2 = "Dear Staff, Sorry to inform you that your submitted requisition Requisition ID: VG$id has been rejected";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$this->session->set_flashdata('message', 'Requisition rejected successfully.'); 
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

}


?>