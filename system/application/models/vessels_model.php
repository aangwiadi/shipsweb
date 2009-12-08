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
		$fields = $this->db->field_data('VESSEL');
		$table_defs = array();
		/*

		foreach ($fields as $field)
		{
			echo $field->name;
			echo $field->type;
			echo $field->max_length;
			echo $field->primary_key;
		} 
		 */

		$fields = $this->db->list_fields('VESSEL');
		foreach($fields as $field)
		{
			if(strrpos($field, 'Id') === false)
			{
				$table_defs[$field] = $field;
			}
		}
		return $table_defs;
	}

	function get_vessel($id)
	{
		$query = $this->db->get_where('VESSEL', array('ID' => (int)$id));
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}

	function read_page($num, $offset, $sort_column, $sort_direction, $searchitem, $searchdata)
	{
		$sql = "SELECT VESSEL.Id AS Id, VESSEL.Name,
				Type, Dwat, Built, LOA, Beam, Draft,
				Grain, Bale, HO, HA, BT, NT, Mobile,
				MANAGER.Name AS ManagerName, ManagerId
				FROM VESSEL
				LEFT JOIN MANAGER ON ManagerId = MANAGER.Id";

		if(!empty($searchitem))
			if(!empty($searchdata))
				$sql = $sql . " WHERE VESSEL.$searchitem LIKE '%$searchdata%' ";

		$sql = $sql . " ORDER BY $sort_column $sort_direction LIMIT ?, ?";
		$query = $this->db->query($sql, array((int)$offset, (int)$num)); 

		if($query->num_rows() > 0)
			return $query->result_array();

		return array();
	}

	function read_total_num($searchitem, $searchdata)
	{
		$sql = "SELECT COUNT(*) FROM VESSEL ";

		if(!empty($searchitem))
			if(!empty($searchdata))
				$sql = $sql . " WHERE VESSEL.$searchitem LIKE '%$searchdata%' ";

		$row_count = $this->db->query($sql)->row('COUNT(*)');
		if($row_count > 0)
			return $row_count;

	    return 0;
	}

	function read_by_manager($manager_id)
	{
		$query = $this->db->get_where('VESSEL', array('ManagerId' => (int)$manager_id));
		if($query->num_rows() > 0)
			return $query->result_array();
		return array();
	}
}

?>
