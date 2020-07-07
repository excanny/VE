<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar_model extends CI_Model 
{
    
    public function CountAllEvents($email)
	{
	    $this->db->where('email', $email);
		return $this->db->count_all_results('events');
	}

    function InsertEvent($data)
    {
        $insert = $this->db->insert('events', $data);
        return $this->db->affected_rows();
    }

    function InsertGeneralEvent($data)
    {
        $insert = $this->db->insert('general_events', $data);
        return $this->db->affected_rows();
    }
	
	public function GetGeneralAllEvents()
    {
		return $this->db->get('general_events')->result();
    }

    function GetUserEvents($email)
    {
        $this->db->where('email', $email);
		return $this->db->get('events')->result();
    }


    function FindEvent($id)
	{
		return $this->db->get_where('events', array('id' => $id))->row();
    }
    
    function FindGeneralEvent($id)
    {
		return $this->db->get_where('general_events', array('id' => $id))->row();
    }
    
	function UpdateEvent($data, $id)
	{
		$this->db->where('id',$id);
        $this->db->update('events', $data);
        return $this->db->affected_rows();
    }
    
    function UpdateGeneralEvent($data, $id)
	{
		$this->db->where('id',$id);
        $this->db->update('general_events', $data);
        return $this->db->affected_rows();
    }
    
	function DeleteEvent($id)
	{
        return $this->db->delete('events', array('id' => $id));
        return $this->db->affected_rows();
    }
    
    function DeleteGeneralEvent($id)
	{
        return $this->db->delete('general_events', array('id' => $id));
        return $this->db->affected_rows();
    }

    public function get_events()
    {
        return $this->db->where("start >=", $start)->where("end <=", $end)->get("calendar_events");
    }

   
}