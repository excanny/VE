<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Requisition_model extends CI_Model 
{
    public function CountAllReq($email)
	{
	    $this->db->where('user_email', $email);
		return $this->db->count_all_results('requisition_summary');
	}
    
    function InsertItem($data)
    {
        $insert = $this->db->insert('requisition_summary', $data);
        return $this->db->insert_id();
    }

    function InsertBatchItems($data)
    {
        $this->db->insert_batch('requisition_details', $data);
        return $this->db->affected_rows();
    }

    function GetAllProcuredItems()
    {
      $this->db->select('*');
      $this->db->where('process_level', 3);
	  return $this->db->get('requisition_summary')->result();
    }
	
	  function GetAllApprovedItems()
    {
      $this->db->select('*');
      $this->db->where('process_level', 2);
		  return $this->db->get('requisition_summary')->result();
    }

    function GetAllPendingItemsMD()
    {
      $this->db->select('*');
      $this->db->where('process_level', 1);
		  return $this->db->get('requisition_summary')->result();
    }

    function GetAllItemsByUser($email)
    {
      $this->db->select('*');
      $this->db->where('user_email', $email);
		  return $this->db->get('requisition_summary')->result();
    }

    function GetAllItemsByDept($dept)
    {
      $this->db->select('*');
      $this->db->where('dept', $dept);
      $this->db->where('process_level >', 0);
		  return $this->db->get('requisition_summary')->result();
    }

    function GetAllPendingItemsByDept($dept)
    {
      $this->db->select('*');
      $this->db->where('dept', $dept);
      $this->db->where('process_level', 0);
		  return $this->db->get('requisition_summary')->result();
    }


    function FindItem($id)
	  {
		 return $this->db->get_where('requisition_summary', array('req_ID' => $id))->row();
    }

    function FindItemDetails($id)
	  {
      $this->db->select('*');
      $this->db->where('req_ID',$id);
      return $this->db->get('requisition_details')->result();
    }
    
    function UpdateItem($data, $id)
    {
      $this->db->where('id',$id);
      $this->db->update('requisition_summary', $data);
      return $this->db->affected_rows();
    }
      
    function DeleteItem($id)
    {
      $this->db->delete('requisition_summary', array('id' => $id));
      return $this->db->affected_rows();
    }

    function CheckProcessLevel($id)
	  {
      $this->db->select('process_level');
      $this->db->where('req_ID',$id);
      return $this->db->get('requisition_summary')->row();
    }

    public function HodRecommend($id)
    {
      $this->db->set('process_level', 1);
      $this->db->where('req_ID', $id);
      $this->db->update('requisition_summary'); 
      return $this->db->affected_rows();  
    }

    public function HodReject($id)
    {
      $this->db->set('process_level', -1);
      $this->db->where('req_ID', $id);
      $this->db->update('requisition_summary');   
      return $this->db->affected_rows();
    }

    public function MDRecommend($id, $approval_date)
    {
     
      $this->db->set('process_level', 2);
      $this->db->set('approval_date', $approval_date);
      $this->db->where('req_ID', $id);
      $this->db->update('requisition_summary'); 
      return $this->db->affected_rows();  
    }

    public function MDReject($id)
    {
      $this->db->set('process_level', -2);
      $this->db->where('req_ID', $id);
      $this->db->update('requisition_summary');  
      return $this->db->affected_rows(); 
    }
    
    public function MarkedAsProccessed($id)
    {
      $this->db->set('process_level', 3);
      $this->db->where('req_ID', $id);
      $this->db->update('requisition_summary'); 
      return $this->db->affected_rows();  
    }
}