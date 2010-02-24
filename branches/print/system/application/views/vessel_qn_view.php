<!DOCTYPE html>
<html lang="en">
<head>
   <title>Ships</title>
   <link href="http://ships.hovmand.org/css/baseline.reset.css" media="screen" rel="stylesheet" type="text/css" />
   <link href="http://ships.hovmand.org/css/ships.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="print">
		<h2>Bandholm Havn</h2>
		<span class="header">Alfr. Hovmand - Havnepladsen 10 - 4941 Bandholm - +45 54763611</span>
		<table>
			<tbody>
				<tr>
					<td>Vessel no</td><td></td>
					<td>Arrived from</td><td></td>
				</tr>
				<tr>
					<td>M.v.</td><td><?php echo $vessel['Name']; ?></td>
					<td>Arrived roads</td><td></td>
				</tr>
				<tr>
					<td>Homeport</td><td><?php echo $vessel['HomePort']; ?></td>
					<td>Pilot onboard</td><td></td>
				</tr>
				<tr>
					<td>Flag</td><td><?php echo $vessel['Flag']; ?></td>
					<td>Berthed</td><td></td>
				</tr>
				<tr>
					<td>Call sign</td><td><?php echo $vessel['CallSign']; ?></td>
					<td>Arr.draft f/a</td><td></td>
				</tr>
				<tr>
					<td>Captain</td><td><?php echo $vessel['CaptName']; ?></td>
					<td>Bob d.o./lube</td><td></td>
				</tr>
				<tr>
					<td>Mobile phone</td><td><?php echo $vessel['Mobile']; ?></td>
					<td>F.Water</td><td></td>
				</tr>
				<tr>
					<td>Manager</td><td><?php echo $vessel['Manager']; ?></td>
					<td>Commence l/d</td><td></td>
				</tr>
				<tr>
					<td>Imo</td><td></td>
					<td>Built</td><td><?php echo $vessel['Built']; ?></td>
					<td>Completed l/d</td><td></td>
				</tr>
				<tr>
					<td>Dwat</td><td><?php echo $vessel['Dwat']; ?></td>
					<td>Built</td><td></td>
					<td>Completed l/d</td><td></td>
				</tr>
				<tr>
					<td>Loa</td><td><?php echo $vessel['LOA']; ?></td>
					<td>Gt</td><td><?php echo $vessel['GT']; ?></td>
					<td>Next port</td><td></td>
				</tr>
				<tr>
					<td>Beam</td><td><?php echo $vessel['Beam']; ?></td>
					<td>Nt</td><td><?php echo $vessel['NT']; ?></td>
					<td>Passage time</td><td></td>
				</tr>
				<tr>
					<td>Draft</td><td><?php echo $vessel['draft']; ?></td>
					<td>Agent</td><td></td>
				</tr>
				<tr>
					<td>Shpr/recvrs</td><td></td>
				</tr>
				<tr>
					<td>Control firm</td><td></td>
				</tr>
				<tr>
					<td>Loa</td><td><td><?php echo $vessel['LOA']; ?></td>
					<td>Gt</td><td><td><?php echo $vessel['GT']; ?></td>
					<td>Next port</td><td></td>
				</tr>
				<tr>
					<td>Loa</td><td><td><?php echo $vessel['LOA']; ?></td>
					<td>Gt</td><td><td><?php echo $vessel['GT']; ?></td>
					<td>Next port</td><td></td>
				</tr>
				<tr>
					<td>Loa</td><td><td><?php echo $vessel['LOA']; ?></td>
					<td>Gt</td><td><td><?php echo $vessel['GT']; ?></td>
					<td>Next port</td><td></td>
				</tr>
				<tr>
					<td>Loa</td><td><td><?php echo $vessel['LOA']; ?></td>
					<td>Gt</td><td><td><?php echo $vessel['GT']; ?></td>
					<td>Next port</td><td></td>
				</tr>

			</tbody>
		</table>
	</div>
</body>




	<h2><?php 
	if(isset($vessel))
		echo $vessel['Name']; 
	else
	{
		echo "No vessel found";
		die();
	}
	?></h2>
  <p><?php echo anchor(site_url().'/vessel/edit/'.$vessel['Id'], 'Edit').' | '.anchor('/vessel/delete/'.$vessel['Id'], 'Delete').' | '.anchor('/vessel/add', 'New') ?></p>
  <ul class="section">
    <li><span>Name:</span>&nbsp;</li>
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

