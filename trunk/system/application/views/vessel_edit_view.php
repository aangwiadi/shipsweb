<?php echo validation_errors(); ?>
<h2><?php echo $vessel['Name']; ?></h2>
<?php echo form_open(site_url()."/vessel/save/".$vessel['Id']); ?>
<div id="menu-button">
  <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
  <?php echo "\t" . anchor(site_url()."/vessel/index/".$vessel['Id'], "Cancel"); ?>
</div>
<ul class="section">
  <li><?php echo form_label('Name', 'Name') . form_input('Name', set_value('Name', $vessel['Name'])); ?></li>
  <li><?php echo form_label('IMONumber', 'IMONumber') . form_input('IMONumber', set_value('IMONumber', $vessel['IMONumber'])); ?></li>
  <li><?php echo form_label('Type', 'Type') . form_input('Type', set_value('Type', $vessel['Type'])); ?></li>
  <li><?php echo form_label('Dwat', 'Dwat') . form_input('Dwat', set_value('Dwat', $vessel['Dwat'])); ?></li>
  <li><?php echo form_label('Built', 'Built') . form_input('Built', set_value('Built', $vessel['Built'])); ?></li>
  <li><?php echo form_label('Gear', 'Gear') . form_input('Gear', set_value('Gear', $vessel['Gear'])); ?></li>
  <li><?php echo form_label('CallSign', 'CallSign') . form_input('CallSign', set_value('CallSign', $vessel['CallSign'])); ?></li>
  <li><?php echo form_label('LOA', 'LOA') . form_input('LOA', set_value('LOA', $vessel['LOA'])); ?></li>
  <li><?php echo form_label('Beam', 'Beam') . form_input('Beam', set_value('Beam', $vessel['Beam'])); ?></li>
  <li><?php echo form_label('Draft', 'Draft') . form_input('Draft', set_value('Draft', $vessel['Draft'])); ?></li>
  <li><?php echo form_label('Grain', 'Grain') . form_input('Grain', set_value('Grain', $vessel['Grain'])); ?></li>
  <li><?php echo form_label('Bale', 'Bale') . form_input('Bale', set_value('Bale', $vessel['Bale'])); ?></li>
  <li><?php echo form_label('HO', 'HO') . form_input('HO', set_value('HO', $vessel['HO'])); ?></li>
  <li><?php echo form_label('HO_dims', 'HO_dims') . form_input('HO_dims', set_value('HO_dims', $vessel['HO_dims'])); ?></li>
  <li><?php echo form_label('HA', 'HA') . form_input('HA', set_value('HA', $vessel['HA'])); ?></li>
  <li><?php echo form_label('HA_dims', 'HA_dims') . form_input('HA_dims', set_value('HA_dims', $vessel['HA_dims'])); ?></li>
  <li><?php echo form_label('CaptName', 'CaptName') . form_input('CaptName', set_value('CaptName', $vessel['CaptName'])); ?></li>
  <li><?php echo form_label('Crew', 'Crew') . form_input('Crew', set_value('Crew', $vessel['Crew'])); ?></li>
</ul>
<ul class="section">
  <li><?php echo form_label('BRT', 'BRT') . form_input('BRT', set_value('BRT', $vessel['BRT'])); ?></li>
  <li><?php echo form_label('NRT', 'NRT') . form_input('NRT', set_value('NRT', $vessel['NRT'])); ?></li>
  <li><?php echo form_label('BT', 'BT') . form_input('BT', set_value('BT', $vessel['BT'])); ?></li>
  <li><?php echo form_label('NT', 'NT') . form_input('NT', set_value('NT', $vessel['NT'])); ?></li>
  <li><?php echo form_label('Speed_ball', 'Speed_ball') . form_input('Speed_ball', set_value('Speed_ball', $vessel['Speed_ball'])); ?></li>
  <li><?php echo form_label('Speed_laden', 'Speed_laden') . form_input('Speed_laden', set_value('Speed_laden', $vessel['Speed_laden'])); ?></li>
  <li><?php echo form_label('IFO_sea_ball', 'IFO_sea_ball') . form_input('IFO_sea_ball', set_value('IFO_sea_ball', $vessel['IFO_sea_ball'])); ?></li>
  <li><?php echo form_label('IFO_sea_laden', 'IFO_sea_laden') . form_input('IFO_sea_laden', set_value('IFO_sea_laden', $vessel['IFO_sea_laden'])); ?></li>
  <li><?php echo form_label('MDO_sea_ball', 'MDO_sea_ball') . form_input('MDO_sea_ball', set_value('MDO_sea_ball', $vessel['MDO_sea_ball'])); ?></li>
  <li><?php echo form_label('MDO_sea_laden', 'MDO_sea_laden') . form_input('MDO_sea_laden', set_value('MDO_sea_laden', $vessel['MDO_sea_laden']));?></li>
  <li><?php echo form_label('MDO_port', 'MDO_port') . form_input('MDO_port', set_value('MDO_port', $vessel['MDO_port'])); ?></li>
  <li><?php echo form_label('IFO_port', 'IFO_port') . form_input('IFO_port', set_value('IFO_port', $vessel['IFO_port'])); ?></li>
  <li><?php echo form_label('Mobile', 'Mobile') . form_input('Mobile', set_value('Mobile', $vessel['Mobile'])); ?></li>
  <li><?php echo form_label('Class', 'Class') . form_input('Class', set_value('Class', $vessel['Class'])); ?></li>
  <li><?php echo form_label('Pandi', 'Pandi') . form_input('Pandi', set_value('Pandi', $vessel['Pandi'])); ?></li>
  <li><?php echo form_label('MMSI', 'MMSI') . form_input('MMSI',set_value('MMSI', $vessel['MMSI'])); ?></li>
  <li><?php echo form_label('Remarks', 'Remarks') . form_textarea(array('name' => 'Remarks', 'id' => 'Remarks', 'value' => $vessel['Remarks'], 'rows' => '2', 'cols' => '23')); ?></li>
  <li><?php echo form_label('Manager', 'Manager') . form_dropdown('Managers', $ddmanager, set_value('Managers', $vessel['ManagerId'], 'class="dd-list"')); ?></li>
  <li><?php echo form_label('Homeport', 'Cities') . form_dropdown('Cities', $ddcity, $vessel['CityId'], 'class="dd-list"'); ?></li>
</ul>
<?php form_close(); ?>
