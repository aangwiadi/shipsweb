<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Controller 
{
	function Login()
	{
		parent::Controller();
	}

	function index()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(isset($is_logged_in) && $is_logged_in == true)
		{
			$this->iload_view('content', 'vessels_view.php');
			
		}
		$this->iload_view('content', 'login/login_view');
		$this->view->render();  

	}

	function validate()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate($this->input->post('username'), md5($this->input->post('password')));
		if($query)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			redirect('vessels');
		}
		else 
		{
			$this->index();
		}
	}
}
?>
