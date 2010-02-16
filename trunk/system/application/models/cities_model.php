<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Cities_model extends Model
{
	protected $table = 'ships_city';
	protected $col_str = 'ships_city.Id, ships_city.Name';

	function Cities_model()
	{
		parent::Model();
		$this->load->database();
	}

	function get_all()
	{
		$this->db->select($this->col_str);
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0)
			return $query->result_array();
	}

	function get_tabel_def()
	{
		$table_defs = array();

		$fields = $this->db->list_fields($this->table);
		
		foreach($fields as $field)
			if(strrpos($field, 'Id') === FALSE)
				$table_defs[$field] = $field;

		return $table_defs;
	}

	function get_page($num, $offset, $sort_column, $sort_direction, $search_item, $search_text)
	{
		$sql = "SELECT $this->col_str, ships_country.Name AS CountryName, CountryId 
			    FROM $this->table, ships_country
				WHERE CountryId = ships_country.Id";

		if(!empty($search_item))
			if(!empty($search_text))
				$sql = $sql . " AND $this->table.$search_item LIKE '%$search_text%' ";

		$sql = $sql . " ORDER BY $this->table.$sort_column $sort_direction LIMIT ?, ?";
		$query = $this->db->query($sql, array((int)$offset, (int)$num)); 
		if($query->num_rows() > 0)
			return $query->result_array();
	}

	function get_total($search_item, $search_text)
	{
		$sql = "SELECT COUNT(*) FROM $this->table ";

		if(!empty($search_item))
			if(!empty($search_text))
				$sql = $sql . " WHERE $this->table.$search_item LIKE '%$search_text%' ";

	    return $this->db->query($sql)->row('COUNT(*)');
	}
}

// EOF
