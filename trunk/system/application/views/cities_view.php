    <header>
      <h2>Cities</h2>
    </header>
	<div id="search">
		<?php $attributes = array('id' => 'searchform');
		echo form_open(site_url().'/cities/'); 
		echo form_label('Search by', 'search_text');
		echo form_dropdown('search_item', $fields, $this->session->userdata('cities_search_item'));
		echo form_input('search_text', $this->session->userdata('cities_search_text'));
		echo form_submit('submit', 'Search');
		echo form_submit('reset', 'Reset');
		echo form_close(); 
		?>
	</div>
	<div id="cities_table">
    <table>
		<thead>
			<tr>
				<?php $base = site_url()."/cities/index/"; ?>
				<th><?php echo anchor($base.'Name/'.$sort_direction.'/'.$start_index, 'Name'); ?></th>
				<th>Country</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($cities as $city): ?><tr>
				<td><?php echo anchor(site_url().'/city/index/'.$city['Id'], $city['Name']); ?></td>
				<th><?php echo anchor(site_url().'/country/index/'.$city['CountryId'], $city['CountryName']); ?></th>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
    <?php echo $this->pagination->create_links(); ?> 
