<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journey extends CI_Controller {

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
	 $this->load->model(['Requisition_model', 'Journey_model','User_model', 'Department_model']);
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
		$data['journeys'] = $this->Journey_model->GetAllJourneys();
		$data['content'] = 'journey/lists';
		$this->load->view($this->layout, $data);
	}
    
    public function Store()
	{
	    $data['name'] =  $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
		$data['destination'] = $this->input->post('destination');
		$data['purpose'] = $this->input->post('purpose');
		$departure_date = date('Y-m-d', strtotime($this->input->post('departure_date')));
		$departure_time = date('H:i:s', strtotime($this->input->post('departure_time')));
		$arrival_date = date('Y-m-d', strtotime($this->input->post('arrival_date')));
		$arrival_time = date('H:i:s', strtotime($this->input->post('arrival_time')));
		$data['departure_DT'] = date('Y-m-d H:i:s', strtotime("$departure_date $departure_time"));
		$data['arrival_DT'] = date('Y-m-d H:i:s', strtotime("$arrival_date $arrival_time"));
		$data['transport_means'] = $this->input->post('transport_means');
		var_dump($data);

		 $inserted = $this->Journey_model->InsertJourney($data);

		if($inserted > 0)
		{
            $_SESSION['success'] = 'Journey details successfully submitted.'; 
			redirect('journey');	
		}	
			//var_dump($data);
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
