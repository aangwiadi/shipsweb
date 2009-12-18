<!DOCTYPE html>
<html lang="en">
<head>
   <title>Ships</title>
   <link href="<?php print base_url();?>css/baseline.reset.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="<?php print base_url();?>css/ships.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
  <div id="page">
    <header>
      <h1>Ships</h1>
    </header>
    <nav id="main-menu">
      <ul>
		<li id="nav_vessels"><a href="<?php print site_url();?>/vessels">Home</a></li>
		<li id="nav_vessels"><a href="<?php print site_url();?>/vessels">Vessels</a></li>
		<li id="nav_managers"><a href="<?php print site_url();?>/managers">Managers</a></li>
		<li id="nav_cities"><a href="<?php print site_url();?>/cities">Cities</a></li>
		<li id="nav_countries"><a href="<?php print site_url();?>/countries">Countries</a></li>
		<li id="nav_logout"><a href="<?php print site_url();?>/logout">Logout</a></li>
      </ul>
    </nav>
    <section id="main-content">
	<?php echo $content ?>
    </section>
  </div>
</body>
</html>
