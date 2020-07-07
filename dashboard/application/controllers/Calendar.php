<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Calendar extends CI_Controller {
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
	  $this->load->model(['Calendar_model', 'User_model', 'Client_model']);
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
		$data['user'] = $this->User_model->FindUser($email);	
		$data['result'] = $this->Calendar_model->GetUserEvents($email);
		$data['clients'] = $this->Client_model->GetAllClients();
		//var_dump($data['result']);
		foreach ($data['result'] as $key => $value) {
            $data['data'][$key]['title'] = $value->title;
            $data['data'][$key]['start'] = $value->start;
		    $data['data'][$key]['end'] = $value->end;
            $data['data'][$key]['backgroundColor'] = $value->color;
        }
           
		$data['content'] = 'calendar/read';
		$this->load->view($this->layout, $data);
		
	}

	public function Store()
	{	
		
		// $this->form_validation->set_rules('title', 'Title', 'required');
		// $this->form_validation->set_rules('start_date', 'Start Date', 'required');
		// $this->form_validation->set_rules('end_date', 'End Date', 'required');
		// $this->form_validation->set_rules('start_time', 'Start Time', 'required');
		// $this->form_validation->set_rules('end_time', 'End Time', 'required');
		// if ($this->form_validation->run() === FALSE)
		// 	{
		// 		$this->session->set_flashdata('error', validation_errors());
		// 		$data['content'] = 'calendar/read';
		// 	   $this->load->view($this->layout, $data); 
		// 	}
		// else
		// {
		// 	if (!empty($_POST)) 
		// 	{
				
				$color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
				
				$title = $this->input->post("title");
				$start_date	= $this->input->post("start_date");
				$start_time	= $this->input->post("start_time");
				$end_date = $this->input->post("end_date");
				$end_time	= $this->input->post("end_time");
				
				$start_DT = date('Y-m-d H:i:s', strtotime("$start_date $start_time"));
				$end_DT = date('Y-m-d H:i:s', strtotime("$end_date $end_time"));

				$data = array( 
					"title" => $title,
					"email" => $_SESSION['email'],
					"start" => $start_DT, 
					"end" => $end_DT, 
					"color" => $color, 
				);

				$inserted = $this->Calendar_model->InsertEvent($data);
				if($inserted > 0)
				{
					$_SESSION['success'] = 'Event Created Successfully';
					redirect('calendar');   
				}
				//var_dump($data); 
			//}
		//}
		
		
	}

	public function StoreGeneral()
	{	
		
		// $this->form_validation->set_rules('title', 'Title', 'required');
		// $this->form_validation->set_rules('start_date', 'Start Date', 'required');
		// $this->form_validation->set_rules('end_date', 'End Date', 'required');
		// $this->form_validation->set_rules('start_time', 'Start Time', 'required');
		// $this->form_validation->set_rules('end_time', 'End Time', 'required');
		// if ($this->form_validation->run() === FALSE)
		// 	{
		// 		$this->session->set_flashdata('error', validation_errors());
		// 		$data['content'] = 'calendar/read';
		// 	   $this->load->view($this->layout, $data); 
		// 	}
		// else
		// {
		// 	if (!empty($_POST)) 
		// 	{
				
				$color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
				
				$title = $this->input->post("title");
				$description = $this->input->post("description");
				$start_date	= $this->input->post("start_date");
				$start_time	= $this->input->post("start_time");
				$end_date = $this->input->post("end_date");
				$end_time	= $this->input->post("end_time");
				$client_email = $this->input->post("client_email");
				
				$start_DT = date('Y-m-d H:i:s', strtotime("$start_date $start_time"));
				$end_DT = date('Y-m-d H:i:s', strtotime("$end_date $end_time"));

				$email = $_SESSION['email'];

				$data = array( 
					"title" => $title,
					"description" => $description,
					"creator" => $_SESSION['first_name'] . ' ' . $_SESSION['last_name'],
					"start" => $start_DT, 
					"end" => $end_DT, 
					"color" => $color,
					'client_email' => $client_email,
				);

				$inserted = $this->Calendar_model->InsertGeneralEvent($data);
				if($inserted > 0)
				{
					$_SESSION['success'] = 'General Event Created Successfully';
					redirect('welcome');   
				}
				//var_dump($data); 
			//}
		//}
		
		
	}


	public function Edit($id)
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $data['event'] = $this->Calendar_model->FindEvent($id);
	   $data['content'] = 'calendar/edit';
	   $this->load->view($this->layout, $data);

	}
	
	public function EditGeneral($id)
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $data['event'] = $this->Calendar_model->FindGeneralEvent($id);
	   //var_dump($data);
	   $data['content'] = 'calendar/edit-general';
	   $this->load->view($this->layout, $data);

	}


	public function update($id)
	 {
		/// $this->form_validation->set_rules('link_key', 'Link Key', 'required');
		// $this->form_validation->set_rules('direct_bill', 'Direct Bill', 'required');
		// $this->form_validation->set_rules('sub_booking_type', 'Sub Booking Type', 'required');
	
		// {
			
		// $this->session->set_flashdata('error', validation_errors());
		// redirect(base_url('index.php/flight/edit/' . $id));
		//  }
		// else
		// { 
		// 	if (!empty($_POST)) {
				$title = $this->input->post("title");
				//$description = $this->input->post("description");
				$start_date	= $this->input->post("start_date");
				$start_time	= $this->input->post("start_time");
				$end_date = $this->input->post("end_date");
				$end_time	= $this->input->post("end_time");
				
				$start_DT = date('Y-m-d H:i:s', strtotime("$start_date $start_time"));
				$end_DT = date('Y-m-d H:i:s', strtotime("$end_date $end_time"));

				$data = array( 
					"title" => $title,
					//"description" => $description,
					"start" => $start_DT, 
					"end" => $end_DT, 
				);
		
			//var_dump($data);
			$inserted =  $this->Calendar_model->UpdateEvent($data, $id);
			if($inserted > 0)
			{
			  	$_SESSION['success'] = 'Event Updated Successfully'; 
			  redirect(site_url('calendar'));    
			}
		//}
	}
	
	
	public function updateGeneral($id)
	 {
		/// $this->form_validation->set_rules('link_key', 'Link Key', 'required');
		// $this->form_validation->set_rules('direct_bill', 'Direct Bill', 'required');
		// $this->form_validation->set_rules('sub_booking_type', 'Sub Booking Type', 'required');
	
		// {
			
		// $this->session->set_flashdata('error', validation_errors());
		// redirect(base_url('index.php/flight/edit/' . $id));
		//  }
		// else
		// { 
		// 	if (!empty($_POST)) {
				$title = $this->input->post("title");
				$description = $this->input->post("description");
				$start_date	= $this->input->post("start_date");
				$start_time	= $this->input->post("start_time");
				$end_date = $this->input->post("end_date");
				$end_time	= $this->input->post("end_time");
				
				$start_DT = date('Y-m-d H:i:s', strtotime("$start_date $start_time"));
				$end_DT = date('Y-m-d H:i:s', strtotime("$end_date $end_time"));

				$data = array( 
					"title" => $title,
					"description" => $description,
					"start" => $start_DT, 
					"end" => $end_DT, 
				);
		
			//var_dump($data);
			$inserted =  $this->Calendar_model->UpdateGeneralEvent($data, $id);
			if($inserted > 0)
			{
			  	$_SESSION['success'] = 'Event Updated Successfully'; 
			  redirect(site_url('welcome'));    
			}
		//}
	}

	public function delete($id)
	{
		$item = $this->Calendar_model->DeleteEvent($id);
		$_SESSION['success'] = 'Event Deleted Successfully';
		redirect('calendar');
	}
	
	public function DeleteGeneralEvent($id)
	{
		$this->Calendar_model->DeleteGeneralEvent($id);
		$_SESSION['success'] = 'Event Deleted Successfully';
		redirect('welcome');
	}
	
	public function GetUnreadMessageCount($id)
	{
        $count = $this->User_model->GetUnreadMessageCount($id);
        return $count; 
	}

}