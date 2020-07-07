<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Journey_model extends CI_Model 
{

    function GetAllJourneys()
    {
        $this->db->order_by('id', 'DESC');
	    return $this->db->get('journey')->result(); 
	}

    function InsertJourney($data)
    {
        $this->db->insert('journey', $data);
        return $this->db->affected_rows();  
	}

	function FetchUserDetails($email)
    {
        $this->db->select('*');
        $this->db->where('email',$email);
        $row = $this->db->get('Client_requests')->row();
        return $row;
	}

	function UpdateUser($data, $email)
	{
		$this->db->where('email',$email);
		return $this->db->update('Client_requests', $data);
    }
	
	function CheckProfileUpdateStatus($email)
	{
		$this->db->select('role');
		$this->db->where('email',$email);
		return $row = $this->db->get('Client_requests')->row();
    }

  function FindItem($id)
	{
		return $this->db->get_where('Client_requests', array('id' => $id))->row();
	}

	function CheckProcessLevel($id)
	{
		$this->db->select('process_level');
		$this->db->where('id',$id);
		return $this->db->get('Client_requests')->row();
	}

	public function HodRecommend($id)
    {
      $this->db->set('process_level', 1);
      $this->db->where('id', $id);
      $this->db->update('Client_requests'); 
      return $this->db->affected_rows();  
    }

    public function HodReject($id)
    {
      $this->db->set('process_level', -1);
      $this->db->where('id', $id);
      $this->db->update('Client_requests');
      return $this->db->affected_rows();   
    }


	function update_user($data, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('clients', $data);
	}
	function delete_user($id)
	{
		return $this->db->delete('clients', array('id' => $id));
	}

	
}