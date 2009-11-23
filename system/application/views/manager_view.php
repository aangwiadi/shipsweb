  <header>
    <h1><?php echo $manager->Name; ?></h1>
  </header> 
  <p><?php echo anchor(site_url().'/manager/edit/'.$manager->Id, 'Edit').' | '.anchor('', 'New') ?></p>
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
    <li>City:</span><?php echo $manager->CityId; ?></li>
  </ul>
  
  $this->table->add_row('Name', $result->Name);
  $this->table->add_row('IMONumber', $result->IMONumber);
  $this->table->add_row('Type', $result->Type);
  $this->table->add_row('Dwat', $result->Dwat);
  $this->table->add_row('Built', $result->Built);
  $this->table->add_row('Gear', $result->Gear);
  $this->table->add_row('Call Sign', $result->CallSign);
  $this->table->add_row('LOA', $result->LOA);
  $this->table->add_row('Beam', $result->Beam);
  $this->table->add_row('Draft', $result->Draft);
  $this->table->add_row('Grain', $result->Grain);
  $this->table->add_row('Bale', $result->Bale);
  $this->table->add_row('HO', $result->HO);
  $this->table->add_row('HO Dimensions', $result->HO_dims);
  $this->table->add_row('HA', $result->HA);
  $this->table->add_row('HA Dimensions', $result->HA_dims);
  $this->table->add_row('Captains Name', $result->CaptName);
  $this->table->add_row('Crew', $result->Crew);
  $this->table->add_row('BRT', $result->BRT);
  $this->table->add_row('NRT', $result->NRT);
  $this->table->add_row('BT', $result->BT);
  $this->table->add_row('NT', $result->NT);
  $this->table->add_row('Speed (ballast)', $result->Speed_ball);
  $this->table->add_row('Speed (laden)', $result->Speed_laden);
  $this->table->add_row('IFO (sea ballast)', $result->IFO_sea_ball);
  $this->table->add_row('IFO (sea laden)', $result->IFO_sea_laden);
  $this->table->add_row('MDO (sea ballast)', $result->MDO_sea_ball);
  $this->table->add_row('MDO (sea laden)', $result->MDO_sea_laden);
  $this->table->add_row('MDO (port)', $result->MDO_port);
  $this->table->add_row('IFO (port)', $result->IFO_port);
  $this->table->add_row('Mobile', $result->Mobile);
  $this->table->add_row('Class', $result->Class);
  $this->table->add_row('PandI', $result->Pandi);
  $this->table->add_row('Remarks', $result->Remarks);
  $this->table->add_row('Manager', $result->ManagerName);
  $this->table->add_row('Home port', $result->HomePort);
  $this->table->add_row('Flag', $result->Flag);
  