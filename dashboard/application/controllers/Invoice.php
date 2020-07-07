<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice extends CI_Controller {
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
	  $this->load->model(['File_model', 'User_model', 'Invoice_model']);
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
        $data['invoices'] = $this->Invoice_model->GetAllInvoices();
		$data['content'] = 'invoices/lists';
		$this->load->view($this->layout, $data);
	}

	public function Create()
	{
	    $email = $_SESSION['email'];
        $data['user'] = $this->User_model->FindUser($email);
        $data['suppliers'] = $this->Invoice_model->GetAllSuppliers();
		$data['content'] = 'invoices/create';
		$this->load->view($this->layout, $data);
	}

	public function CreateSupplier()
	{
	    $email = $_SESSION['email'];
        $data['user'] = $this->User_model->FindUser($email);
       
		$data['content'] = 'invoices/create-supplier';
		$this->load->view($this->layout, $data);
	}

	public function CreateSupplierAction()
	{
	   $data = $this->input->post();
	   //var_dump($data);
	   $inserted = $this->Invoice_model->InsertSupplier($data);
	   if($inserted > 0)
		{
			$_SESSION['success'] = 'Supplier created successfully';
			redirect('invoice/create');   
		}
	}

	public function View($id)
	{
		$email = $_SESSION['email'];
        $data['user'] = $this->User_model->FindUser($email);
		$data['invoice'] = $this->Invoice_model->FindInvoice($id);
		$data['details'] = $this->Invoice_model->FindInvoiceDetails($id);
		$data['content'] = 'invoices/read';
		$this->load->view($this->layout, $data);
		//var_dump($data['invoice']);
	}	

	public function Store()
	{	
		$data['supplierID'] = $this->input->post('supplierID');
		$data['issue_date'] = date('Y-m-d', strtotime($this->input->post('issue_date')));
		$data['invoice_no'] = $this->input->post('invoice_no');

		 $last_id = $this->Invoice_model->InsertInvoice($data);

		
		for($i=0; $i<count($this->input->post('description')); $i++)
		{
			
			$data2[]=array(
		 		'invoiceID' =>  $last_id,
				'description' => $this->input->post('description')[$i],
				'quantity'=>$this->input->post('quantity')[$i],
				'price'=>$this->input->post('price')[$i],
			);
		
		}
		   //var_dump($data2);
		 $inserted = $this->Invoice_model->InsertInvoiceDetails($data2);
		 if($inserted > 0)
		 {
			$_SESSION['success'] = 'Invoice Created Successfully';
			redirect('invoice');
			//var_dump($data2);
		 }
	}


	public function PDF($id)
    {
        $url = "https://api.sejda.com/v2/html-pdf";
        $content = json_encode(array('url' => 'http://veritygeo.com/demo/dashboard/index.php/invoice/View/'.$id));
        $apiKey = 'api_7BBED5D88E204095B3CF03A88CDDE799';

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Content-type: application/json",
        "Authorization: Token: " . $apiKey));

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

        $response = curl_exec($curl);

        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($status == 200) 
        {
            $fp = fopen("out.pdf", "w");
            fwrite($fp, $response);
            fclose($fp);
            print("PDF saved to disk");
            
            // The location of the PDF file 

            // Header content type 
            header("Content-type: application/pdf"); 
              
            header("Content-Length: " . filesize("out.pdf")); 
              
            // Send the file to the browser. 
            readfile("out.pdf"); 
                
        } 
        else 
        {
            print("Error: failed with status $status, response $response, curl_error " . curl_error($curl) . ", curl_errno " . curl_errno($curl));
        }
    }


    public function GetSupplierNameWithID($id)
	{
        $supplier = $this->Invoice_model->GetSupplierNameWithID($id);
        return $supplier->name; 
	}
	
	public function GetUnreadMessageCount($id)
	{
        $count = $this->User_model->GetUnreadMessageCount($id);
        return $count; 
	}


}