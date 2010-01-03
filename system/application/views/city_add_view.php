	<h1>New</h1>
	<?php echo validation_errors(); ?>
    <?php echo form_open(site_url()."/city/save/"); ?>
    <div id="menu-button">
      <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
      <?php echo "\t" . anchor(site_url()."/cities/index/", "Cancel"); ?>
    </div>
    <ul class="section">
      <li><?php echo form_label('Name', 'Name') . form_input('Name', set_value('Name')); ?></li>
      <li><?php echo form_label('Country', 'Country') . form_dropdown('Countries', $ddcountry, ''); ?></li>
	</ul>
	<?php echo form_close(). "\n";  ?>
