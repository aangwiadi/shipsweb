<h2>Vessels</h2>
<div id="search">
	<?php $attributes = array('id' => 'searchform');
	echo form_open(site_url().'/vessels/'); 
	echo form_label('Search by', 'search_text');
	echo form_dropdown('search_item', $fields, $this->session->userdata('vessels_search_item'));
	echo form_input('search_text', $this->session->userdata('vessels_search_text'));
	echo form_submit('submit', 'Search');
	echo form_submit('reset', 'Reset'); ?>
	<a id="lightbox" href="#lightbox_data">Help</a>
	<?php
	echo form_close(); 
	?>
</div>
<div id="lightbox_data">
	<div id="help_text">
		<p>You can search on all the fields in the drop down box. Some fields are numeric, e.g. in Vessels the fields Dwat, Draft or Beam are numeric. Others are texttual, e.g. Name</p>
		<p><strong>Examples of queries:</strong></p>
		<p>Numeric</p>
		<ul>
			<li>1000: Search items greater 1000</li>
			<li>1000 2000: Search items greater than 1000 but less than 2000</li>
			<li>0 1000: Search items less than 1000</li>
		</ul>
		<p>Textual</p>
		<ul>
			<li>a: Search items with the word "a" in the name</li>
			<li>ab: Search items with the word "ab" in the name</li>
			<li>anne: Search items with the word "ann" in the name</li>
		</ul>
	</div>
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
		$("div#lightbox_data").hide();
		$("a#lightbox").fancybox({ 'hideOnContentClick': true }); 
		$("a#lightbox").fancybox(
			{ 
				'zoomSpeedIn': 500, 
				'zoomSpeedOut': 300, 
				'overlayShow': true
			}); 
	}); 
</script>
