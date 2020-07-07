<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model 
{
    function InsertFile($data)
    {
        $insert = $this->db->insert('files', $data);
        return $this->db->affected_rows();
    }
	
	function GetAllFiles()
    {
		return $this->db->get('files')->result();
    }

    function FindFile($key)
	{
        $this->db->select('*');
		return $this->db->get_where('files', array('token' => $key))->row();
    }
    
	function UpdateFile($data, $id)
	{
		$this->db->where('id',$id);
		return $this->db->update('files', $data);
    }
    
	function DeleteFile($id)
	{
		return $this->db->delete('files', array('id' => $id));
    }

    public function get_Files()
    {
        return $this->db->where("start >=", $start)->where("end <=", $end)->get("calendar_Files");
    }

    //verify password$email, $pass_word
	 function FileValidate($key)
	 {
          $this->db->select('*');
		  $this->db->where('token', $key);
		  $row = $this->db->get('files')->row();
		  return $row ? $row : false;
	}


   
}