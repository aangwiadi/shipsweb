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
			{
				$minmax = explode(' ', $searchdata);

				if(count($minmax) == 3)
					return;

				if(count($minmax) == 2)
				{
					if(is_numeric($minmax[0]))
						if(is_numeric($minmax[1]))
							$sql = $sql . " WHERE VESSEL.$searchitem > $minmax[0] AND VESSEL.$searchitem < $minmax[1] ";
						else
							$sql = $sql . " WHERE VESSEL.$searchitem > $minmax[0] ";
					else
						$sql = $sql . " WHERE VESSEL.$searchitem LIKE '%$searchdata%' ";
				}
				
				if(count($minmax) == 1)
				{
					if(is_numeric($minmax[0]))
						$sql = $sql . " WHERE VESSEL.$searchitem > $minmax[0] ";
					else
						$sql = $sql . " WHERE VESSEL.$searchitem LIKE '%$searchdata%' ";
				}
			}

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
			{
				$minmax = explode(' ', $searchdata);

				if(count($minmax) == 3)
					return;

				if(count($minmax) == 2)
				{
					if(is_numeric($minmax[0]))
						if(is_numeric($minmax[1]))
							$sql = $sql . " WHERE VESSEL.$searchitem > $minmax[0] AND VESSEL.$searchitem < $minmax[1] ";
						else
							$sql = $sql . " WHERE VESSEL.$searchitem > $minmax[0] ";
					else
						$sql = $sql . " WHERE VESSEL.$searchitem LIKE '%$searchdata%' ";
				}
				
				if(count($minmax) == 1)
				{
					if(is_numeric($minmax[0]))
						$sql = $sql . " WHERE VESSEL.$searchitem > $minmax[0] ";
					else
						$sql = $sql . " WHERE VESSEL.$searchitem LIKE '%$searchdata%' ";
				}
			}

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

// EOF
