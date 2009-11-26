<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Vessels_model extends Model
{
	function Vessels_model()
	{
		parent::Model();
		$this->load->database();
	}

	function get_all_vessels($searchitem, $searchtext)
	{
	    $this->db->select('Id, Name, Type, Dwat, Built, LOA, Beam, Draft, Grain, Bale, HO, HA, BT, NT, Mobile');

	    if(strlen($searchitem))
		if(strlen($searchtext))
		{
		    $this->db->where("$searchitem LIKE %$searchtext%");
		}

	    $query = $this->db->get('VESSEL');
	    if($query->num_rows() > 0)
	    {
		return $query->result_array();
	    }
	}

	function get_tabel_def()
	{
	    return  $this->db->list_fields('VESSEL');
	}

	function get_vessel($id)
	{
		$query = $this->db->get_where('VESSEL', array('ID' => (int)$id));
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}

	function get_vessels_page($num, $offset, $sort_column, $sort_direction)
	{
		$sql = "SELECT VESSEL.Id AS Id, VESSEL.Name,
			Type, Dwat, Built, LOA, Beam, Draft,
			Grain, Bale, HO, HA, BT, NT, Mobile,
			MANAGER.Name AS ManagerName, ManagerId
			FROM VESSEL, MANAGER
			WHERE ManagerId = MANAGER.ID
			ORDER BY $sort_column $sort_direction LIMIT ?, ?";

		$query = $this->db->query($sql, array((int)$offset, (int)$num)); 

		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function get_total_vessels()
	{
		return $this->db->count_all('VESSEL');
	}

	function update_vessel($data)
	{

	}

	function create_vessel($data)
	{

	}

	function get_vessels_by_manager($manager_id)
	{
		$query = $this->db->get_where('VESSEL', array('ManagerId' => (int)$manager_id));
		if($query->num_rows() > 0)
			return $query->result_array();
		return array();
	}
}

?>
