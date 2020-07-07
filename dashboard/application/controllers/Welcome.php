<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	  $this->load->model(['Calendar_model', 'User_model', 'Leave_model', 'Requisition_model', 'Client_model']);
	  $this->load->library('form_validation');
	  $this->layout = 'layouts/master';
      $id = $_SESSION["id"];
	 	

		if (!$_SESSION['email'])
		{
			redirect('user/login'); // the user is not logged in, redirect them!
		}
	}


	public function index()
	{
		$email = $_SESSION['email'];
		$data['user'] = $this->User_model->FindUser($email);
	    $data['events_count'] = $this->Calendar_model->CountAllEvents($email);
	    $data['staff_count'] = $this->User_model->CountAllStaff();
	    $data['leave_count'] = $this->Leave_model->CountAllLeaves($email);
	    $data['req_count'] = $this->Requisition_model->CountAllReq($email);
		$data['general_result'] = $this->Calendar_model->GetGeneralAllEvents();
		$data['clients'] = $this->Client_model->GetAllClients();
 	    //var_dump($data['leave_count']);
	    foreach ($data['general_result'] as $key => $value) 
	    {
            $data['data'][$key]['title'] = $value->title . ' ' . 'By' . ' ' . $value->creator;
            $data['data'][$key]['start'] = $value->start;
		    $data['data'][$key]['end'] = $value->end;
            $data['data'][$key]['backgroundColor'] = $value->color;
        }
           
		$data['content'] = 'dashboard/index';
		$this->load->view($this->layout, $data);
	}
	
	public function profile()
	{
	   $email = $_SESSION['email'];
	   $data['user'] = $this->User_model->FindUser($email);
	   //var_dump($data);
	   $data['content'] = 'users/profile';
	   $this->load->view($this->layout, $data);
	}

	public function ProfileView()
	{
	   $this->load->view('users/profile-update');
	}

	public function ProfileStore()
	{	
		
		$this->load->library('Zebra_Image');
		
		$email = $_SESSION['email'];
		
		$this->form_validation->set_rules('role', 'Role', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		
		if ($this->form_validation->run() === FALSE)
			{
				$_SESSION['error'] = validation_errors();
				redirect('welcome/ProfileView');
			}
		else
		{
			if (!empty($_POST)) {
				//$data = $this->input->post();
			
				 //Check whether user upload picture
                if(!empty($_FILES['photo']['name']))
                {
                    $config['upload_path'] = 'uploads/images/profile-photos';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    
                    //Load upload library and initialize configuration
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    
                    
                    if ( ! $this->upload->do_upload('photo'))
                    {
                        $data['error'] = array('error' => $this->upload->display_errors());
						$this->load->view('users/profile-update', $data);
                    }
                    else
                    {
                        $uploadData = $this->upload->data();
                        $photo = $uploadData['file_name'];
						$file_temp = $uploadData['full_path'];
                    }
                    
    
                }
                else
                {
                    $photo = 'default.jpg';
                }
                
    			    //Prepare array of user data
                    $data = array(
                    'role' => $this->input->post('role'),
                    'phone' => $this->input->post('phone'),
					'gender' => $this->input->post('gender'),
					'achievements' => $this->input->post('achievements'),
                    'bio' => $this->input->post('bio'),
					'edu_class' => $this->input->post('edu_class'),
					'edu_course' => $this->input->post('edu_course'),
					'edu_school' => $this->input->post('edu_school'),
					'location' => $this->input->post('location'),
					'skills' => $this->input->post('skill1') . ',' . $this->input->post('skill2') . ',' . $this->input->post('skill3') . ',' . $this->input->post('skill4'),
                    'photo' => $photo,
                );
				  ////var_dump($data);
							//100 X 100 Thumbnail
				// load the image manipulation class
				//require 'Zebra_Image.php';
				// create a new instance of the class
				$image = new Zebra_Image();
				// if you handle image uploads from users and you have enabled exif-support with --enable-exif
				// (or, on a Windows machine you have enabled php_mbstring.dll and php_exif.dll in php.ini)
				// set this property to TRUE in order to fix rotation so you always see images in correct position
				$image->auto_handle_exif_orientation = false;
				// indicate a source image (a GIF, PNG or JPEG file)
				$image->source_path = $file_temp;
				// indicate a target image
				// note that there's no extra property to set in order to specify the target
				// image's type -simply by writing '.jpg' as extension will instruct the script
				// to create a 'jpg' file
				$image->target_path = 'uploads/images/profile-photos/100/' . $photo;
				// since in this example we're going to have a jpeg file, let's set the output
				// image's quality
				$image->jpeg_quality = 100;
				// some additional properties that can be set
				// read about them in the documentation
				$image->preserve_aspect_ratio = true;
				$image->enlarge_smaller_images = true;
				$image->preserve_time = true;
				$image->handle_exif_orientation_tag = true;
				// resize the image to exactly 100x100 pixels by using the "crop from center" method
				// (read more in the overview section or in the documentation)
				//  and if there is an error, check what the error is about
				if (!$image->resize(100, 100, ZEBRA_IMAGE_CROP_CENTER)) 
				{
					// if there was an error, let's see what the error is about
					switch ($image->error) 
					{
						case 1:
							echo 'Source file could not be found!';
							break;
						case 2:
							echo 'Source file is not readable!';
							break;
						case 3:
							echo 'Could not write target file!';
							break;
						case 4:
							echo 'Unsupported source file format!';
							break;
						case 5:
							echo 'Unsupported target file format!';
							break;
						case 6:
							echo 'GD library version does not support target file format!';
							break;
						case 7:
							echo 'GD library is not installed!';
							break;
						case 8:
							echo '"chmod" command is disabled via configuration!';
							break;
						case 9:
							echo '"exif_read_data" function is not available';
							break;
					}
				// if no errors
				} //else echo 'Success!';
	
				$inserted = $this->User_model->UpdateUser($data, $email);
				if($inserted > 0)
				{
				  $_SESSION['success'] = 'Profile Updated Successfully';
				  redirect('welcome'); 
				}
			}
		}
		
		
	}

	public function ProfileUpdate()
	{	
		$email = $_SESSION['email'];
		
		$this->form_validation->set_rules('role', 'Role', 'required');
		if ($this->form_validation->run() === FALSE)
			{
				$_SESSION['error'] = validation_errors();
				$this->load->view('users/profile');
			}
		else
		{
    
			//Prepare array of user data
			$data = array(
			'role' => $this->input->post('role'),
			'edu_class' => $this->input->post('edu_class'),
			'edu_course' => $this->input->post('edu_course'),
			'edu_school' => $this->input->post('edu_school'),
			'location' => $this->input->post('location'),
			'skills' => $this->input->post('skill1') . ',' . $this->input->post('skill2') . ',' . $this->input->post('skill3') . ',' . $this->input->post('skill4'),
			'achievements' => $this->input->post('achievements'),
			'bio' => $this->input->post('bio'),
        	);
    	
    			//var_dump($data);
    			$id = $this->User_model->UpdateUser($data, $email);
				 $_SESSION['success'] =  'Profile Updated Successfully';
				 redirect('welcome/profile');    
			
		}
			
	}

	public function ChangeProfilePicture($id)
	{

		$this->load->library('Zebra_Image');
		
// 		$this->form_validation->set_rules('photo', 'Photo', 'required');
		
// 		if ($this->form_validation->run() === FALSE)
// 		{
//            
//             // 	redirect('welcome');
//         echo 'No';
// 		}
// 		else
// 		{

				//Check whether user upload picture
			if($_FILES['photo']['name'])
			{
				$config['upload_path'] = 'uploads/images/profile-photos';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				
				//Load upload library and initialize configuration
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				
				if (! $this->upload->do_upload('photo'))
				{
					$_SESSION['error'] = $this->upload->display_errors();
					redirect('welcome');
				}
				else
				{
					$uploadData = $this->upload->data();
					$photo = $uploadData['file_name'];
					$file_temp = $uploadData['full_path'];
				}
                    
    
 				 
							//100 X 100 Thumbnail
				// load the image manipulation class
				//require 'Zebra_Image.php';
				// create a new instance of the class
				$image = new Zebra_Image();
				// if you handle image uploads from users and you have enabled exif-support with --enable-exif
				// (or, on a Windows machine you have enabled php_mbstring.dll and php_exif.dll in php.ini)
				// set this property to TRUE in order to fix rotation so you always see images in correct position
				$image->auto_handle_exif_orientation = false;
				// indicate a source image (a GIF, PNG or JPEG file)
				$image->source_path = $file_temp;
				// indicate a target image
				// note that there's no extra property to set in order to specify the target
				// image's type -simply by writing '.jpg' as extension will instruct the script
				// to create a 'jpg' file
				$image->target_path = 'uploads/images/profile-photos/100/' . $photo;
				// since in this example we're going to have a jpeg file, let's set the output
				// image's quality
				$image->jpeg_quality = 100;
				// some additional properties that can be set
				// read about them in the documentation
				$image->preserve_aspect_ratio = true;
				$image->enlarge_smaller_images = true;
				$image->preserve_time = true;
				$image->handle_exif_orientation_tag = true;
				// resize the image to exactly 100x100 pixels by using the "crop from center" method
				// (read more in the overview section or in the documentation)
				//  and if there is an error, check what the error is about
				if (!$image->resize(100, 100, ZEBRA_IMAGE_CROP_CENTER)) 
				{
					// if there was an error, let's see what the error is about
					switch ($image->error) 
					{
						case 1:
							echo 'Source file could not be found!';
							break;
						case 2:
							echo 'Source file is not readable!';
							break;
						case 3:
							echo 'Could not write target file!';
							break;
						case 4:
							echo 'Unsupported source file format!';
							break;
						case 5:
							echo 'Unsupported target file format!';
							break;
						case 6:
							echo 'GD library version does not support target file format!';
							break;
						case 7:
							echo 'GD library is not installed!';
							break;
						case 8:
							echo '"chmod" command is disabled via configuration!';
							break;
						case 9:
							echo '"exif_read_data" function is not available';
							break;
					}
				// if no errors
				} //else echo 'Success!';
	
				 $this->User_model->ChangeProfilePicture($id, $photo);
				 $_SESSION['success'] = 'Profile Picture Changed Successfully';
				 redirect('welcome/profile');    
			}
		
	}
	
	public function GetUnreadMessageCount($id)
	{
        $count = $this->User_model->GetUnreadMessageCount($id);
        return $count; 
	}
}
