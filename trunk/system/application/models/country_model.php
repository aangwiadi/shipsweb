<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Country_model extends Model
{
    function Country_model()
    {
	parent::Model();
	$this->load->database();
    }

    function create($data)
    {
	$this->db->insert('COUNTRY');
	return;
    }

    function get($id)
    {
	$query = $this->db->get_where('COUNTRY', array('Id' => $id));
	if($query->num_rows() == 1)
	{
	    return $query->row();
	}
    }
    
    function get_all()
    {
	$query = $this->db->get('COUNTRY');
	if($query->num_rows() > 0)
	{
	  return $query->result_array();
	}
    }

    function get_all_ordered()
    {
	$this->db->order_by('Name');
	$query = $this->db->get('COUNTRY');
	if($query->num_rows() > 0)
	{
	  return $query->result_array();
	}
    }
}

?>
