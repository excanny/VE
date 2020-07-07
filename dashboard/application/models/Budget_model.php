<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget_model extends CI_Model 
{
    public function CountAllBudgets($email)
	{
	    $this->db->where('email', $email);
		return $this->db->count_all_results('budget_summary');
	}
    
    function InsertItem($data)
    {
        $insert = $this->db->insert('budget_summary', $data);
        return $this->db->insert_id();
    }

    function InsertBatchItems($data)
    {
        $this->db->insert_batch('budget_details', $data);
        return $this->db->affected_rows();
    }
	
	  function GetAllApprovedItems()
    {
      $this->db->order_by('budget_ID', 'DESC');
      $this->db->select('*');
      $this->db->where('process_level', 2);
		  return $this->db->get('budget_summary')->result();
    }

    function GetAllPendingItemsMD()
    {
      $this->db->order_by('budget_ID', 'DESC');
      $this->db->select('*');
      $this->db->where('process_level', 1);
		  return $this->db->get('budget_summary')->result();
    }

    function GetAllItemsByUser($email)
    {
      $this->db->order_by('budget_ID', 'DESC');
      $this->db->select('*');
      $this->db->where('user_email', $email);
		  return $this->db->get('budget_summary')->result();
    }

    function GetAllItemsByDept($dept)
    {
      $this->db->select('*');
      $this->db->where('dept', $dept);
      $this->db->where('process_level >', 0);
		  return $this->db->get('budget_summary')->result();
    }

    function GetAllPendingItemsByDept($dept)
    {
      $this->db->select('*');
      $this->db->where('dept', $dept);
      $this->db->where('process_level', 0);
		  return $this->db->get('budget_summary')->result();
    }


    function FindItem($id)
	  {
		return $this->db->get_where('budget_summary', array('budget_ID' => $id))->row();
    }

    function FindItemDetails($id)
	  {
      $this->db->select('*');
      $this->db->where('budget_ID',$id);
      return $this->db->get('budget_details')->result();
    }
    
    function UpdateItem($data, $id)
    {
      $this->db->where('id',$id);
      $this->db->update('budget_summary', $data);
      return $this->db->affected_rows();
    }
      
    function DeleteItem($id)
    {
      return $this->db->delete('budget_summary', array('id' => $id));
      return $this->db->affected_rows();
    }

    function CheckProcessLevel($id)
	  {
      $this->db->select('process_level');
      $this->db->where('budget_ID',$id);
      return $this->db->get('budget_summary')->row();
    }

    public function HodRecommend($id)
    {
      $this->db->set('process_level', 1);
      $this->db->where('budget_ID', $id);
      $this->db->update('budget_summary'); 
      return $this->db->affected_rows();  
    }

    public function HodReject($id)
    {
      $this->db->set('process_level', -1);
      $this->db->where('budget_ID', $id);
      $this->db->update('budget_summary');
      return $this->db->affected_rows();   
    }

    public function MDRecommend($id)
    {
      $this->db->set('process_level', 2);
      $this->db->where('budget_ID', $id);
      $this->db->update('budget_summary'); 
      return $this->db->affected_rows();  
    }

    public function MDReject($id)
    {
      $this->db->set('process_level', -2);
      $this->db->where('budget_ID', $id);
      $this->db->update('budget_summary');
      return $this->db->affected_rows();   
    }
}