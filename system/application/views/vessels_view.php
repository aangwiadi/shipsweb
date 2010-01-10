<h2>Vessels</h2>
<div id="search">
	<?php $attributes = array('id' => 'searchform');
	echo form_open(site_url().'/vessels/'); 
	echo form_label('Search by', 'search_text');
	echo form_dropdown('search_item', $fields, $this->session->userdata('vessels_search_item'));
	echo form_input('search_text', $this->session->userdata('vessels_search_text'));
	echo form_submit('submit', 'Search');
	echo form_submit('reset', 'Reset'); ?>
	<a id="lightbox" href="#help_text">Help</a>
	<?php
	echo form_close(); 
	?>
</div>
<div id="help_text">
	<h3>Search help</h3>
	<p><strong>Search text: </strong>Enter text</p>
</div>
<div id="vessels_table">
	<table>
		<colgroup>
			<col id="name">
			<col id="type">
			<col id="dwat">
			<col id="built">
			<col id="loa">
			<col id="beam">
			<col id="draft">
			<col id="grain">
			<col id="bale">
			<col id="ho">
			<col id="ha">
			<col id="bt">
			<col id="nt">
			<col id="mobile">
			<col id="managername">
		</colgroup>
		<thead>
			<tr>
				<?php $base = site_url()."/vessels/index/"; ?>
				<?php foreach($show_fields as $show_field => $db_field): ?> 
				<th id="$show_field"><?php echo anchor($base."$db_field[0]/".$sort_direction.'/'.$start_index, "$show_field"); ?></th><?php endforeach ?>
			</tr>
		</thead>
		<tbody>
			<?php
				if(count($vessels) == 0)
					echo "<span class=\"error\">No vessels found</span>";
				else
					foreach($vessels as $vessel): ?>
			<tr>
				<td><?php echo anchor(site_url().'/vessel/index/'.$vessel['Id'], $vessel['Name']); ?></td><td><?php echo $vessel['Type']; ?></td><td><?php echo $vessel['Dwat']; ?></td><td><?php echo $vessel['Built']; ?></td><td><?php echo $vessel['LOA']; ?></td><td><?php echo $vessel['Beam']; ?></td><td><?php echo $vessel['Draft']; ?></td><td><?php echo $vessel['Grain']; ?></td><td><?php echo $vessel['Bale']; ?></td><td><?php echo $vessel['HO']; ?></td><td><?php echo $vessel['HA']; ?></td><td><?php echo $vessel['BT']; ?></td><td><?php echo $vessel['NT']; ?></td><td><?php echo $vessel['Mobile']; ?></td><td><?php if(isset($vessel['ManagerName'])) echo anchor(site_url().'/manager/index/'.$vessel['ManagerId'], $vessel['ManagerName']); else echo ''; ?></td>
			</tr>
			<?php endforeach ?>
		</tbody>
    </table>
<?php echo $this->pagination->create_links(); ?> 
<script type="text/javascript">
	$(document).ready(function() { 
		$("div#help_text").hide();
		$("a#lightbox").fancybox({ 'hideOnContentClick': true }); 
		$("a#lightbox").fancybox(
			{ 
				'zoomSpeedIn': 300, 
				'zoomSpeedOut': 300, 
				'overlayShow': true
			}); 
	}); 
</script>
