<?php echo validation_errors(); ?>
<h2>New</h2>
<?php echo form_open(site_url()."/vessel/save/"); ?>
<div id="menu-button">
  <?php echo "\t" . form_submit('save', 'Save')."\n"; ?>
  <?php echo "\t" . anchor(site_url()."/vessels/index/", "Cancel"); ?>
</div>
<ul class="section">
  <li><?php echo form_label('Name', 'Name') . form_input('Name', set_value('Name')); ?></li>
  <li><?php echo form_label('IMONumber', 'IMONumber') . form_input('IMONumber', set_value('IMONumber')); ?></li>
  <li><?php echo form_label('Type', 'Type') . form_input('Type', set_value('Type')); ?></li>
  <li><?php echo form_label('Dwat', 'Dwat') . form_input('Dwat', set_value('Dwat')); ?></li>
  <li><?php echo form_label('Built', 'Built') . form_input('Built', set_value('Built')); ?></li>
  <li><?php echo form_label('Gear', 'Gear') . form_input('Gear', set_value('Gear')); ?></li>
  <li><?php echo form_label('CallSign', 'CallSign') . form_input('CallSign', set_value('CallSign')); ?></li>
  <li><?php echo form_label('LOA', 'LOA') . form_input('LOA', set_value('LOA')); ?></li>
  <li><?php echo form_label('Beam', 'Beam') . form_input('Beam', set_value('Beam')); ?></li>
  <li><?php echo form_label('Draft', 'Draft') . form_input('Draft', set_value('Draft')); ?></li>
  <li><?php echo form_label('Grain', 'Grain') . form_input('Grain', set_value('Grain')); ?></li>
  <li><?php echo form_label('Bale', 'Bale') . form_input('Bale', set_value('Bale')); ?></li>
  <li><?php echo form_label('HO', 'HO') . form_input('HO', set_value('HO')); ?></li>
  <li><?php echo form_label('HO_dims', 'HO_dims') . form_input('HO_dims', set_value('HO_dims')); ?></li>
  <li><?php echo form_label('HA', 'HA') . form_input('HA', set_value('HA')); ?></li>
  <li><?php echo form_label('HA_dims', 'HA_dims') . form_input('HA_dims', set_value('HA_dims')); ?></li>
  <li><?php echo form_label('CaptName', 'CaptName') . form_input('CaptName', set_value('CaptName')); ?></li>
  <li><?php echo form_label('Crew', 'Crew') . form_input('Crew', set_value('Crew')); ?></li>
</ul>
<ul class="section">
  <li><?php echo form_label('BRT', 'BRT') . form_input('BRT', set_value('BRT')); ?></li>
  <li><?php echo form_label('NRT', 'NRT') . form_input('NRT', set_value('NRT')); ?></li>
  <li><?php echo form_label('BT', 'BT') . form_input('BT', set_value('BT')); ?></li>
  <li><?php echo form_label('NT', 'NT') . form_input('NT', set_value('NT')); ?></li>
  <li><?php echo form_label('Speed_ball', 'Speed_ball') . form_input('Speed_ball', set_value('Speed_ball')); ?></li>
  <li><?php echo form_label('Speed_laden', 'Speed_laden') . form_input('Speed_laden', set_value('Speed_laden')); ?></li>
  <li><?php echo form_label('IFO_sea_ball', 'IFO_sea_ball') . form_input('IFO_sea_ball', set_value('IFO_sea_ball')); ?></li>
  <li><?php echo form_label('IFO_sea_laden', 'IFO_sea_laden') . form_input('IFO_sea_laden', set_value('IFO_sea_laden')); ?></li>
  <li><?php echo form_label('MDO_sea_ball', 'MDO_sea_ball') . form_input('MDO_sea_ball', set_value('MDO_sea_ball')); ?></li>
  <li><?php echo form_label('MDO_sea_laden', 'MDO_sea_laden') . form_input('MDO_sea_laden', set_value('MDO_sea_laden'));?></li>
  <li><?php echo form_label('MDO_port', 'MDO_port') . form_input('MDO_port', set_value('MDO_port')); ?></li>
  <li><?php echo form_label('IFO_port', 'IFO_port') . form_input('IFO_port', set_value('IFO_port')); ?></li>
  <li><?php echo form_label('Mobile', 'Mobile') . form_input('Mobile', set_value('Mobile')); ?></li>
  <li><?php echo form_label('Class', 'Class') . form_input('Class', set_value('Class')); ?></li>
  <li><?php echo form_label('Pandi', 'Pandi') . form_input('Pandi', set_value('Pandi')); ?></li>
  <li><?php echo form_label('MMSI', 'MMSI') . form_input('MMSI', set_value('MMSI')); ?></li>
  <li><?php echo form_label('Remarks', 'Remarks') . form_textarea(array('name' => 'Remarks', 'id' => 'Remarks', 'value' => set_value('Remarks'), 'rows' => '2', 'cols' => '23')); ?></li>
  <li><?php echo form_label('Managers', 'Managers') . form_dropdown('Managers', $ddmanager, '', 'class="dd-list"'); ?></li>
  <li><?php echo form_label('Cities', 'Cities') . form_dropdown('Cities', $ddcity, '', 'class="dd-list"'); ?></li> 
</ul>
<?php echo form_close(); ?>

