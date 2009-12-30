    <header>
	<h1><?php echo $manager->Name; ?></h1>
    </header> 
	<?php echo validation_errors(); ?>
	<?php echo form_open(site_url()."/manager/save/$manager->Id"); ?>
    <div id="menu-button">
      <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
      <?php echo "\t" . anchor(site_url()."/manager/index/$manager->Id", "Cancel"); ?>
    </div>
    <ul class="section">
      <li><?php echo form_label('Name', 'Name') . form_input('Name', $manager->Name); ?></li>
      <li><?php echo form_label('Address', 'Address') . form_input('Address', $manager->Address); ?></li>
      <li><?php echo form_label('PostalCode', 'PostalCode') . form_input('PostalCode', $manager->PostalCode); ?></li>
      <li><?php echo form_label('Phone1', 'Phone1') . form_input('Phone1', $manager->Phone1); ?></li>
      <li><?php echo form_label('Phone2', 'Phone2') . form_input('Phone2', $manager->Phone2); ?></li>
      <li><?php echo form_label('Phone3', 'Phone3') . form_input('Phone3', $manager->Phone3); ?></li>
      <li><?php echo form_label('Fax', 'Fax') . form_input('Fax', $manager->Fax); ?></li>
      <li><?php echo form_label('Email1', 'Email1') . form_input('Email1', $manager->Email1); ?></li>
      <li><?php echo form_label('Email2', 'Email2') . form_input('Email2', $manager->Email2); ?></li>
    </ul>
    <ul class="section">
      <li><?php echo form_label('Homepage', 'Homepage') . form_input('Homepage', $manager->Homepage);?></li>
      <li><?php echo form_label('Mic1', 'Mic1') . form_input('Mic1', $manager->Mic1); ?></li>
      <li><?php echo form_label('Mic2', 'Mic2') . form_input('Mic2', $manager->Mic2); ?></li>
      <li><?php echo form_label('Mic3', 'Mic3') . form_input('Mic3', $manager->Mic3); ?></li>
      <li><?php echo form_label('Mic4', 'Mic4') . form_input('Mic4', $manager->Mic4); ?></li>
      <li><?php echo form_label('Remarks', 'Remarks') . form_textarea(array('name' => 'Remarks', 'id' => 'Remarks', 'value' => $manager->Remarks, 'rows' => '2', 'cols' => '23')); ?></li>
      <li><?php echo form_label('City', 'City') . form_dropdown('Cities', $ddcity, $manager->CityId); ?></li>
    </ul>
<?php
  echo form_close(). "\n";  
?>
