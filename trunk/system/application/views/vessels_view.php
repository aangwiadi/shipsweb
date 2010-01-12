<h2>Vessels</h2>
<div id="search">
	<?php $attributes = array('id' => 'searchform');
	echo form_open(site_url().'/vessels/'); 
	echo form_label('Search by', 'search_text');
	echo form_dropdown('search_item', $fields, $this->session->userdata('vessels_search_item'));
	echo form_input('search_text', $this->session->userdata('vessels_search_text'));
	echo form_submit('submit', 'Search');
	echo form_submit('reset', 'Reset'); ?>
	<a id="help" href="#help_text">Help</a>
	<?php
	echo form_close(); 
	?>
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
<div id="help_text">
	<h1 class="help">Search</h1>
	<p>You can search on numerical and textual fields, they are shown in the dropdown. Choose what you want to search. Thereafter you enter the criteria for the search in the textbox. Then pres 'Search'. To delete the search and return to the default list, pres 'Reset'</p>
	<h2>Numerical</h2>
	<p>To search numerical ranges, e.g. Dwat, choose field in dropdown and enter the following in the textbox:</p>
	<ul>
		<li>Get items upto 1000: 0 1000</li>
		<li>Get items from 1000 to 2000: 1000 2000</li>
		<li>Get items from 1000: 1000</li>
	</ul>
	<h2>Textual</h2>
	<p>To search texttual fields, e.g. Name, choose field from dropdown and enter the following in the textbox:</p>
	<ul>
		<li>Get items containing 'a': a</li>
		<li>Get items containing 'an': an</li>
		<li>Get items containing 'ann': ann</li>
	</ul>
</div>
<script type="text/javascript">
	$(document).ready(function() 
	{ 
		/* This is basic - uses default settings */ 
		$("a#help").fancybox({ 'hideOnContentClick': true }); 
		$("a#help").fancybox({ 'zoomSpeedIn': 300, 'zoomSpeedOut': 300, 'overlayShow': true }); 
	}); 
</script>
