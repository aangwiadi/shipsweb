<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Vessel_model extends Model
{
	protected $table = "ships_vessel"; 

	function Vessel_model()
	{
		parent::Model();
		$this->load->database();
	}

	function create($data)
	{
	  $this->db->insert($this->table, $data);
	  return $this->db->insert_id();
	}

	function update($id, $data)
	{
		$this->db->where('Id', $id);
		return $this->db->update($this->table, $data);
	}

	function read($id)
	{
		$sql = "SELECT $this->table.*, ships_manager.Name AS ManagerName,
		   		ships_city.Name AS HomePort, ships_country.Name AS Flag
				FROM $this->table
				LEFT JOIN ships_manager ON $this->table.ManagerId = ships_manager.Id
				LEFT JOIN ships_city ON $this->table.CityId = ships_city.Id
				LEFT JOIN ships_country ON $this->table.CountryId = ships_country.Id
				WHERE $this->table.Id = ?";

		$query = $this->db->query($sql, array($id));
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
}

// EOF
