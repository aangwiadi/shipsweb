    <h2>Countries</h2>
	<div id="search">
		<?php $attributes = array('id' => 'searchform');
		echo form_open(site_url().'/countries/'); 
		echo form_label('Search by', 'search_text');
		echo form_dropdown('search_item', $fields, $this->session->userdata('countries_search_item'));
		echo form_input('search_text', $this->session->userdata('countries_search_text'));
		echo form_submit('submit', 'Search');
		echo form_submit('reset', 'Reset');
		?>
		<a id="help" href="#help_text">Help</a>
		<?php
		echo form_close(); 
		?>
	</div>
	<div id="countries_table">
    <table>
		<thead>
			<tr>
				<?php $base = site_url()."/countries/index/"; ?>
				<th><?php echo anchor($base.'Name/'.$sort_direction.'/'.$start_index, 'Name'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($countries as $country): ?><tr>
				<td><?php echo anchor(site_url().'/country/index/'.$country['Id'], $country['Name']); ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
    <?php echo $this->pagination->create_links(); ?> 
	</div>
