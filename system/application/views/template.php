<!DOCTYPE html>
<html lang="en">
<head>
   <title>Ships</title>
   <link href="<?php echo base_url();?>css/baseline.reset.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>css/ships.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>js/fancybox/jquery.fancybox-1.2.6.css" media="screen" rel="stylesheet" type="text/css" />   
   <script type="text/javascript" src="<?php print base_url();?>js/jquery-1.4.2.min.js"></script> 
   <script type="text/javascript" src="<?php print base_url();?>js/fancybox/jquery.fancybox-1.2.6.js"></script> 
</head>
<body>
  <div id="page">
    <div id="header">
      <h1>Ships</h1>
    </div>
    <div id="main-menu">
      <ul>
		<li id="nav_home"><a href="<?php print site_url();?>/vessels">Home</a></li>
		<li id="nav_vessels"><a href="<?php print site_url();?>/vessels">Vessels</a></li>
		<li id="nav_managers"><a href="<?php print site_url();?>/managers">Managers</a></li>
		<li id="nav_cities"><a href="<?php print site_url();?>/cities">Cities</a></li>
		<li id="nav_countries"><a href="<?php print site_url();?>/countries">Countries</a></li>
		<li id="nav_logout"><a href="<?php print site_url();?>/logout">Logout</a></li>
      </ul>
    </div>
	<div id="main-content">
		<?php 
		if(strlen($this->session->flashdata('error')))
		{
		?>
		<p class="error"><?php echo $this->session->flashdata('error');?></p>
		<?php } ?>
		<?php 
		if(strlen($this->session->flashdata('info')))
		{
		?>
		<p class="info"><?php echo $this->session->flashdata('info');
		?></p>
		<?php } ?>
		<?php echo $content ?>
		<br style="clear: both;">
		<div id="help_text">
			<h1 class="help">Search</h1>
			<p>You can search on numerical and textual fields, they are shown 
				in the dropdown. Choose what you want to search. Thereafter you 
				enter the criteria for the search in the textbox. Then press 
				'Search'. To delete the search and return to the default list, 
				pres 'Reset'</p>
			<h2>Numerical</h2>
			<p>To search numerical ranges, e.g. Dwat, choose field in dropdown 
				and enter the following in the textbox:</p>
			<table>
				<thead>
					<tr><td>Explanation</td><td>Enter</td></tr>
				</thead>
				<tbody>
					<tr><td>Get items upto 1000</td><td>0 1000</td></tr>
					<tr><td>Get items from 1000 to 2000</td><td>1000 2000</td></tr>	
					<tr><td>Get items from 1000</td><td>1000</td></tr>
				</tbody>
			</table>
			<h2>Textual</h2>
			<p>To search texttual fields, e.g. Name, choose field from dropdown 
				and enter the following in the textbox:</p>
			<table>
				<thead>
					<tr><td>Explanation</td><td>Enter</td></tr>
				</thead>
				<tbody>
					<tr><td>Get items containing 'a'</td><td>a</td></tr>
					<tr><td>Get items containing 'an'</td><td>an</td></tr>
					<tr><td>Get items containing 'ann'</td><td>ann</td></tr>
				</tbody>
			</table>
		</div>
		<script type="text/javascript">
			$(document).ready(function() 
			{ 
				/* This is basic - uses default settings */ 
				$("a#help").fancybox({ 'hideOnContentClick': true }); 
				$("a#help").fancybox({ 'zoomSpeedIn': 300, 'zoomSpeedOut': 300, 'overlayShow': true }); 
			}); 
		</script>
    </div>
  </div>
</body>
</html>
