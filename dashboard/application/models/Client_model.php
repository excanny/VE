<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Client_model extends CI_Model 
{
    
    public function CountAllClients($email)
	{
	    $this->db->where('email', $email);
		return $this->db->count_all_results('Client_requests');
	}


	public function GetAllClients()
	{
        $this->db->order_by('name', 'ASC');
	    return $this->db->get('clients')->result();
    }

    function InsertClient($data)
    {
        $this->db->insert('clients', $data);
        return $this->db->affected_rows();  
	}

    function GetClientWithEmail($email)
	{
	  $this->db->select('name');
	  $this->db->where('email', $email);
	  return $this->db->get('clients')->row();
	}
	
}