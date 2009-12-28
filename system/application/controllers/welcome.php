<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}

	function index()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(isset($is_logged_in) && $is_logged_in == true)
		{
			redirect('vessels');
		}
		$this->load->view('login/login_view');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
