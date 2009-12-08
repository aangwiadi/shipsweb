    <header>
	<h1>New</h1>
    </header> 
    <?php echo form_open(site_url()."/vessel/save/"); ?>
    <div id="menu-button">
      <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
      <?php echo "\t" . anchor(site_url()."/vessels/index/", "Cancel"); ?>
    </div>
    <ul class="section-left">
      <li><?php echo form_label('Name', 'Name') . form_input('Name', ''); ?></li>
      <li><?php echo form_label('IMONumber', 'IMONumber') . form_input('IMONumber', ''); ?></li>
      <li><?php echo form_label('Type', 'Type') . form_input('Type', ''); ?></li>
      <li><?php echo form_label('Dwat', 'Dwat') . form_input('Dwat', ''); ?></li>
      <li><?php echo form_label('Built', 'Built') . form_input('Built', ''); ?></li>
      <li><?php echo form_label('Gear', 'Gear') . form_input('Gear', ''); ?></li>
      <li><?php echo form_label('CallSign', 'CallSign') . form_input('CallSign', ''); ?></li>
      <li><?php echo form_label('LOA', 'LOA') . form_input('LOA', ''); ?></li>
      <li><?php echo form_label('Beam', 'Beam') . form_input('Beam', ''); ?></li>
      <li><?php echo form_label('Draft', 'Draft') . form_input('Draft', ''); ?></li>
      <li><?php echo form_label('Grain', 'Grain') . form_input('Grain', ''); ?></li>
      <li><?php echo form_label('Bale', 'Bale') . form_input('Bale', ''); ?></li>
      <li><?php echo form_label('HO', 'HO') . form_input('HO', ''); ?></li>
      <li><?php echo form_label('HO_dims', 'HO_dims') . form_input('HO_dims', ''); ?></li>
      <li><?php echo form_label('HA', 'HA') . form_input('HA', ''); ?></li>
      <li><?php echo form_label('HA_dims', 'HA_dims') . form_input('HA_dims', ''); ?></li>
      <li><?php echo form_label('CaptName', 'CaptName') . form_input('CaptName', ''); ?></li>
      <li><?php echo form_label('Crew', 'Crew') . form_input('Crew', ''); ?></li>
    </ul>
    <ul class="section-right">
      <li><?php echo form_label('BRT', 'BRT') . form_input('BRT', ''); ?></li>
      <li><?php echo form_label('NRT', 'NRT') . form_input('NRT', ''); ?></li>
      <li><?php echo form_label('BT', 'BT') . form_input('BT', ''); ?></li>
      <li><?php echo form_label('NT', 'NT') . form_input('NT', ''); ?></li>
      <li><?php echo form_label('Speed_ball', 'Speed_ball') . form_input('Speed_ball', ''); ?></li>
      <li><?php echo form_label('Speed_laden', 'Speed_laden') . form_input('Speed_laden', ''); ?></li>
      <li><?php echo form_label('IFO_sea_ball', 'IFO_sea_ball') . form_input('IFO_sea_ball', ''); ?></li>
      <li><?php echo form_label('IFO_sea_laden', 'IFO_sea_laden') . form_input('IFO_sea_laden', ''); ?></li>
      <li><?php echo form_label('MDO_sea_ball', 'MDO_sea_ball') . form_input('MDO_sea_ball', ''); ?></li>
      <li><?php echo form_label('MDO_sea_laden', 'MDO_sea_laden') . form_input('MDO_sea_laden', '');?></li>
      <li><?php echo form_label('MDO_port', 'MDO_port') . form_input('MDO_port', ''); ?></li>
      <li><?php echo form_label('IFO_port', 'IFO_port') . form_input('IFO_port', ''); ?></li>
      <li><?php echo form_label('Mobile', 'Mobile') . form_input('Mobile', ''); ?></li>
      <li><?php echo form_label('Class', 'Class') . form_input('Class', ''); ?></li>
      <li><?php echo form_label('Pandi', 'Pandi') . form_input('Pandi', ''); ?></li>
      <li><?php echo form_label('Remarks', 'Remarks') . form_textarea(array('name' => 'Remarks', 'id' => 'Remarks', 'value' => '', 'rows' => '2', 'cols' => '23')); ?></li>
      <li><?php echo form_label('Managers', 'Managers') . form_dropdown('Managers', $ddmanager, '', 'class="dd-list"'); ?></li>
      <li><?php echo form_label('Cities', 'Cities') . form_dropdown('Cities', $ddcity, '', 'class="dd-list"'); ?></li> 
    </ul>
	<?php echo form_close(); ?>

