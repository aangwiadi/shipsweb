    <header>
	<h1><?php echo $city->Name; ?></h1>
    </header> 
    <?php echo form_open(site_url()."/city/save/$city->Id"); ?>
    <div id="menu-button">
      <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
      <?php echo "\t" . anchor(site_url()."/city/index/$city->Id", "Cancel"); ?>
    </div>
    <ul class="section-left">
      <li><?php echo form_label('Name', 'Name') . form_input('Name', $city->Name); ?></li>
      <li><?php echo form_label('Countries', 'Countries') . form_dropdown('Countries', $ddcountry, $city->CountryId, 'class="dd-list"'); ?></li>
    </ul>
    <?php form_close(); ?>
