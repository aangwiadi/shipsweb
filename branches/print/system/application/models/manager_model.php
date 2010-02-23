<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Manager_model extends Model
{
	protected $table = 'ships_manager';

	function Manager_model()
	{
		parent::Model();
		$this->load->database();
	}

	function create($data)
	{
	  $this->db->insert($this->table, $data);
	  return $this->db->insert_id();
	}

	function get($id)
	{
		$sql = "SELECT $this->table.Id, $this->table.Name, Address, PostalCode, 
				Phone1, Phone2, Phone3, Fax, Email1, Email2, 
				Homepage, Mic1, Mic2, Mic3, Mic4, 
				Remarks, ships_city.Name AS CityName, CityId
				FROM $this->table
				LEFT JOIN ships_city ON CityId = ships_city.Id
				WHERE $this->table.Id = ?";

		$query = $this->db->query($sql, array((int)$id));
		if($query->num_rows() > 0)
		{
			return $query->row_array();
		}
	}

	function delete($id)
	{
		$this->db->where('Id', $id);
		return $this->db->delete($this->table);
	}

	function get_all_ordered()
	{
		$this->db->order_by('Name');
		$query = $this->db->get($this->table);
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

// EOF
