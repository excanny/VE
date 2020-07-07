<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Department_model extends CI_Model 
{
	function GetAllDepts()
	{
        $this->db->order_by('name', 'ASC');
		return $this->db->get('departments')->result();
	}

	function GetDeptWithDeptID($dept_ID)
	{
	  $this->db->select('*');
	  $this->db->where('id', $dept_ID);
	  return $this->db->get('departments')->row();
	}
}