<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Controller {

  function Welcome()
  {
    parent::Controller();	
  }
	
  function index()
  {
    $this->template->write_view('content', 'login/login_view');
    $this->template->render();
  }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
