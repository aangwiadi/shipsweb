<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class City extends Controller
{
	function City()
	{
		parent::Controller();
		$this->load->model('City_model');
		$this->load->library('table');
		$this->load->library('form_validation');
		
		is_logged_in();

		$this->output->enable_profiler(TRUE); 
	}

	function index($id)
	{
		$result = $this->City_model->get($id);
		$data['city'] = $result;
		$this->template->write_view('content', 'city_view', $data);
		$this->template->render();
	}

	function edit($id)
	{
		$result = $this->City_model->get($id);
		$data['city'] = $result;
	
		$this->load->model('Country_model');
		$data['ddcountry'] = $this->get_dd_list($this->Country_model);
		$this->template->write_view('content', 'city_edit_view', $data);
		$this->template->render();
	}

	function add()
	{
	    $this->load->model('Country_model');
	    $data['ddcountry'] = $this->get_dd_list($this->Country_model);
	    $this->template->write_view('content', 'city_add_view', $data);
	    $this->template->render();
	}

	// refactor put in helper??
	function get_dd_list($model)
	{
		$data['0'] = 'Choose ...';
		$result = $model->get_all_ordered();
		foreach($result as $item)
		{
			$data[$item['Id']] = $item['Name'];
		}
		return $data;
	}

	function save($id = 0)
	{
		$this->form_validation->set_rules('Name', 'Name', 'required|alpha');

		if ($this->form_validation->run() == FALSE)
		{
			if($id == 0)
				return $this->add();
			else
				return $this->edit($id);

			echo "Error";
		}

		$data = array(
			'Name' => $this->input->post('Name'),
			'CountryId' => $this->input->post('Countries')
		);

		if($id == 0)
		{
			$id = $this->City_model->create($data);
			$this->index($id);
			return;
		}

		if($this->City_model->update($id, $data))
		{
			$this->index($id);
			return;
		}

		echo "Error";
	}
}
?>