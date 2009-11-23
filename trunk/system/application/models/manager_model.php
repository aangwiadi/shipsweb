<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Manager_model extends Model
{
    protected $table = 'MANAGER';
   
    function Manager_model()
    {
	parent::Model();
	$this->load->database();
    }

    function create($data)
    {
	$this->db->insert($this->table);
	return;
    }

    function get($id)
    {
	$query = $this->db->get_where($this->table, array('ID' => $id));
	if($query->num_rows() > 0)
	{
	    return $query->row();
	}
    }
    
    function get_all()
    {
      $query = $this->db->get('MANAGER');
      if($query->num_rows() > 0)
      {
	return $query->result_array();
      }
      
      return array();
    }

    function get_all_ordered()
    {
      $this->db->order_by('Name');
      $query = $this->db->get('MANAGER');
      
      if($query->num_rows() > 0)
      {
	return $query->result_array();
      }
      
      return array();
    }
    
    function update($id, $data)
    {
      $this->db->where('Id', $id);
      return $this->db->update($this->table, $data);
    }
}
?>
