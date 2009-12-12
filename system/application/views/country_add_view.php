    <header>
	<h1>New</h1>
    </header> 
	<?php echo validation_errors(); ?>
    <?php echo form_open(site_url()."/country/save/"); ?>
    <div id="menu-button">
      <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
      <?php echo "\t" . anchor(site_url()."/countries/index/", "Cancel"); ?>
    </div>
    <ul class="section-left">
	  <li><?php echo form_label('Shortname', 'Shortname') . form_input('Shortname', ''); ?></li>
	  <li><?php echo form_label('Name', 'Name') . form_input('Name', ''); ?></li>
	</ul>
	<?php echo form_close();  ?>
