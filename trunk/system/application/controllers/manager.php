<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Manager extends Controller
{
	function Manager()
	{
		parent::Controller();
		$this->load->model('Manager_model');
		$this->load->helper('url');
		is_logged_in();

		$this->output->enable_profiler(TRUE);
	}

	function index($id)
	{
		// pagination
		$data['manager'] = $this->Manager_model->get($id);

		$this->load->model('Vessels_model');
		$data['vessels'] = $this->Vessels_model->read_by_manager($id);

		$this->template->write_view('content', 'manager_view', $data);
		$this->template->render();
	}

	function add()
	{
	    $this->load->model('City_model');
	    $data['ddcity'] = $this->get_dd_list($this->City_model);
	    $this->template->write_view('content', 'manager_add_view', $data);
	    $this->template->render();
	}

	function edit($id)
	{
		$this->load->model('City_model');
		$result = $this->Manager_model->get($id);
		$data['manager'] = $result;
		$data['ddcity'] = $this->get_dd_list($this->City_model);
		$this->template->write_view('content', 'manager_edit_view', $data);
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
		$this->form_validation->set_rules('Name', 'Name', 'required');

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
			'Address' => $this->input->post('Address'),
			'PostalCode' => $this->input->post('PostalCode'),
			'Phone1' => $this->input->post('Phone1'),
			'Phone2' => $this->input->post('Phone2'),
			'Phone3' => $this->input->post('Phone3'),
			'Fax' => $this->input->post('Fax'),
			'Email1' => $this->input->post('Email1'),
			'Email2' => $this->input->post('Email2'),
			'Homepage' => $this->input->post('Homepage'),
			'Mic1' => $this->input->post('Mic1'),
			'Mic2' => $this->input->post('Mic2'),
			'Mic3' => $this->input->post('Mic3'),
			'Mic4' => $this->input->post('Mic4'),
			'Remarks' => $this->input->post('Remarks'),
			'CityId' => $this->input->post('Cities')
		);
		
		if($id == 0)
		{
		  $id = $this->Manager_model->create($data);
		  $this->index($id);
		  return;
		}

		if($this->Manager_model->update($id, $data))
		{
			$this->index($id);
			return;
		}

		echo "Error";
	}
}
?>
