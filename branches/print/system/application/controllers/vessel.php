<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Vessel extends Controller
{
	function Vessel()
	{
		parent::Controller();
		$this->load->model('Vessel_model');
		$this->load->model('Manager_model');
		$this->load->model('City_model');
		$this->load->model('Country_model');
		$this->load->library('table');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->helper(array('form', 'url'));

		is_logged_in();

		//$this->output->enable_profiler(TRUE); 
	}

	function index($id)
	{
		$result = $this->Vessel_model->read($id);

		if(count($result) == 0)
		{
			$this->session->set_flashdata('error', 'No vessel found');
			redirect('');
		}

		$vessel = array();

		foreach($result as $key => $value)
			if(strlen($value) > 0)
				$vessel[$key] = $value;
			else
				$vessel[$key] = '';

		$data['vessel'] = $vessel;
		$this->template->write_view('content', 'vessel_view', $data);
		$this->template->render();
	}

	function add()
	{
		$this->load->model('City_model');
		$this->load->model('Manager_model');
		$data['ddcity'] = $this->get_dd_list($this->City_model);
		$data['ddcountry'] = $this->get_dd_list($this->Country_model);
		$data['ddmanager'] = $this->get_dd_list($this->Manager_model);
		$this->template->write_view('content', 'vessel_add_view', $data);
		$this->template->render();
	}

	function delete($id)
	{
		if($this->Vessel_model->delete($id))
		{
			$this->session->set_flashdata('info', 'Vessel deleted');
			redirect('/vessels');
		}
	}

	function edit($id)
	{
		$this->load->model('City_model');
		$this->load->model('Manager_model');
		$result = $this->Vessel_model->read($id);
		$data['vessel'] = $result;
		$data['ddcity'] = $this->get_dd_list($this->City_model);
		$data['ddcountry'] = $this->get_dd_list($this->Country_model);
		$data['ddmanager'] = $this->get_dd_list($this->Manager_model);
		$this->template->write_view('content', 'vessel_edit_view', $data);
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

	function save($id = 0)
	{
		// form validation 
		$this->form_validation->set_rules('Name', 'Name', 'required');
		$this->form_validation->set_rules('IMONumber', 'IMONumber', 'numeric');
		$this->form_validation->set_rules('Dwat', 'Dwat', 'required|numeric');
		$this->form_validation->set_rules('Built', 'Built', 'numeric');
		$this->form_validation->set_rules('LOA', 'LOA', 'numeric');
		$this->form_validation->set_rules('Beam', 'Beam', 'numeric');
		$this->form_validation->set_rules('Draft', 'Draft', 'numeric');
		$this->form_validation->set_rules('Grain', 'Grain', 'numeric');
		$this->form_validation->set_rules('Bale', 'Bale', 'numeric');
		$this->form_validation->set_rules('HO', 'HO', 'numeric');
		$this->form_validation->set_rules('HO_dims', 'HO_dims', 'alpha_numeric');
		$this->form_validation->set_rules('HA', 'HA', 'numeric');
		$this->form_validation->set_rules('HA_dims', 'HA_dims', 'alpha_numeric');
		$this->form_validation->set_rules('Crew', 'Crew', 'numeric');
		$this->form_validation->set_rules('BRT', 'BRT', 'numeric');
		$this->form_validation->set_rules('NRT', 'NRT', 'numeric');
		$this->form_validation->set_rules('BT', 'BT', 'numeric');
		$this->form_validation->set_rules('NT', 'NT', 'numeric');
		$this->form_validation->set_rules('Speed_ball', 'Speed_ball', 'numeric');
		$this->form_validation->set_rules('Speed_laden', 'Speed_laden', 'numeric');
		$this->form_validation->set_rules('IFO_sea_ball', 'IFO_sea_ball', 'numeric');
		$this->form_validation->set_rules('IFO_sea_laden', 'IFO_sea_laden', 'numeric');
		$this->form_validation->set_rules('MDO_sea_ball', 'MDO_sea_ball', 'numeric');
		$this->form_validation->set_rules('MDO_sea_laden', 'MODO_sea_laden', 'numeric');
		$this->form_validation->set_rules('MDO_port', 'MDO_port', 'numeric');
		$this->form_validation->set_rules('IFO_port', 'IFO_port', 'numeric');
		
		if ($this->form_validation->run() === FALSE)
		{
		  if($id == 0)
		    $this->add();
		  else
		    $this->edit($id);
		  
		  return;
		}

		$data = array(
			'Name' => $this->input->post('Name'),
			'IMONumber' => $this->input->post('IMONumber'),
			'Type' => $this->input->post('Type'),
			'Dwat' => $this->input->post('Dwat'),
			'Built' => $this->input->post('Built'),
			'Gear' => $this->input->post('Gear'),
			'CallSign' => $this->input->post('CallSign'),
			'LOA' => $this->input->post('LOA'),
			'Beam' => $this->input->post('Beam'),
			'Draft' => $this->input->post('Draft'),
			'Grain' => $this->input->post('Grain'),
			'Bale' => $this->input->post('Bale'),
			'HO' => $this->input->post('HO'),
			'HO_dims' => $this->input->post('HO_dims'),
			'HA' => $this->input->post('HA'),
			'HA_dims' => $this->input->post('HA_dims'),
			'CaptName' => $this->input->post('CaptName'),
			'Crew' => $this->input->post('Crew'),
			'BRT' => $this->input->post('BRT'),
			'NRT' => $this->input->post('NRT'),
			'BT' => $this->input->post('BT'),
			'NT' => $this->input->post('NT'),
			'Speed_ball' => $this->input->post('Speed_ball'),
			'Speed_laden' => $this->input->post('Speed_laden'),
			'IFO_sea_ball' => $this->input->post('IFO_sea_ball'),
			'IFO_sea_laden' => $this->input->post('IFO_sea_laden'),
			'MDO_sea_ball' => $this->input->post('MDO_sea_ball'),
			'MDO_sea_laden' => $this->input->post('MDO_sea_laden'),
			'MDO_port' => $this->input->post('MDO_port'),
			'IFO_port' => $this->input->post('IFO_port'),
			'Mobile' => $this->input->post('Mobile'),
			'Class' => $this->input->post('Class'),
			'Pandi' => $this->input->post('Pandi'),
			'MMSI' => $this->input->post('MMSI'),	
			'Remarks' => $this->input->post('Remarks'),
			'ManagerId' => $this->input->post('Managers'),
			'CityId' => $this->input->post('Cities'),
			'CountryId' => $this->input->post('Countries') 
		);

		if($id == 0)
		{
			$id = $this->Vessel_model->create($data);
			
			if($id > 0)
			{
				$this->session->set_flashdata('info', 'Vessel saved');
				redirect('/vessel/index/'.$id);
			}
			else
			{
				$this->session->set_flashdata('error', 'Error saving vessel');
				redirect(site_url().'/vessels/');
			}
			
			return;
		}

		if($this->Vessel_model->update($id, $data))
		{
			$this->index($id);
			$this->session->set_flashdata('info', 'Vessel saved');
			redirect('/vessel/index/'.$id);
		}

		$this->session->set_flashdata('error', 'Error saving, please report');
		redirect(site_url().'/vessels/');
	}
}

// EOF
