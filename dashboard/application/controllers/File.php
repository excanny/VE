<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class File extends CI_Controller {
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
	  $this->load->model(['File_model', 'User_model']);
	  $this->load->library('form_validation');
	  $this->layout = 'layouts/master';
	 
	}

	public function Index()
	{	
	    if (!$_SESSION['email'])
		{
			redirect('login'); // the user is not logged in, redirect them!
		}

		$email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
		
		$data['content'] = 'files/upload';
		$this->load->view($this->layout, $data);
	}

	public function Download()
	{
	    if (! $this->session->userdata('logged_in'))
		{
			redirect('login'); // the user is not logged in, redirect them!
		}
		
		$data['content'] = 'files/download';
		$this->load->view($this->layout, $data);
	}

	public function Store()
	{	
		$config['upload_path'] = './uploads/files';
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('upload'))
		{
				$data = array('error' => $this->upload->display_errors());
				$data['content'] = 'files/upload';
				$this->load->view($this->layout, $data);
		}
		else
		{
			$uploadData = $this->upload->data();
			$photo = $uploadData['file_name'];
			$file_ext = $uploadData['file_ext'];

			$email = $_SESSION['email'];

			$hash = openssl_random_pseudo_bytes(5);
			$hash2 = bin2hex($hash);
			$token = $hash2.time();

			$data = array(
				'token' => $token,
				'uploader' => $_SESSION['first_name'] . ' ' . $_SESSION['last_name'],
				'email' => $email,
				'photo' => $photo,
				'file_ext' => $file_ext,
			);
				//var_dump($data);
				$inserted = $this->File_model->InsertFile($data);
				if($inserted > 0)
				{
					$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
					$to = $email;
					$subject = "FTP Key";
					$message = "The FTP key for your uploaded file is: $token";
					SendMail($email, $name, $to, $subject, $message);
				}
				
				$_SESSION['success'] =  "File uploaded successfully and download key sent to your email.<br> Key: $token";
				redirect('file');   
		}	
	}


	public function GenerateExternal()
	{	
	    
		//$this->form_validation->set_rules('file_ext', 'File Type Extension', 'trim|required|regex_match[/^\./]');
		$this->form_validation->set_rules('file_ext', 'File Type Extension', 'trim|required');
		
		if ($this->form_validation->run() === FALSE)
			{
				$this->session->set_flashdata('error', validation_errors());
				$data['content'] = 'files/upload';
			    $this->load->view($this->layout, $data); 
			}
		else
		{
		    
		    $config['upload_path'] = './uploads/logos';
    		$config['allowed_types'] = '*';
    		$this->load->library('upload', $config);
    
    		if (!$this->upload->do_upload('logo_upload'))
    		{
			  $_SESSION['error'] =  $this->upload->display_errors();
			  redirect('file'); 
    		}
    		else
    		{
    		   $file_ext = $this->input->post('file_ext');
    		   if (substr($file_ext, 0, 1) === '.') 
    		   {
    		    
        			$name = $this->input->post('first_name') . ' ' . $this->input->post('last_name');
        			$uploadData = $this->upload->data();
        			$logo = $uploadData['file_name'];
        		    
        		    //$file_ext = $this->input->post('file_ext');
        
        			$email = $_SESSION['email'];
        
        			$hash = openssl_random_pseudo_bytes(5);
        			$hash2 = bin2hex($hash);
        			$token = $hash2.time();
        
        			$data = array(
        				'token' => $token,
        				'email' => $email,
        				'file_ext' => $file_ext,
        				'logo' => $logo,
        			);
    				//var_dump($data);
    				$inserted = $this->File_model->InsertFile($data);
    				if($inserted > 0)
    				{
    					$name = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
    					$to = $email;
    					$subject = "FTP Key";
    					$message = "The FTP key for your file is: $token. External Upload link: http://veritygeo.com/demo/dashboard/index.php/file/external";
    					SendMail($email, $name, $to, $subject, $message);
    					
    					$_SESSION['success'] =  "External FTP key successfully generated and sent to your email. <br> Key: $token";
    				    redirect('file'); 
    				}
				
    		   }
    		   else
    		   {
    		      $_SESSION['error'] =  "Expected File Type extension must start with dot";
				  redirect('file');   
    		   }
    		}
 		}
	}
	
	

	public function GetFile()
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   $key = $this->input->post('key');
	   $data['key'] = $this->File_model->FindFile($key);
	   
	   if($data['key'] == null)
	   {
			$_SESSION['error'] = "Invalid key entered";
			$data['content'] = 'files/upload';
			$this->load->view($this->layout, $data);
	   }
	   else 
	   {  
			$data['content'] = 'files/download';
		    $this->load->view($this->layout, $data);
			//var_dump($data);
	   }
	}

	public function edit($id)
	{
	   $data['flight'] = $this->Flight_model->find_item($id);
	   $data['content'] = 'flights/flight_edit';
	   $this->load->view($this->layout, $data);
	}

	public function delete($id)
	{
		$item = $this->Flight_model->delete_item($id);
		$this->session->set_flashdata('delete', 'Record Deleted Successfully');
		redirect(base_url('index.php/flight'));
	}

	public function External()
	{
	   $this->load->view('files/key-verify');
	}

	public function ExternalOK()
	{
	   $this->load->view('files/external-upload');
	}

	public function FTPVerify()
	{
		$this->form_validation->set_rules('key', 'FTP key', 'trim|required');
		
		if ($this->form_validation->run() === FALSE)
		{
				$data = $this->session->set_flashdata('error', validation_errors()); 
				//$this->load->view('files/external-upload', $data);
				redirect('file/External');
		}
		else
		{

			$key = $this->input->post('key');

			$validate = $this->File_model->FileValidate($key);

			if($validate)
			{
				$data['file_ext'] = $validate->file_ext;
				$data['id'] = $validate->id;
				$data['logo'] = $validate->logo;
				$this->load->view('files/external-upload', $data);
				//var_dump($data);
			}
			else 
			{
				$data = $this->session->set_flashdata('error', 'Invaid FTP key entered'); 
				redirect('file/External');
			}
			
		
		}
	}
	
	public function GetUnreadMessageCount($id)
	{
        $count = $this->User_model->GetUnreadMessageCount($id);
        return $count; 
	}


}