<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance_model extends CI_Model 
{

    function InsertPerformance($data)
    {
        $insert = $this->db->insert('performance', $data);
        return $this->db->affected_rows();
    }

    function HODUpdate($data, $id)
    {
        $this->db->where('id',$id);
      $this->db->update('performance', $data);
        return $this->db->affected_rows();
    }

    
    function HRUpdate($data, $id)
    {
        $this->db->where('id',$id);
      $this->db->update('performance', $data);
        return $this->db->affected_rows();
    }

    function MDUpdate($data, $id)
    {
        $this->db->where('id',$id);
      $this->db->update('performance', $data);
        return $this->db->affected_rows();
    }
    
    public function GetDeptPerformancePending($dept)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('dept', $dept);
        $this->db->where('process_level', 0);
	    return $this->db->get('performance')->result();
    }
    
    public function GetDeptPerformanceTreated($dept)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('dept', $dept);
        $this->db->where('process_level', 1);
	    return $this->db->get('performance')->result();
    }

    public function GetHRPerformancePending()
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('process_level', 1);
	    return $this->db->get('performance')->result();
    }
    
    public function GetHRPerformanceTreated($dept)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('process_level', 2);
	    return $this->db->get('performance')->result();
    }

    public function GetMDPerformancePending()
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('process_level', 2);
	    return $this->db->get('performance')->result();
    }
    
    public function GetMDPerformanceTreated($dept)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('process_level', 3);
	    return $this->db->get('performance')->result();
    }
    
    public function GetPerformance($id)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('id', $id);
	    return $this->db->get('performance')->row();
	}
	

   
	
}