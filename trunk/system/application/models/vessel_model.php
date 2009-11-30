<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Vessel_model extends Model
{
	function Vessel_model()
	{
		parent::Model();
		$this->load->database();
	}

	function create($data)
	{
		$this->db->insert('vessels');
		return;
	}

	function update($id, $data)
	{
		$this->db->where('Id', $id);
		return $this->db->update('VESSEL', $data);
	}

	function get($id)
	{
		$sql = "SELECT VESSEL.*, MANAGER.Name AS ManagerName, CITY.Name AS HomePort, COUNTRY.Name AS Flag
			FROM VESSEL
			LEFT JOIN MANAGER ON VESSEL.ManagerId = MANAGER.Id
			LEFT JOIN CITY ON VESSEL.CityId = CITY.Id
			LEFT JOIN COUNTRY ON VESSEL.CountryId = COUNTRY.Id
			WHERE VESSEL.Id = ?";

		$query = $this->db->query($sql, array($id));
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}
}

?>