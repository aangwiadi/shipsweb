<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Vessels extends Controller
{
	function Vessels()
	{
		parent::Controller();
		$this->load->model('Vessels_model');
		$this->load->library('table');
		$this->load->helper('html');
		$this->load->helper('url');
		is_logged_in();

		//$this->output->enable_profiler(TRUE);
	}

	function index($sort_col = 'Name', $sort_direction = 'ASC', $start_index = 0)
	{
		$baseurl = base_url() . 'index.php/vessels/index/';

		// config output: array(showname => array(dbname, showsortlink))
		$data['show_fields'] = array('Name' 	=> array('Name', TRUE), 
					 	'Type' 	=> array('Type', TRUE), 
						'Dwat' 	=> array('Dwat', TRUE), 
						'Built' 	=> array('Built', TRUE), 
						'LOA' 		=> array('LOA', TRUE), 
						'Beam' 	=> array('Beam', TRUE), 
						'Draft' 	=> array('Draft', TRUE), 
						'Grain' 	=> array('Grain', TRUE), 
					 	'Bale' 	=> array('Bale', TRUE), 
					 	'HO' 		=> array('HO', TRUE), 
						'HA' 		=> array('HA', TRUE), 
					 	'BT' 		=> array('BT', TRUE), 
					 	'NT' 		=> array('NT', TRUE), 
					 	'Mobile' 	=> array('Mobile', FALSE), 
					 	'Manager' 	=> array('Manager:Name', TRUE));

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
