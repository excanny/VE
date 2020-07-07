<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	public $layout;
    function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->model(['User_model', 'Department_model']);
		$this->layout = 'layouts/master';
		
	}
	
	public function edit($id)
	{
		$data['user'] = $this->User_model->find_user($id);
		//var_dump($data);
		$data['content'] = 'users/edit_user';
		$this->load->view($this->layout, $data);
	}
    
    
    public function register()
	{
        $data['departments'] = $this->Department_model->GetAllDepts();
	    $this->load->view('users/register', $data);
	}
    
    public function register_action()
	{
		
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]',
        array(
                'is_unique'     => 'This %s address already exists. Choose another email address.'
        ));
        $this->form_validation->set_rules('pssd1', 'Password', 'trim|required');
        $this->form_validation->set_rules('pssd2', 'Retype Password', 'trim|required|matches[pssd1]');
        if ($this->form_validation->run() == FALSE)
        {
			$_SESSION['error'] = validation_errors();
			
			redirect('user/register');
			
        }
        else
        {
            $data = array(
                'first_name' => strip_tags($this->input->post('first_name')),
				'last_name' => strip_tags($this->input->post('last_name')),
				'dob' => date("Y-m-d", strtotime($this->input->post('dob'))),
				'staff_no' => strip_tags($this->input->post('staff_no')),
				'email' => strip_tags($this->input->post('email')),
                'dept' => strip_tags($this->input->post('dept')),
				'pass_word' => password_hash($this->input->post('pssd1'),PASSWORD_DEFAULT),
			);

			//var_dump($data);

			$inserted = $this->User_model->InsertUser($data);

			if($inserted > 0)
			{
			    $email = strip_tags($this->input->post('email'));
    			$name = strip_tags($this->input->post('first_name')) . ' ' . strip_tags($this->input->post('first_name'));
    			$HODEmail = $this->User_model->GetHODEmail(strip_tags($this->input->post('dept')));
    			$to = $HODEmail->email;
    		
    			$subject = "Login Approval Needed";
    			$message = "Dear HOD, your approval is needed for a newly registered member of staff.";
			
			    SendMail($email, $name, $to, $subject, $message);
			    
				$_SESSION['success'] = 'You have registered successfully but you will have to await your HOD\'s approval before you can login.';
				redirect('user/login');
			}
			
			 
		}
	}
	
    public function login()
    {
		//$this->session->keep_flashdata('error', validation_errors());
        $this->load->view('users/login');
    }

    public function login_action()
    {
		
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('pass_word', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE)
        {
			$_SESSION['error'] = validation_errors();
			redirect('user/login');
        }
        else
        {
            $email  = $this->input->post('email');
            $pass_word = $this->input->post('pass_word');
            
			$validate = $this->User_model->LoginValidate($email, $pass_word);
			
            if($validate)
            {
				$row = $this->User_model->FetchUserDetails($email);
				$this->User_model->UpdateUserOnline($row->id, $status = 1);
			
			    $_SESSION['id'] = $row->id;
			    $_SESSION['first_name'] = $row->first_name;
				$_SESSION['last_name'] = $row->last_name;
				$_SESSION['email'] = $row->email;
				$_SESSION['dept'] = $row->dept;
				$_SESSION['role'] = $row->role;
				$_SESSION['isHOD'] = $row->isHOD;
				$_SESSION['isAccountant'] = $row->isAccountant;
				$_SESSION['photo'] = $row->photo;
				$_SESSION['created_at'] = $row->created_at;
			    
			  
				if($row->role != null)
				{
				    $data = array(
					'first_name' => $row->first_name,
					'last_name' => $row->last_name,
					'email' => $row->email,
					'dept' => $row->dept,
					'role' => $row->role,
					'isHOD' => $row->isHOD,
					'photo' => $row->photo,
					'created_at' => $row->created_at
				    );
				    //var_dump($row);
				
		            redirect('welcome');
				}
				else
				{
					redirect('welcome/ProfileView');	
				}	   
		
             }
        	 else
            {
				 $_SESSION['error'] = 'Username or Password is Wrong or Unactivated account.';
                 redirect('user/login');
            }
    
         }    
	}
	

	public function StaffProfile()
	{
		$email = $_SESSION['email'];
	    $data['user'] = $this->User_model->FindUser($email);
	    $dept = $_SESSION['dept'];
	    $data['pending_regs'] = $this->User_model->GetPendingRegistrations($dept);
		$data['staffs'] = $this->User_model->GetAllUsers();
		$data['content'] = 'users/staff_page';
        $this->load->view($this->layout, $data);
	}

	public function ProfilePage($id)
	{
		$email = $_SESSION['email'];
	    $data['user'] = $this->User_model->FindUser($email);
		$data['staff'] = $this->User_model->FindUserWithID($id);
		$data['content'] = 'users/single-staff';
		$this->load->view($this->layout, $data);
		
	}

	public function GiveMDRole($id)
	{
		
		$inserted = $this->User_model->GiveMDRole($id);
		if($inserted > 0)
		{
			$_SESSION['success'] = 'MD Role assigned to user successfully';
			redirect('user/StaffProfile');
		}
	}

	public function RemoveMDRole($id)
	{
		
		$inserted = $this->User_model->RemoveMDRole($id);
		if($inserted > 0)
		{
			$_SESSION['success'] = 'MD Role removed successfully';
			redirect('user/StaffProfile');
		}
	}


    public function GetDeptWithDeptID($dept_ID)
	{
        $dept = $this->Department_model->GetDeptWithDeptID($dept_ID);
        return $dept->name; 
	}
	
	
	public function ApproveLogin($id)
	{
    	$inserted = $this->User_model->ApproveLogin($id);
    	if($inserted > 0)
    	{
     	    $email = $_SESSION['email'];
			$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
			$UserEmail = $this->User_model->GetUserEmailWithStaffID($id);
	    	$to = $UserEmail->email;
	
			$subject = "Login Account Approved";
			$message = "Dear User, your staff login account has been approved. You can now login";
		    
		    SendMail($email, $name, $to, $subject, $message);
		    
			$_SESSION['success'] = 'User account successfully approved.';
			redirect('user/StaffProfile');
    	}
	}
	
	
	public function RemoveRegistration($id)
	{
    	$inserted = $this->User_model->RemoveRegistration($id);
    	if($inserted > 0)
    	{
		    
			$_SESSION['success'] = 'User account successfully removed.';
			redirect('user/StaffProfile');
    	}
	}
	
	
	
	public function ForgetPassword()
	{
	   $this->load->view('users/forget-password');
	}
	
	public function ForgetPasswordAction()
	{
	    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == FALSE)
        {
			$_SESSION['error'] = validation_errors();
			redirect('user/login');
        }
        else
        {
	    
    	    $email = $this->input->post("email");
    	    $row = $this->User_model->FetchUserDetails($email);
    	    //var_dump($row);
    	    if($row == null)
    	    {
    	       $_SESSION['error'] = 'Email is not registered in the system.'; 
    	       redirect('user/login');
    	    }
    	    else
    	    {
    	        $token2 = openssl_random_pseudo_bytes(16);
                $data['token'] = bin2hex($token2);
                $data['email'] = $row->email;
                //var_dump($data);
                $token = $data['token'];
                
    	       $inserted = $this->User_model->InsertPasswordResetToken($data);
    	        if($inserted > 0)
    	        {
    	            $email = $row->email;
    	            $to = $row->email;
        			$name = 'Verity Geo';
        	
        			$subject = "VerityGeo | Password Reset";
        			$message = "Click on link to reset password or copy link into your browser's address bar. http://veritygeo.com/demo/dashboard/index.php/user/VerifyToken/$email/$token";
        		    
        		    SendMail($email, $name, $to, $subject, $message);
        		    
        			$_SESSION['success'] = 'Reset link sent successfully. Check your mail.';
        			redirect('user/ForgetPassword');
    	        }
    	    }
       }
	}
	
	public function VerifyToken()
	{
	   $email = $this->uri->segment(3);
	   $token = $this->uri->segment(4);
	   $row = $this->User_model->VerifyToken($email, $token);
	   //var_dump($row);
	   if(!empty($row))
	   {
	      $_SESSION['create-password'] = 'ok';
	      $_SESSION['recover_email'] = $email;
	      redirect('user/CreatePassword');
	   }
	   else
	   {
	       $_SESSION['error'] = 'Wrong or invalid token.'; 
    	   redirect('user/login');
	   }
	}
	
	public function CreatePassword()
	{
	    if (!$_SESSION['create-password'])
		{
		    $_SESSION['error'] = 'Wrong or invalid token.'; 
			redirect('user/login'); // the user is not logged in, redirect them!
		}
		
	    $this->load->view('users/create-password');
	}
	
	public function UpdatePassword()
	{
	    $this->form_validation->set_rules('pssd', 'Password', 'trim|required');
        $this->form_validation->set_rules('pssd2', 'Retype Password', 'trim|required|matches[pssd]');
        if ($this->form_validation->run() == FALSE)
        {
			$_SESSION['error'] = validation_errors();
			redirect('user/createpassword');
			
        }
        else
        {
              $email = $_SESSION['recover_email'];
              $new_password = password_hash($this->input->post('pssd'),PASSWORD_DEFAULT);
             $updated = $this->User_model->UpdatePassword($email, $new_password);
            if($updated > 0)
	       {
    			$_SESSION['success'] = 'Password changed successfully.';
     			redirect('user/login');
	       }
	       else
	       {
	            $_SESSION['error'] = 'Error occured. Retry.';
			    redirect('user/createpassword');
	       }
        }
	}
	
	
	public function GetUnreadMessageCount($id)
	{
        $count = $this->User_model->GetUnreadMessageCount($id);
        return $count; 
	}

	
	public function logout()
	{
	    $email = $_SESSION['email'];
	    $row = $this->User_model->FetchUserDetails($email);
	    $this->User_model->UpdateUserOnline($row->id, $status = 0);
		session_destroy();
		redirect('/');
	}
}