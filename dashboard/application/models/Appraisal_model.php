<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appraisal_model extends CI_Model 
{

    function InsertAppraisal($data)
    {
        $insert = $this->db->insert('appraisal', $data);
        return $this->db->affected_rows();
    }

    function HODUpdate($data, $id)
    {
        $this->db->where('id',$id);
      $this->db->update('appraisal', $data);
        return $this->db->affected_rows();
    }

    
    function HRUpdate($data, $id)
    {
        $this->db->where('id',$id);
      $this->db->update('appraisal', $data);
        return $this->db->affected_rows();
    }

    function MDUpdate($data, $id)
    {
        $this->db->where('id',$id);
      $this->db->update('appraisal', $data);
        return $this->db->affected_rows();
    }
    
    public function GetDeptAppraisalPending($dept)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('dept', $dept);
        $this->db->where('process_level', 0);
	    return $this->db->get('appraisal')->result();
    }
    
    public function GetDeptAppraisalTreated($dept)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('dept', $dept);
        $this->db->where('process_level', 1);
	    return $this->db->get('appraisal')->result();
    }

    public function GetHRAppraisalPending()
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('process_level', 1);
	    return $this->db->get('appraisal')->result();
    }
    
    public function GetHRAppraisalTreated($dept)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('process_level', 2);
	    return $this->db->get('appraisal')->result();
    }

    public function GetMDAppraisalPending()
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('process_level', 2);
	    return $this->db->get('appraisal')->result();
    }
    
    public function GetMDAppraisalTreated($dept)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('process_level', 3);
	    return $this->db->get('appraisal')->result();
    }
    
    public function GetAppraisal($id)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('id', $id);
	    return $this->db->get('appraisal')->row();
	}
	

   
	
}