  <header>
    <h1><?php echo $manager->Name; ?></h1>
  </header> 
  <p><?php echo anchor(site_url().'/manager/edit/'.$manager->Id, 'Edit').' | '.anchor('/manager/add/', 'New') ?></p>
  <ul class="section-left">
    <li><span>Name:</span><?php echo $manager->Name; ?></li>
    <li><span>Adress:</span><?php echo $manager->Address; ?></li>
    <li><span>Postal Code:</span><?php echo $manager->PostalCode; ?></li>
    <li><span>Phone 1:</span><?php echo $manager->Phone1; ?></li>
    <li><span>Phone 2:</span><?php echo $manager->Phone2; ?></li>
    <li><span>Phone 3:</span><?php echo $manager->Phone3; ?></li>
    <li><span>Fax:</span><?php echo $manager->Fax; ?></li>
    <li><span>Email 1:</span><?php echo $manager->Email1; ?></li>
    <li><span>Email 2:</span><?php echo $manager->Email2; ?></li>
  </ul>
  <ul class="section-right">
    <li><span>Homepage:</span><?php echo $manager->Homepage; ?></li>
    <li><span>Mic 1:</span><?php echo $manager->Mic1; ?></li>
    <li><span>Mic 2:</span><?php echo $manager->Mic2; ?></li>
    <li><span>Mic 3:</span><?php echo $manager->Mic3; ?></li>
    <li><span>Mic 4:</span><?php echo $manager->Mic4; ?></li>
    <li><span>Remarks:</span><?php echo $manager->Remarks; ?></li>
    <li><span>City:</span><?php echo $manager->CityName; ?></li>
  </ul>
  <?php if(count($vessels) > 0) { ?>
    <table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Type</th>
			<th>Dwat</th>
			<th>Built</th>
			<th>LOA</th>
			<th>Beam</th>
			<th>Draft</th>
			<th>Grain</th>
			<th>Bale</th>
			<th>HO</th>
			<th>HA</th>
			<th>BT</th>
			<th>NT</th>
			<th>Mobile</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($vessels as $vessel): ?>
		<tr>
			<td><?php echo anchor(site_url().'/vessel/index/'.$vessel['Id'], $vessel['Name']); ?></td>
			<td><?php echo $vessel['Type']; ?></td>
			<td><?php echo $vessel['Dwat']; ?></td>
			<td><?php echo $vessel['Built']; ?></td>
			<td><?php echo $vessel['LOA']; ?></td>
			<td><?php echo $vessel['Beam']; ?></td>
			<td><?php echo $vessel['Draft']; ?></td>
			<td><?php echo $vessel['Grain']; ?></td>
			<td><?php echo $vessel['Bale']; ?></td>
			<td><?php echo $vessel['HO']; ?></td>
			<td><?php echo $vessel['HA']; ?></td>
			<td><?php echo $vessel['BT']; ?></td>
			<td><?php echo $vessel['Mobile']; ?></td>
		</tr>
		<?php endforeach ?>
	</tbody>
    </table>
  <?php } ?>
