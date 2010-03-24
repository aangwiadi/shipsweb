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
		<table id='quaynote'>
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
					<td>Manager</td><td><?php echo $vessel['ManagerName']; ?></td>
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
					<td>Gt</td><td><?php echo $vessel['BT']; ?></td>
					<td>Next port</td><td></td>
				</tr>
				<tr>
					<td>Beam</td><td><?php echo $vessel['Beam']; ?></td>
					<td>Nt</td><td><?php echo $vessel['NT']; ?></td>
					<td>Passage time</td><td></td>
				</tr>
				<tr>
					<td>Draft</td><td><?php echo $vessel['Draft']; ?></td>
					<td>Agent</td><td></td>
				</tr>
				<tr>
					<td>Shpr/recvrs</td><td></td>
				</tr>
				<tr>
					<td>Control firm</td><td></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>
