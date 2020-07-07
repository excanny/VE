<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Leave_model extends CI_Model 
{
    
    public function CountAllLeaves($email)
	{
	    $this->db->where('email', $email);
		return $this->db->count_all_results('leave_requests');
	}

	public function GetAllPendingLeaveRequests()
    {	
		$this->db->order_by('id', 'DESC');
		$this->db->where('process_level', 1);
		return $this->db->get('leave_requests')->result();
	}
	
	function GetAllApprovedLeaveRequests()
    {	
		$this->db->order_by('id', 'DESC');
		$this->db->where('process_level', 2);
		return $this->db->get('leave_requests')->result();
	}

	function GetDeptPendingLeaveRequests($dept)
    {	
		$this->db->where('dept', $dept);
		$this->db->where('process_level', 0);
		return $this->db->get('leave_requests')->result();
	}

	function GetDeptApprovedLeaveRequests($dept)
    {	
		$this->db->where('dept', $dept);
		$this->db->where('process_level', 1);
		return $this->db->get('leave_requests')->result();
	}

	function GetUserLeaveRequests($email)
    {	
		$this->db->where('email', $email);
		return $this->db->get('leave_requests')->result();
	}


    function InsertLeave($data)
    {
        $this->db->insert('leave_requests', $data);
        return $this->db->affected_rows();  
	}

	function FetchUserDetails($email)
    {
        $this->db->select('*');
        $this->db->where('email',$email);
        $row = $this->db->get('leave_requests')->row();
        return $row;
	}

	function UpdateUser($data, $email)
	{
		$this->db->where('email',$email);
		return $this->db->update('leave_requests', $data);
    }
	
	function CheckProfileUpdateStatus($email)
	{
		$this->db->select('role');
		$this->db->where('email',$email);
		return $row = $this->db->get('leave_requests')->row();
    }

  function FindItem($id)
	{
		return $this->db->get_where('leave_requests', array('id' => $id))->row();
	}

	function CheckProcessLevel($id)
	{
		$this->db->select('process_level');
		$this->db->where('id',$id);
		return $this->db->get('leave_requests')->row();
	}

	public function HodRecommend($id)
    {
      $this->db->set('process_level', 1);
      $this->db->where('id', $id);
      $this->db->update('leave_requests'); 
      return $this->db->affected_rows();  
    }

    public function HodReject($id)
    {
      $this->db->set('process_level', -1);
      $this->db->where('id', $id);
      $this->db->update('leave_requests');
      return $this->db->affected_rows();   
    }
    
    public function MDApprove($id)
    {
      $this->db->set('process_level', 2);
      $this->db->where('id', $id);
      $this->db->update('leave_requests'); 
      return $this->db->affected_rows();  
    }

    public function MDReject($id)
    {
      $this->db->set('process_level', -2);
      $this->db->where('id', $id);
      $this->db->update('leave_requests');
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