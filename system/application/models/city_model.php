<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class City_model extends Model
{
	protected $table = "CITY";
	protected $columns = "CITY.Id, CITY.Name, CountryId";

	function City_model()
	{
		parent::Model();
		$this->load->database();
	}

	function create($data)
	{
		$this->db->insert('CITY');
		return;
	}

	function get($id)
	{
		$sql = "SELECT $this->columns, COUNTRY.Name AS CountryName 
				FROM $this->table
				LEFT JOIN COUNTRY ON CITY.CountryId = COUNTRY.Id 
				WHERE CITY.Id = ?";
		$query = $this->db->query($sql, array('Id' => $id));
		if($query->num_rows() == 1)
			return $query->row();
	}

	function get_all()
	{
		$query = $this->db->get('CITY');
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function get_all_ordered()
	{
		$this->db->order_by('Name');
		$query = $this->db->get('CITY');
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function update($id, $data)
	{
		$this->db->where('Id', $id);
		return $this->db->update('CITY', $data);
	}
}
?>
