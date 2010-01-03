    <h2>Managers</h2>
	<div id="search">
		<?php $attributes = array('id' => 'searchform');
		echo form_open(site_url().'/managers/'); 
		echo form_label('Search by', 'search_text');
		echo form_dropdown('search_item', $fields, $this->session->userdata('managers_search_item'));
		echo form_input('search_text', $this->session->userdata('managers_search_text'));
		echo form_submit('submit', 'Search');
		echo form_submit('reset', 'Reset');
		echo form_close(); 
		?>
	</div>

	<div id="managers_table">
    <table>
		<colgroup>
			<col id="name">
			<col id="address">
			<col id="postal_code">
			<col id="phone">
			<col id="email">
			<col id="mic">
		</colgroup>
		<thead>
			<tr>
				<?php $base = site_url()."/managers/index/"; ?>
				<th><?php echo anchor($base.'Name/'.$sort_direction.'/'.$start_index, 'Name'); ?></th>
				<th>Address</th>
				<th>Postal Code</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Mic</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($managers as $manager): ?><tr>
				<td><?php echo anchor(site_url().'/manager/index/'.$manager['Id'], $manager['Name']); ?></td>
				<td><?php echo $manager['Address']; ?></td><td><?php echo $manager['PostalCode']; ?></td><td><?php echo $manager['Phone1']; ?></td>
				</td><td><?php echo $manager['Email1']; ?></td><td><?php echo $manager['Mic1']; ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
    <?php echo $this->pagination->create_links(); ?> 
