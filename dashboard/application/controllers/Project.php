<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
	 $this->load->model(['Requisition_model', 'Leave_model','User_model', 'Department_model', 'Project_model', 'Client_model']);
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
		$data['projects'] = $this->Project_model->GetAllProjects();
		$data['content'] = 'projects/lists';
		$this->load->view($this->layout, $data);
	}

	public function Create()
	{
		$email = $_SESSION['email'];
		$dept = $_SESSION['dept'];
		$data['user'] = $this->User_model->FindUser($email);
		$data['clients'] = $this->Project_model->GetAllClients();
		$data['contracts'] = $this->Project_model->GetAllContracts();
		$data['content'] = 'projects/create';
		$this->load->view($this->layout, $data);
	}
    
    public function Store()
	{
	    $month = date('m', strtotime($this->input->post('start')));
	    $year = date('Y', strtotime($this->input->post('start')));
		$result_explode = explode('|', $this->input->post('client_email'));
		$data['client_email'] = $result_explode[0];
		$data['	project_name'] = $result_explode[1] . '_' . $month . $year;
		$data['contract_no'] = $this->input->post('contract_no');
		$data['description'] = $this->input->post('description');
		$data['start'] = date('Y-m-d', strtotime($this->input->post('start')));
		$data['end'] = date('Y-m-d', strtotime($this->input->post('end')));
	

		$inserted = $this->Project_model->InsertProject($data);

		if($inserted > 0)
		{
            $_SESSION['success'] = 'Project successfully created.'; 
			redirect('project');	
		}	
			//var_dump($data);
	}

	public function Update()
	{
		$email = $_SESSION['email'];
		$dept = $_SESSION['dept'];
		$data['user'] = $this->User_model->FindUser($email);
		 	//var_dump($data);
	    $data['content'] = 'projects/report';
	    $this->load->view($this->layout, $data);
	}
	
	public function ReportAction($id)
	{
	    
	    $config['upload_path'] = './uploads/project-files';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('upload'))
		{
			$_SESSION['error'] = $this->upload->display_errors();
			redirect('project/report/'.$id);
		}
		else
		{
			$uploadData = $this->upload->data();
			$data['file_name'] = $uploadData['file_name'];
			$data['title'] = $this->input->post('title');
			$data['projectID'] = $id;
            $data['uploader'] = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
            $data['color'] = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
		
		}
	    
		$inserted = $this->Project_model->ReportAction($data);
		if($inserted > 0)
		{
            $_SESSION['success'] = 'Update successfully added.'; 
			redirect('project');	
		}
	}

	public function View($id)
	{
		$email = $_SESSION['email'];
		$dept = $_SESSION['dept'];
		$data['user'] = $this->User_model->FindUser($email);
		$data['reports'] = $this->Project_model->GetAllReports($id);
		//var_dump($data['report']);
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
        return $count; 
	}
}
