<!DOCTYPE html>
<html lang="en">
<head>
   <title>Ships</title>
   <link href="<?php print base_url();?>css/baseline.reset.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php print base_url();?>css/ships.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php print base_url();?>js/fancybox/jquery.fancybox-1.2.6.css" media="screen" rel="stylesheet" type="text/css" />   
   <script type="text/javascript" src="<?php print base_url();?>js/jquery-1.3.2.min.js"></script> 
   <script type="text/javascript" src="<?php print base_url();?>js/fancybox/jquery.fancybox-1.2.6.js"></script> 
</head>
<body>
  <div id="page">
    <div id="header">
      <h1>Ships</h1>
    </div>
    <div id="main-menu">
      <ul>
		<li id="nav_vessels"><a href="<?php print site_url();?>/vessels">Home</a></li>
		<li id="nav_vessels"><a href="<?php print site_url();?>/vessels">Vessels</a></li>
		<li id="nav_managers"><a href="<?php print site_url();?>/managers">Managers</a></li>
		<li id="nav_cities"><a href="<?php print site_url();?>/cities">Cities</a></li>
		<li id="nav_countries"><a href="<?php print site_url();?>/countries">Countries</a></li>
		<li id="nav_logout"><a href="<?php print site_url();?>/logout">Logout</a></li>
      </ul>
    </div>
	<div id="main-content">
	<p class="error"><?php echo $this->session->flashdata('error');
		 ?></p>
	<?php echo $content ?>
	<br style="clear: both;">
    </div>
  </div>
</body>
</html>
