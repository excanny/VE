<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

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
	 $this->load->model(['Requisition_model', 'Client_model','User_model', 'Department_model', 'Project_model']);
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
		$data['clients'] = $this->Project_model->GetAllClients();
		$data['content'] = 'projects/lists';
		$this->load->view($this->layout, $data);
	}

	public function Create()
	{
		$email = $_SESSION['email'];
		$dept = $_SESSION['dept'];
		$data['user'] = $this->User_model->FindUser($email);
		$data['clients'] = $this->Project_model->GetAllClients();
		$data['content'] = 'projects/create';
		$this->load->view($this->layout, $data);
	}
    
    public function Store()
	{
       $data['name'] = $this->input->post('name');
       $data['pass_word'] = password_hash($this->input->post('pass_word'),PASSWORD_DEFAULT);
       $email2 = $this->input->post('email');
       $data['email'] = $email2 . '@veritygeo.com';
       $data['short_code'] = substr($data['name'], 0, 4); 
       
        
        $inserted = $this->Client_model->InsertClient($data);
		if($inserted > 0)
		{
             $_SESSION['success'] = 'Client created successfully.'; 
			redirect(site_url('project/create'));	
		}	 
			//var_dump($data);
	}

	public function Report()
	{
		$email = $_SESSION['email'];
		$dept = $_SESSION['dept'];
		$data['user'] = $this->User_model->FindUser($email);
		 	//var_dump($data);
	    $data['content'] = 'projects/report';
	    $this->load->view($this->layout, $data);
	}

	public function View($id)
	{
		$email = $_SESSION['email'];
		$dept = $_SESSION['dept'];
		$data['user'] = $this->User_model->FindUser($email);
		 	//var_dump($data);
	    $data['content'] = 'projects/view';
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
	    
	public function GetClientWithEmail($email)
	{
        $client = $this->Client_model->GetClientWithEmail($email);
        return $client->name; 
	}
	
	public function GetUnreadMessageCount($id)
	{
        $count = $this->User_model->GetUnreadMessageCount($id);
        echo $count; 
	}
}
