<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Controller 
{
	function Login()
	{
		parent::Controller();
	}

	function index($error = NULL)
	{
		echo $error;
		$data['login_error'] = $error;
		$this->session->unset_userdata('is_logged_in');
		$this->load->view('login/login_view', $data);
	}

	function validate()
	{
		// validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->check_user($username, $password))
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			
//			$referer = $this->input->post('referer');

//			if(isset($referer))
//				redirect($referer);
//			else
				redirect('vessels');
		}
		else 
		{
			$this->index('Invalid username or password');
		}
	}

	function check_user($username, $password)
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate($username, md5($password));
		if($query)
			return TRUE;
		else
			return FALSE;
	}
}
?>
