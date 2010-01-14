<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Country extends Controller
{
	function Country()
	{
		parent::Controller();
		$this->load->model('country_model');
		$this->load->library('table');
		is_logged_in();

		// $this->output->enable_profiler(TRUE); 
	}

	function index($id)
	{
		$result = $this->country_model->get($id);
		$data['country'] = $result;
		$this->template->write_view('content', 'country_view', $data);
		$this->template->render();
	}

	function edit($id)
	{
		$result = $this->country_model->get($id);
		$data['country'] = $result;
	
		$this->load->model('Country_model');
		$data['ddcountry'] = $this->get_dd_list($this->Country_model);
		$this->template->write_view('content', 'country_edit_view', $data);
		$this->template->render();
	}

	// refactor put in helper??
	function get_dd_list($model)
	{
		$data['0'] = 'Choose ...';
		$result = $model->get_all_ordered();
		foreach($result as $item)
			$data[$item['Id']] = $item['Name'];
		
		return $data;
	}

	function add()
	{
	    $this->template->write_view('content', 'country_add_view');
	    $this->template->render();
	}

	function save($id = 0)
	{
		$this->form_validation->set_rules('Name', 'Name', 'required|alpha');

		if ($this->form_validation->run() === FALSE)
		{
			if($id == 0)
				return $this->add();
			else
				return $this->edit($id);
		}

		$data = array('Name' => $this->input->post('Name'));

		if($id == 0)
		{
			$id = $this->country_model->create($data);

			if($id > 0)
			{
				$this->session->set_flashdata('info', 'Country saved');
				$this->index($id);
			}
			else
			{
				$this->session->set_flashdata('error', 'Error saving country');
				redirect(site_url().'/countries');
			}
		}

		if($this->country_model->update($id, $data))
		{
			$this->session->set_flashdata('info', 'Country saved');
			$this->index($id);
		}
		else
		{
			$this->session->set_flashdata('error', 'Error saving country');
		}

		return;
	}
}

// EOF
