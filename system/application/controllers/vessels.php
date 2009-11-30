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

		// get any posted search parameters
		// todo
		if($this->input->post('submit'))
		{
			$searchtext = $this->input->post('searchtext');

		    $searchitem = $this->input->post('searchitem');
		}

		if($this-input-post('reset'))
		{
			// unset search params
			//

		}

		// pagination
		$this->load->library('pagination');
		$config['base_url'] = $baseurl.$sort_col.'/'.$sort_direction.'/';
		$config['uri_segment'] = 5;
		$config['total_rows'] = $this->Vessels_model->get_total_vessels();
		$config['per_page'] = '25';
		$config['num_links'] = '5';
		$this->pagination->initialize($config);

		$data['fields'] = $this->Vessels_model->get_tabel_def();

		$result = $this->Vessels_model->get_vessels_page($config['per_page'], 
														 $start_index, 
														 $sort_col, 
														 $sort_direction);

		$tmpl = array (
			'table_open'        	=> '<table>',
			'heading_row_start'	=> '<tr>',
			'heading_row_end'   	=> '</tr>',
			'heading_cell_start'  	=> '<th>',
			'heading_cell_end'    	=> '</th>',
			'row_start'           	=> '<tr>',
			'row_end'             	=> '</tr>',
			'cell_start'          	=> '<td>',
			'cell_end'            	=> '</td>',
			'row_alt_start'       	=> '<tr>',
			'row_alt_end'         	=> '</tr>',
			'cell_alt_start'      	=> '<td>',
			'cell_alt_end'        	=> '</td>',
			'table_close'         	=> '</table>'
		);
		$this->table->set_template($tmpl);

		foreach ($result as $row) {
			$this->table->add_row(anchor(site_url().'/vessel/index/'.$row['Id'], $row['Name']),
				$row['Type'],
				$row['Dwat'],
				$row['Built'],
				$row['LOA'],
				$row['Beam'],
				$row['Draft'],
				$row['Grain'],
				$row['Bale'],
				$row['HO'],
				$row['HA'],
				$row['BT'],
				$row['NT'],
				$row['Mobile'],
				anchor(site_url().'/manager/index/'.$row['ManagerId'], $row['ManagerName'])
			);
		}

		$sort_direction = $sort_direction == 'ASC' ? 'DESC' : 'ASC';

		$this->table->set_heading(
			anchor($baseurl.'Name/'.$sort_direction.'/'.$start_index, 'Name'), 
			anchor($baseurl.'Type/'.$sort_direction.'/'.$start_index, 'Type'), 
			anchor($baseurl.'Dwat/'.$sort_direction.'/'.$start_index, 'Dwat'),
			anchor($baseurl.'Built/'.$sort_direction.'/'.$start_index, 'Built'),
			anchor($baseurl.'LOA/'.$sort_direction.'/'.$start_index, 'LOA'),
			anchor($baseurl.'Beam/'.$sort_direction.'/'.$start_index, 'Beam'),
			anchor($baseurl.'Draft/'.$sort_direction.'/'.$start_index, 'Draft'),
			anchor($baseurl.'Grain/'.$sort_direction.'/'.$start_index, 'Grain'),
			anchor($baseurl.'Bale/'.$sort_direction.'/'.$start_index, 'Bale'),
			anchor($baseurl.'HO/'.$sort_direction.'/'.$start_index, 'HO'),
			anchor($baseurl.'HA/'.$sort_direction.'/'.$start_index, 'HA'),
			anchor($baseurl.'BT/'.$sort_direction.'/'.$start_index, 'BT'),
			anchor($baseurl.'NT/'.$sort_direction.'/'.$start_index, 'NT'),
			'Mobile',
			'Manager'
		);

		$this->template->write_view('content', 'vessels_view', $data);
		$this->template->render();
	}

}
?>
