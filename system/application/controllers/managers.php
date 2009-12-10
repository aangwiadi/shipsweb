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

	//	echo $this->session->userdata('manager_search_item');
	//	echo $this->session->userdata('manager_search_text');

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
		// table
		$this->load->library('table');
		$tmpl = array (
			'table_open' 	  	=> '<table>',
			'heading_row_start' => '<tr>',
			'heading_row_end'   => '</tr>',
			'heading_cell_start'=> '<th>',
			'heading_cell_end'  => '</th>',
			'row_start'         => '<tr id="roweven">',
			'row_end'           => '</tr>',
			'cell_start'        => '<td>',
			'cell_end'          => '</td>',
			'row_alt_start'     => '<tr id="rowodd">',
			'row_alt_end'       => '</tr>',
			'cell_alt_start'    => '<td>',
			'cell_alt_end'      => '</td>',
			'table_close'       => '</table>'
		);


		if(isset($result))
		  foreach ($result as $row) {
			  $this->table->add_row(anchor(base_url().'index.php/manager/index/'.$row['Id'], $row['Name']),
				  $row['Address'],
				  $row['PostalCode'],
				  $row['Phone1'],
				  $row['Email1'],
				  $row['Mic1'],
				  $row['Remarks']
			  );
		  }

		$this->table->set_template($tmpl);

		$sort_direction = $sort_direction == 'ASC' ? 'DESC' : 'ASC';

		$this->table->set_heading(
			anchor($baseurl.'Name/'.$sort_direction.'/'.$start_index, 'Name'), 
			'Address', 
			'Postal Code',
			'Phone',
			'Email',
			'Mic',
			'Remarks'
		);

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
