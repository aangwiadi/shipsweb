<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Membership_model extends Model
{
	function Membership_model()
	{
		parent::Model();
	}

	function validate($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('MEMBERSHIP');

		if($query->num_rows == 1)
		{
			return TRUE;
		}
	}
}

// EOF
