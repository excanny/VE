<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaints extends CI_Controller {

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
	 $this->load->model(['Requisition_model', 'User_model']);
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
		$data['staffs'] = $this->User_model->GetAllUsers();
		$data['content'] = 'complaints/create';
		$this->load->view($this->layout, $data);
	}
	
	public function CreateAction()
	 {

		$email = $_SESSION['email'];
		$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		
		$lists = $this->input->post('recipients');

		foreach ($lists as $to)
		{
			SendMail($email, $name, $to, $subject, $message);
		}

		$_SESSION['success'] = 'Complaints sent successfully.';

		redirect('complaints');	
			
	}
	
	public function GetUnreadMessageCount($id)
	{
        $count = $this->User_model->GetUnreadMessageCount($id);
        return $count; 
	}
}
