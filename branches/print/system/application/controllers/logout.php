<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends Controller 
{
	function Logout()
	{
		parent::Controller();
	}

	function index()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(isset($is_logged_in) && $is_logged_in)
		    $this->session->unset_userdata('is_logged_in');
		
		$this->load->view('login/login_view');
	}
}

// EOF
