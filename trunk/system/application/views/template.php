<!DOCTYPE html>
<html lang="en">
<head>
   <title>Ships</title>
   <link href="<?php echo base_url();?>css/baseline.reset.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>css/xbaseline.base.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>css/xbaseline.type.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>css/xbaseline.form.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>css/xbaseline.grid.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>css/ships.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="page">
    <header>
      <h1>Ships</h1>
    </header>
    <nav id="main-menu">
      <ul>
	<li><a href="<?php print site_url();?>/vessels">Home</a></li>
	<li><a href="<?php print site_url();?>/vessels">Vessels</a></li>
	<li><a href="<?php print site_url();?>/managers">Managers</a></li>
	<li><a href="<?php print site_url();?>/cities">Cities</a></li>
	<li><a href="<?php print site_url();?>/countries">Countries</a></li>
      </ul>
    </nav>
    <section id="main-content">
	<?php echo $content ?>
    </section>
  </div>
</body>
</html>
