<div id="login_form">
  <h1>Login</h1>
  
  <?php echo form_open('login/validate');?></label>
  <label class="width1 first">Username<?php echo form_input(array('name' => 'username',
									      'value' => '',
									      'class' => 'text',
									      'type' => 'text'));?></label>
  <label class="width1 first">Password<?php echo form_password(array('name' => 'password',
									  'value' => '',
									  'class' => 'text',
									  'type' => 'text'));?></label>
  <?php echo form_submit('submit', 'Login'); ?>
</div>
    