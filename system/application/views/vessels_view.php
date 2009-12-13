	<header>
		<h2>Vessels</h2>
	</header>
	<div id="search">
		<?php $attributes = array('id' => 'searchform');
		echo form_open(site_url().'/vessels/'); 
		echo form_label('Search by', 'search_text');
		echo form_dropdown('search_item', $fields, $this->session->userdata('vessels_search_item'));
		echo form_input('search_text', $this->session->userdata('vessels_search_text'));
		echo form_submit('submit', 'Search');
		echo form_submit('reset', 'Reset');
		echo form_close(); 
		?>
	</div>
	<div id="vessels_table">
    <table>
		<thead>
			<tr>
				<?php $base = site_url()."/vessels/index/"; ?>
				<th><?php echo anchor($base.'Name/'.$sort_direction.'/'.$start_index, 'Name'); ?></th>
				<th><?php echo anchor($base.'Type/'.$sort_direction.'/'.$start_index, 'Type'); ?></th>
				<th><?php echo anchor($base.'Dwat/'.$sort_direction.'/'.$start_index, 'Dwat'); ?></th>
				<th><?php echo anchor($base.'Built/'.$sort_direction.'/'.$start_index, 'Built'); ?></th>
				<th><?php echo anchor($base.'LOA/'.$sort_direction.'/'.$start_index, 'LOA'); ?></th>
				<th><?php echo anchor($base.'Beam/'.$sort_direction.'/'.$start_index, 'Beam'); ?></th>
				<th><?php echo anchor($base.'Draft/'.$sort_direction.'/'.$start_index, 'Draft'); ?></th>
				<th><?php echo anchor($base.'Grain/'.$sort_direction.'/'.$start_index, 'Grain'); ?></th>
				<th><?php echo anchor($base.'Bale/'.$sort_direction.'/'.$start_index, 'Bale'); ?></th>
				<th><?php echo anchor($base.'HO/'.$sort_direction.'/'.$start_index, 'HO'); ?></th>
				<th><?php echo anchor($base.'HA/'.$sort_direction.'/'.$start_index, 'HA'); ?></th>
				<th><?php echo anchor($base.'BT/'.$sort_direction.'/'.$start_index, 'BT'); ?></th>
				<th><?php echo anchor($base.'NT/'.$sort_direction.'/'.$start_index, 'NT'); ?></th>
				<th>Mobile</th>
				<th>Manager</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($vessels as $vessel): ?><tr>
				<td><?php echo anchor(site_url().'/vessel/index/'.$vessel['Id'], $vessel['Name']); ?></td>
				<td><?php echo $vessel['Type']; ?></td><td><?php echo $vessel['Dwat']; ?></td><td><?php echo $vessel['Built']; ?></td>
				<td><?php echo $vessel['LOA']; ?></td><td><?php echo $vessel['Beam']; ?></td><td><?php echo $vessel['Draft']; ?></td>
				<td><?php echo $vessel['Grain']; ?></td><td><?php echo $vessel['Bale']; ?></td><td><?php echo $vessel['HO']; ?></td>
				<td><?php echo $vessel['HA']; ?></td><td><?php echo $vessel['BT']; ?></td><td><?php echo $vessel['NT']; ?></td>
				<td><?php echo $vessel['Mobile']; ?></td>
				<td><?php 
					if(isset($vessel['ManagerName']))
						echo anchor(site_url().'/manager/index/'.$vessel['ManagerId'], $vessel['ManagerName']);
					else
						echo '';
				?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
    </table>
	<?php echo $this->pagination->create_links(); ?> 
