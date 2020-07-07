<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model 
{
    
    public function GetAllClients()
	{
        $this->db->order_by('name', 'ASC');
	    return $this->db->get('clients')->result();
    }
    
    public function GetAllContracts()
	{
        $this->db->order_by('clientID', 'ASC');
	    return $this->db->get('contracts')->result();
	}
	
	function GetAllProjects()
    {
        $this->db->order_by('projectID', 'DESC');
	    return $this->db->get('projects')->result();
    }

    function InsertProject($data)
    {
        $insert = $this->db->insert('projects', $data);
        return $this->db->affected_rows();
    }
    
    function ReportAction($data)
    {
        $this->db->insert('project_history', $data);
        return $this->db->affected_rows();
    }
    
    public function GetAllReports($id)
	{
        $this->db->order_by('id', 'DESC');
        $this->db->select('*');
        $this->db->where('projectID', $id);
	    return $this->db->get('project_history')->result();
	}
	

   
	
}