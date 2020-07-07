<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_model extends CI_Model 
{
    
    public function GetAllSuppliers()
	{
        $this->db->order_by('name', 'ASC');
	    return $this->db->get('suppliers')->result();
    }

    function InsertSupplier($data)
    {
        $this->db->insert('suppliers', $data);
        return $this->db->affected_rows();
    }

    function InsertInvoice($data)
    {
        $this->db->insert('invoice_summary', $data);
        return $this->db->insert_id();
    }

    function InsertInvoiceDetails($data)
    {
        $this->db->insert_batch('invoice_details', $data);
        return $this->db->affected_rows();
    }

    public function GetAllInvoices()
	{
        $this->db->order_by('id', 'DESC');
	    return $this->db->get('invoice_summary')->result();
    }


    function FindInvoice($id)
	{
         $this->db->select('*');
         $this->db->join('suppliers', 'suppliers.id=invoice_summary.supplierID');
         return  $this->db->get('invoice_summary')->row();
    }
    
    function FindInvoiceDetails($id)
	{
        $this->db->select('*');
        $this->db->where('invoiceID', $id);
        return $this->db->get('invoice_details')->result();
    }
    
    function GetSupplierNameWithID($id)
	{
	  $this->db->select('name');
	  $this->db->where('id', $id);
	  return $this->db->get('suppliers')->row();
	}
   
}