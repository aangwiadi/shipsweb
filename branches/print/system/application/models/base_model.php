<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Base_model extends Model
{
	function Base_model()
	{
		parent::Model();
		$this->load->database();
	}

	function create($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function get_all()
	{
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function get_all_ordered()
	{
		$this->db->order_by('Name');
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function update($id, $data)
	{
		$this->db->where('Id', $id);
		return $this->db->update($this->table, $data);
	}
}
?>
