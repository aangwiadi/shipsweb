	<header id="subheader">
		<h1>Vessels</h1>
	</header>
	<div id="search">
		<?php $attributes = array('id' => 'searchform');
		echo form_open(site_url().'/vessels/'); 
		echo form_label('Search by', 'searchtext');
		echo form_dropdown('searchitem', $fields, $this->session->userdata('searchitem'));
		echo form_input('searchtext', $this->session->userdata('searchtext'));
		echo form_submit('submit', 'Search');
		echo form_submit('reset', 'Reset');
		echo form_close(); 
		?>
	</div>
	<?php echo $this->table->generate(); ?>
	<?php echo $this->pagination->create_links(); ?> 

