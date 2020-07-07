<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model 
{
    
    public function CountAllStaff()
	{
	    $this->db->where('isHOD <',  2);
	    $this->db->where('role!=', null);
		return $this->db->count_all_results('users');
	}

	function GetAllUsers()
    {	
		$this->db->order_by('first_name', 'ASC');
		$this->db->where('isHOD <', 2);
		$this->db->where('role!=', null);
		return $this->db->get('users')->result();
	}

    function InsertUser($data)
    {
        $insert = $this->db->insert('users', $data);
		return $this->db->affected_rows();
		
	}

	 //verify password$email, $pass_word
	 function LoginValidate($email, $pass_word)
	 {
		  $this->db->where('email', $email);
		  $this->db->where('active', 1);
		  $row = $this->db->get('users')->row();
		  return $row ? password_verify($pass_word, $row->pass_word) : false;
	}

	function FetchUserDetails($email)
    {
        $this->db->select('*');
        $this->db->where('email',$email);
        return $row = $this->db->get('users')->row();
	}

	function UpdateUser($data, $email)
	{
		$this->db->where('email',$email);
		return $this->db->update('users', $data);
		return $this->db->affected_rows();
    }
	
// 	function CheckProfileUpdateStatus($email)
// 	{
// 		$this->db->select('r');
// 		$this->db->where('email',$email);
// 		return $row = $this->db->get('users')->row();
//     }

    function FindUser($email)
	{
		return $this->db->get_where('users', array('email' => $email))->row();
	}

	function FindUserWithID($id)
	{
		return $this->db->get_where('users', array('id' => $id))->row();
	}

	public function GetUserEmail($id)
	{
		$this->db->select('user_email');
		$this->db->where('req_ID', $id);
		return $row = $this->db->get('requisition_summary')->row();
	}

	public function GetUserEmail2($id)
	{
		$this->db->select('user_email');
		$this->db->where('budget_ID', $id);
		return $row = $this->db->get('budget_summary')->row();
	}

	public function GetUserEmail3($id)
	{
		$this->db->select('email');
		$this->db->where('id', $id);
		return $row = $this->db->get('leave_requests')->row();
	}
	
	public function GetUserEmailWithStaffID($id)
	{
		$this->db->select('email');
		$this->db->where('id', $id);
		return $row = $this->db->get('users')->row();
	}

	public function GetHODEmail($dept)
	{
		$this->db->select('email');
		$this->db->where('dept', $dept);
		$this->db->where('isHOD', 1);
		return $row = $this->db->get('users')->row();
	}

	public function GetMDEmail()
	{
		$this->db->select('email');
		$this->db->where('isHOD', 2);
		return $row = $this->db->get('users')->row();
	}

	function update_user($data, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('clients', $data);
	}

	function delete_user($id)
	{
		return $this->db->delete('clients', array('id' => $id));
		return $this->db->affected_rows();
	}

	function GiveMDRole($id)
	{
		$this->db->set('isMD', 1);
		$this->db->where('id', $id);
		$this->db->update('users');
		return $this->db->affected_rows();
	}

	function RemoveMDRole($id)
	{
		$this->db->set('isMD', 0);
		$this->db->where('id', $id);
		$this->db->update('users');
		return $this->db->affected_rows();
	}
	
	function GetUserWithEmail($email)
	{
	  $this->db->select('first_name, last_name');
	  $this->db->where('email', $email);
	  return $this->db->get('users')->row();
	}
	
	public function GetPendingRegistrations($dept)
	{
		$this->db->select('*');
		$this->db->where('dept', $dept);
		$this->db->where('active', 0);
		return $row = $this->db->get('users')->result();
	}
	
	function ApproveLogin($id)
	{
		$this->db->set('active', 1);
		$this->db->where('id', $id);
		$this->db->update('users');
		return $this->db->affected_rows();
	}
	
	function RemoveRegistration($id)
	{
		$this->db->where('id', $id);
        $this->db->delete('users');
		return $this->db->affected_rows();
	}

	function ChangeProfilePicture($id, $photo)
	{
		$this->db->set('photo', $photo);
		$this->db->where('id', $id);
		$this->db->update('users');
		return $this->db->affected_rows();
	}
	
	function UpdateUserOnline($id, $status)
	{
	    $this->db->set('online', $status);
		$this->db->where('id', $id);
		$this->db->update('users');
		return $this->db->affected_rows();
	}
	
	function InsertPasswordResetToken($data)
    {
        $insert = $this->db->insert('password_reset_request', $data);
		return $this->db->affected_rows();
	}
	
	function VerifyToken($email, $token)
    {
      $this->db->select('*');
	  $this->db->where('email', $email);
	  $this->db->where('token', $token);
      return $this->db->get('password_reset_request')->row();  
	}
	
	function UpdatePassword($email, $new_password)
	{
	    $this->db->set('pass_word', $new_password);
		$this->db->where('email', $email);
		$this->db->update('users');
		return $this->db->affected_rows();
	}
	
	function GetUnreadMessageCount($id)
	{
	    $this->db->select('*');
		$this->db->where('reciever_userid', $id);
		$this->db->where('status', 1);
	    return $this->db->count_all_results('chat');
	}
	
}