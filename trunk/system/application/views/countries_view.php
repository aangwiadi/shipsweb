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

