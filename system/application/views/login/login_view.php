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
<div id="login_form">
  <h1>Login</h1>
  <?php echo form_open('login/validate');?>
  <div>
  <label>Username<?php echo form_input(array('name' => 'username',
										     'value' => '',
											 'class' => 'text',
											 'type' => 'text'));?></label>
  </div>
  <div>
  <label>Password<?php echo form_password(array('name' => 'password',
									  			'value' => '',
												'class' => 'text',
												'type' => 'text'));?></label>
  </div>
  <?php echo form_submit('submit', 'Login'); ?>
  <?php echo form_close(); ?>
</div>
</body>
</html>
