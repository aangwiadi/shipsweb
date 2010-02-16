<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class City_model extends Model
{
	protected $table = "ships_city";
	protected $columns = "ships_city.Id, ships_city.Name, CountryId";

	function City_model()
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
		$sql = "SELECT $this->columns, ships_country.Name AS CountryName 
				FROM $this->table
				LEFT JOIN ships_country ON $this->table.CountryId = ships_country.Id 
				WHERE $this->table.Id = ?";
		$query = $this->db->query($sql, array('Id' => $id));
		if($query->num_rows() == 1)
			return $query->row();
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

// EOF
