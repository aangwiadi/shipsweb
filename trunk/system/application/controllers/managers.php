<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Managers extends Controller
{
	function Managers()
	{
		parent::Controller();
		$this->load->model('Managers_model');
		$this->load->helper('url');
		is_logged_in();
		
		$this->output->enable_profiler(TRUE);
	}

	function index($sort_col = 'Name', $sort_direction = 'ASC', $start_index = 0)
	{
		$baseurl = base_url() . 'index.php/managers/index/';

		// config output: array(showname => array(dbname, showsortlink))
		$data['show_fields'] = array('Name' 	=> array('Name', true), 
									 'Address'	=> array('Address', false), 
									 'Postal Code' 	=> array('PostalCode', false), 
									 'Phone' 	=> array('Phone1', false), 
									 'Email' 		=> array('Email1', false), 
									 'Mic' 	=> array('Mic1', false), 
									 'Remarks' 	=> array('Remarks', false)); 

		if($this->input->post('submit'))
		{
			$searchtext = $this->input->post('search_text');
			$this->session->set_userdata('managers_search_text', $searchtext);
			$searchitem = $this->input->post('search_item');
			$this->session->set_userdata('managers_search_item', $searchitem);
		}
	
		if($this->input->post('reset'))
		{
			$this->session->unset_userdata('managers_search_item');
			$this->session->unset_userdata('managers_search_text');
		}

		// pagination
		$this->load->library('pagination');
		$config['base_url'] = $baseurl.$sort_col.'/'.$sort_direction.'/';
		$config['uri_segment'] = 5;
		$config['total_rows'] = $this->Managers_model->get_total($this->session->userdata('managers_search_item'),
																 $this->session->userdata('managers_search_text'));
		$config['per_page'] = '15';
		$config['num_links'] = '10';
		$this->pagination->initialize($config);

		$data['fields'] = $this->Managers_model->get_tabel_def();

		$result = $this->Managers_model->get_page($config['per_page'], 
												  $start_index, 
												  $sort_col, 
												  $sort_direction,
												  $this->session->userdata('managers_search_item'),
									  			  $this->session->userdata('managers_search_text'));

		$data['managers'] = $result;
		$data['sort_direction'] = $sort_direction == 'ASC' ? 'DESC' : 'ASC';
		$data['start_index'] = $start_index;

		$this->template->write_view('content', 'managers_view', $data);
		$this->template->render();
	}

	function manager($id)
	{
		$data['manager'] = $this->Managers_model->getManager($id);
		$this->template->write_view('content', 'manager_view');
		$this->template->render();
	}
}
?>
