<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget extends CI_Controller {

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
	 $this->load->model(['Budget_model', 'User_model', 'Department_model']);
	  $this->load->library('form_validation');
	  $this->layout = 'layouts/master';


		if (!$_SESSION)
		{
			redirect('user/login'); // the user is not logged in, redirect them!
		}
	}


	public function Index()
	{
		$email = $_SESSION['email'];
		$dept = $_SESSION['dept'];
		$data['user'] = $this->User_model->FindUser($email);
		$data['budgetsMD'] = $this->Budget_model->GetAllApprovedItems();
		 $data['pending_budgetsMD'] = $this->Budget_model->GetAllPendingItemsMD();
		$data['user_budget'] = $this->Budget_model->GetAllItemsByUser($email);
		$data['dept_budget'] = $this->Budget_model->GetAllItemsByDept($dept);
		$data['pending_dept_budget'] = $this->Budget_model->GetAllPendingItemsByDept($dept);
		$data['content'] = 'budgets/lists';
		$this->load->view($this->layout, $data);
	}

	public function Create()
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $data['content'] = 'budgets/create';
	   $this->load->view($this->layout, $data);
	}

	public function CreateDetails()
	{
	    $email = $_SESSION['email'];
	    $data['user'] = $this->User_model->FindUser($email);
		$data2['user_email'] = $_SESSION['email'];
		$data2['dept'] = $_SESSION['dept'];
		$data2['no_of_projects'] = $this->input->post('no_of_projects');
		
		$data['budget_ID'] = $this->Budget_model->InsertItem($data2);
		$data['no_of_projects'] = $this->input->post('no_of_projects');

		$data['content'] = 'budgets/create_details';
	    $this->load->view($this->layout, $data);	
	}

	public function CreateDetailsAction()
	{
		$email = $_SESSION['email'];
		$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
		$user_email = $email;
		$dept = $_SESSION['dept'];
		$budget_ID = $this->input->post('bID');

			for($i=0; $i<count($this->input->post('id')); $i++)
			{
				$data[]=array(
					'budget_ID' => $this->input->post('budget_ID')[$i],
					'name'=>$this->input->post('name')[$i],
					'cost'=>$this->input->post('cost')[$i],
					'description'=>$this->input->post('description')[$i],
				);
			}
			
			$inserted = $this->Budget_model->InsertBatchItems($data); 
			
			if($inserted > 0)
			{
				$email = $_SESSION['email'];
				$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
				$HODEmail = $this->User_model->GetHODEmail($dept);
				$to = $HODEmail->email;
			
				$subject = "Budget Recommedation Needed";
				$message = "Dear HOD, your recommendation is kindly needed for my newly submitted budget form with Budget ID: BG$budget_ID";
				
				SendMail($email, $name, $to, $subject, $message);
				
			}	
			   $_SESSION['success'] = 'Budget successfully submitted.'; 
			   redirect('Budget');
		}

	public function AccountsView($id)
	{
		$email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Budget_model->FindItem($id);
		$data['details_info'] = $this->Budget_model->FindItemDetails($id);
		//var_dump($data);
		$data['content'] = 'budgets/accounts-view';
		$this->load->view($this->layout, $data);
	}

	public function UserView($id)
	{
		$email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Budget_model->FindItem($id);
		$data['details_info'] = $this->Budget_model->FindItemDetails($id);
		//var_dump($data);
	   $data['content'] = 'budgets/user-view';
	   $this->load->view($this->layout, $data);
	}

	public function HODView($id)
	{
		$email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Budget_model->FindItem($id);
		$data['details_info'] = $this->Budget_model->FindItemDetails($id);
		$data['process_level'] = $this->Budget_model->CheckProcessLevel($id);
		 	//var_dump($data);
	   $data['content'] = 'budgets/hod_view';
	   $this->load->view($this->layout, $data);
	}

	public function HodRecommend($id)
	{
		$inserted = $this->Budget_model->HodRecommend($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
			$MDEmail = $this->User_model->GetMDEmail();
			$to = $MDEmail->email;
			$subject = "Budget Approval Needed";
			$message = "Dear MD, your approval is needed for a submitted budget Budget ID: BG$id";
			
			SendMail($email, $name, $to, $subject, $message);

			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Budget Has Been Recommended";
			$message2 = "Dear Staff, your submitted submitted budget Budget ID: BG$id has been recommended for approval";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Budget successfully recommended.'; 
			redirect(site_url('budget')); 
	}

	public function HodReject($id)
	{
		$inserted = $this->Budget_model->HodReject($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];

			$UserEmail = $this->User_model->GetUserEmail($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Budget Has Been Rejected";
			$message2 = "Dear Staff, Sorry to inform you that your submitted budget Budget ID: BG$id has been rejected";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Requisition rejected successfully.';
		  redirect('budget'); 
	}

	public function MDView($id)
	{
		$email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
		$data['basic_info'] = $this->Budget_model->FindItem($id);
		$data['details_info'] = $this->Budget_model->FindItemDetails($id);
		$data['process_level'] = $this->Budget_model->CheckProcessLevel($id);
		//var_dump($data['process_level']);
	   $data['content'] = 'budgets/MD-view';
	   $this->load->view($this->layout, $data);
	}

	public function MDRecommend($id)
	{
		$inserted = $this->Budget_model->MDRecommend($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
	
			$UserEmail = $this->User_model->GetUserEmail2($id);
			$to2 = $UserEmail->user_email;
			
		
			$subject2 = "Your Budget Has Been Approved";
			$message2 = "Dear Staff, your submitted budget Budget ID: BG$id has been approved";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Budget successfully approved.'; 	
			redirect('budget');
	}

	public function MDReject($id)
	{
		$inserted = $this->Budget_model->MDReject($id);
		if($inserted > 0)
		{
			$email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
	
			$UserEmail = $this->User_model->GetUserEmail2($id);
			$to2 = $UserEmail->user_email;
			$subject2 = "Your Budget Has Been Rejected";
			$message2 = "Dear Staff, Sorry to inform you that your submitted budget Budget ID: BG$id has been rejected";
			
			SendMail($email, $name, $to2, $subject2, $message2);
		}
			$_SESSION['success'] = 'Budget rejected successfully.'; 
		    redirect('budget'); 
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
