    <header>
	<h1>New</h1>
    </header> 
    <?php echo form_open(site_url()."/city/save/"); ?>
    <div id="menu-button">
      <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
      <?php echo "\t" . anchor(site_url()."/cities/index/", "Cancel"); ?>
    </div>
    <ul class="section-left">
      <li><?php echo form_label('Name', 'Name') . form_input('Name', ''); ?></li>
      <li><?php echo form_label('Country', 'Country') . form_dropdown('Countries', $ddcountry, ''); ?></li>
	</ul>
	<?php echo form_close(). "\n";  ?>