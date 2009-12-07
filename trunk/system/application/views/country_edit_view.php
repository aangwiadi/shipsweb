    <header>
	<h1><?php echo $country->Name; ?></h1>
    </header> 
    <?php echo form_open(site_url()."/country/save/$country->Id"); ?>
    <div id="menu-button">
      <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
      <?php echo "\t" . anchor(site_url()."/country/index/$country->Id", "Cancel"); ?>
    </div>
    <ul class="section-left">
      <li><?php echo form_label('Name', 'Name') . form_input('Name', $country->Name); ?></li>
    </ul>
    <?php form_close(); ?>
