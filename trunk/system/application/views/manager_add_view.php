    <header>
	<h1>New</h1>
    </header> 
	<?php echo validation_errors(); ?>
    <?php echo form_open(site_url()."/manager/save/"); ?>
    <div id="menu-button">
      <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
      <?php echo "\t" . anchor(site_url()."/managers/index/", "Cancel"); ?>
    </div>
    <ul class="section">
      <li><?php echo form_label('Name', 'Name') . form_input('Name', set_value('Name')); ?></li>
      <li><?php echo form_label('Address', 'Address') . form_input('Address', set_value('Address')); ?></li>
      <li><?php echo form_label('PostalCode', 'PostalCode') . form_input('PostalCode', set_value('PostalCode')); ?></li>
      <li><?php echo form_label('Phone1', 'Phone1') . form_input('Phone1', set_value('Phone1')); ?></li>
      <li><?php echo form_label('Phone2', 'Phone2') . form_input('Phone2', set_value('Phone2')); ?></li>
      <li><?php echo form_label('Phone3', 'Phone3') . form_input('Phone3', set_value('Phone3')); ?></li>
      <li><?php echo form_label('Fax', 'Fax') . form_input('Fax', set_value('Fax')); ?></li>
      <li><?php echo form_label('Email1', 'Email1') . form_input('Email1', set_value('Email1')); ?></li>
      <li><?php echo form_label('Email2', 'Email2') . form_input('Email2', set_value('Email2')); ?></li>
    </ul>
    <ul class="section">
      <li><?php echo form_label('Homepage', 'Homepage') . form_input('Homepage', set_value('Homepage'));?></li>
      <li><?php echo form_label('Mic1', 'Mic1') . form_input('Mic1', set_value('Mic1')); ?></li>
      <li><?php echo form_label('Mic2', 'Mic2') . form_input('Mic2', set_value('Mic2')); ?></li>
      <li><?php echo form_label('Mic3', 'Mic3') . form_input('Mic3', set_value('Mic3')); ?></li>
      <li><?php echo form_label('Mic4', 'Mic4') . form_input('Mic4', set_value('Mic4')); ?></li>
      <li><?php echo form_label('Remarks', 'Remarks') . form_textarea(array('name' => 'Remarks', 'id' => 'Remarks', 'value' => set_value('Remarks'), 'rows' => '2', 'cols' => '23')); ?></li>
      <li><?php echo form_label('City', 'City') . form_dropdown('Cities', $ddcity, ''); ?></li>
		</ul>
<?php
  echo form_close(). "\n";  
?>
