    <header>
      <h2>Countries</h2>
    </header>
	<div id="search">
		<?php $attributes = array('id' => 'searchform');
		echo form_open(site_url().'/countries/'); 
		echo form_label('Search by', 'search_text');
		echo form_dropdown('search_item', $fields, $this->session->userdata('countries_search_item'));
		echo form_input('search_text', $this->session->userdata('countries_search_text'));
		echo form_submit('submit', 'Search');
		echo form_submit('reset', 'Reset');
		echo form_close(); 
		?>
	</div>
    <?php echo $this->table->generate(); ?>
    <?php echo $this->pagination->create_links(); ?> 

