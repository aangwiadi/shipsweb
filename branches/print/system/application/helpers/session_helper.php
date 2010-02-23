<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function is_logged_in()
{
	$CI =& get_instance();
	$CI->load->library('session');

	$is_logged_in = $CI->session->userdata('is_logged_in');
	if(!isset($is_logged_in) || $is_logged_in != TRUE)
	{
		echo "You do not have permission to access this page " . anchor(site_url().'/login', 'Login');	
		die();
	}
}	

?>
