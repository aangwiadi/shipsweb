<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Vessels extends Controller
{
	function Vessels()
	{
		parent::Controller();
		$this->load->model('Vessels_model');
		$this->load->library('table');
		$this->load->helper('url');
		is_logged_in();

		$this->output->enable_profiler(TRUE);
	}

	function index($sort_col = 'Name', $sort_direction = 'ASC', $start_index = 0)
	{
		$baseurl = base_url() . 'index.php/vessels/index/';

		// config output: array(showname => array(dbname, showsortlink))
		$data['show_fields'] = array('Name' 	=> array('Id', true), 
									 'Type' 	=> array('Type', true), 
									 'Dwat' 	=> array('Dwat', true), 
									 'Built' 	=> array('Built', true), 
									 'LOA' 		=> array('LOA', true), 
									 'Beam' 	=> array('Beam', true), 
									 'Draft' 	=> array('Draft', true), 
									 'Grain' 	=> array('Grain', true), 
									 'Bale' 	=> array('Bale', true), 
									 'HO' 		=> array('HO', true), 
									 'HA' 		=> array('HA', true), 
									 'BT' 		=> array('BT', true), 
									 'NT' 		=> array('NT', true), 
									 'Mobile' 	=> array('Mobile', false), 
									 'Manager' 	=> array('Manager:Name', true));

		if($this->input->post('submit'))
		{
			$searchtext = $this->input->post('search_text');
			$this->session->set_userdata('vessels_search_text', $searchtext);
			$searchitem = $this->input->post('search_item');
			$this->session->set_userdata('vessels_search_item', $searchitem);
		}

		if($this->input->post('reset'))
		{
			$this->session->unset_userdata('vessels_search_item');
			$this->session->unset_userdata('vessels_search_text');
		}

		// pagination
		$this->load->library('pagination');
		$config['base_url'] = $baseurl.$sort_col.'/'.$sort_direction.'/';
		$config['uri_segment'] = 5;
		$config['total_rows'] = $this->Vessels_model->read_total_num($this->session->userdata('vessels_search_item'), 
																		$this->session->userdata('vessels_search_text'));
		$config['per_page'] = '25';
		$config['num_links'] = '5';
		$this->pagination->initialize($config);

		$data['fields'] = $this->Vessels_model->get_tabel_def();

		$result = $this->Vessels_model->read_page($config['per_page'], 
								 $start_index, 
								 $sort_col, 
								 $sort_direction,
								 $this->session->userdata('vessels_search_item'),
								 $this->session->userdata('vessels_search_text'));
		$data['vessels'] = $result;

		$sort_direction = $sort_direction == 'ASC' ? 'DESC' : 'ASC';
		$data['sort_direction'] = $sort_direction;
		$data['start_index'] = $start_index;

		$this->template->write_view('content', 'vessels_view', $data);
		$this->template->render();
	}
}

// EOF
