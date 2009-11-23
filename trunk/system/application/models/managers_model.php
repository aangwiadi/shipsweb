<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Managers_model extends Model
{
	protected $table = 'MANAGER';
	protected $col_str = 'Id, Name, Address, PostalCode, Phone1, Email1, Mic1, Remarks';

	function Managers_model()
	{
		parent::Model();
		$this->load->database();
	}

	function get_all()
	{
		$this->db->select($this->col_str);
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function get($id)
	{
		$query = $this->db->get_where($this->table, array('Id' => $id));
		if($query->num_rows() > 0)
		{
			return $query->row();
		}
	}

	function get_page($num, $offset, $sort_column, $sort_direction)
	{
		$this->db->select($this->col_str);
		$this->db->order_by($sort_column, $sort_direction);
		$query = $this->db->get($this->table, $num, $offset);
		if($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}

	function get_total()
	{
		return $this->db->count_all($this->table);
	}
}

?> 

