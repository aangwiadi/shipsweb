	<h2><?php 
	if(isset($vessel))
		echo $vessel['Name']; 
	else
	{
		echo "No vessel found";
		die();
	}
	?></h2>
	<div class="minimenu">
		<ul>
			<li><?php echo anchor('/vessel/edit/'.$vessel['Id'], 'Edit'); ?></li>
			<li><?php echo anchor('/vessel/delete/'.$vessel['Id'], 'Delete'); ?></li>
			<li><?php echo anchor('/vessel/add', 'New'); ?></li>
			<li><?php echo anchor('/vessel/print_quay_note/'.$vessel['Id'], 'Print', array('target' => '_blank')); ?></li>
		</ul>
	</div>
	<ul class="section">
		<li><span>Name:</span><?php echo $vessel['Name']; ?>&nbsp;</li>
		<li><span>IMONumber:</span><?php echo $vessel['IMONumber']; ?>&nbsp;</li>
		<li><span>Type:</span><?php echo $vessel['Type']; ?>&nbsp;</li>
		<li><span>Dwat:</span><?php echo $vessel['Dwat']; ?>&nbsp;</li>
		<li><span>Built:</span><?php echo $vessel['Built']; ?>&nbsp;</li>
		<li><span>Gear:</span><?php echo $vessel['Gear']; ?>&nbsp;</li>
		<li><span>CallSign:</span><?php echo $vessel['CallSign']; ?>&nbsp;</li>
		<li><span>MMSI:</span><?php echo $vessel['MMSI']; ?>&nbsp;</li>
		<li><span>LOA:</span><?php echo $vessel['LOA']; ?>&nbsp;</li>
		<li><span>Beam:</span><?php echo $vessel['Beam']; ?>&nbsp;</li>
		<li><span>Draft:</span><?php echo $vessel['Draft']; ?>&nbsp;</li>
		<li><span>Grain:</span><?php echo $vessel['Grain']; ?>&nbsp;</li>
		<li><span>Bale:</span><?php echo $vessel['Bale']; ?>&nbsp;</li>
		<li><span>HO:</span><?php echo $vessel['HO']; ?>&nbsp;</li>
		<li><span>HO_dims:</span><?php echo $vessel['HO_dims']; ?>&nbsp;</li>
		<li><span>HA:</span><?php echo $vessel['HA']; ?></li>
		<li><span>HA_dims:</span><?php echo $vessel['HA_dims']; ?>&nbsp;</li>
		<li><span>CaptName:</span><?php echo $vessel['CaptName']; ?>&nbsp;</li>
		<li><span>Crew:</span><?php echo $vessel['Crew']; ?>&nbsp;</li>
	  </ul>
	  <ul class="section">
		<li><span>BT:</span><?php echo $vessel['BT']; ?>&nbsp;</li>
		<li><span>NT:</span><?php echo $vessel['NT']; ?>&nbsp;</li>
		<li><span>Speed ballast:</span><?php echo $vessel['Speed_ball']; ?>&nbsp;</li>
		<li><span>Speed laden:</span><?php echo $vessel['Speed_laden']; ?>&nbsp;</li>
		<li><span>IFO sea ballast:</span><?php echo $vessel['IFO_sea_ball']; ?>&nbsp;</li>
		<li><span>IFO sea laden:</span><?php echo $vessel['IFO_sea_laden']; ?>&nbsp;</li>    
		<li><span>MDO sea ballast:</span><?php echo $vessel['MDO_sea_ball']; ?>&nbsp;</li>
		<li><span>MDO port:</span><?php echo $vessel['MDO_port']; ?>&nbsp;</li>
		<li><span>IFO port:</span><?php echo $vessel['IFO_port']; ?>&nbsp;</li>
		<li><span>Mobile:</span><?php echo $vessel['Mobile']; ?>&nbsp;</li>
		<li><span>Class:</span><?php echo $vessel['Class']; ?>&nbsp;</li>
		<li><span>Pandi:</span><?php echo $vessel['Pandi']; ?>&nbsp;</li>
		<li><span>Remarks:</span><?php echo $vessel['Remarks']; ?>&nbsp;</li>
		<li><span>Manager:</span><?php 
			if(strlen(trim($vessel['ManagerName'])) > 0) 
				echo anchor(site_url().'/manager/index/'.$vessel['ManagerId'], $vessel['ManagerName']); 
		?>&nbsp;</li>
		<li><span>Homeport:</span><?php echo $vessel['HomePort']; ?>&nbsp;</li>
		<li><span>Flag:</span><?php echo $vessel['Flag']; ?>&nbsp;</li>
	  </ul>

