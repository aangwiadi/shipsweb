<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Countries extends Controller
{
	function countries()
	{
		parent::Controller();
		$this->load->model('Countries_model');
		$this->load->helper('url');
		is_logged_in();
		
		$this->output->enable_profiler(TRUE);
	}

	function index($sort_col = 'Name', $sort_direction = 'ASC', $start_index = 0)
	{
		$baseurl = base_url() . 'index.php/countries/index/';

		if($this->input->post('submit'))
		{
			$searchtext = $this->input->post('search_text');
			$this->session->set_userdata('countries_search_text', $searchtext);
			$searchitem = $this->input->post('search_item');
			$this->session->set_userdata('countries_search_item', $searchitem);
		}
	
		if($this->input->post('reset'))
		{
			$this->session->unset_userdata('countries_search_item');
			$this->session->unset_userdata('countries_search_text');
		}

		// pagination
		$this->load->library('pagination');
		$config['base_url'] = $baseurl.$sort_col.'/'.$sort_direction.'/';
		$config['uri_segment'] = 5;
		$config['total_rows'] = $this->Countries_model->get_total($this->session->userdata('countries_search_item'),
															   $this->session->userdata('countries_search_text'));
		$config['per_page'] = '25';
		$config['num_links'] = '10';
		$this->pagination->initialize($config);

		$data['fields'] = $this->Countries_model->get_tabel_def();

		$result = $this->Countries_model->get_page($config['per_page'], 
												  $start_index, 
												  $sort_col, 
												  $sort_direction,
												  $this->session->userdata('countries_search_item'),
									  			  $this->session->userdata('countries_search_text'));
		$data['countries'] = $result;

		$data['sort_direction'] = $sort_direction == 'ASC' ? 'DESC' : 'ASC';
		$data['start_index'] = $start_index;

		$this->template->write_view('content', 'countries_view', $data);
		$this->template->render();
	}
}

// EOF
