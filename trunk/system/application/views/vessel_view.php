  <header>
    <h1><?php echo $vessel->Name; ?></h1>
  </header> 
  <p><?php echo anchor(site_url().'/vessel/edit/'.$vessel->Id, 'Edit').' | '.anchor('', 'New') ?></p>
  <ul class="section-left">
    <li><span>Name:</span><?php echo $vessel->Name; ?></li>
    <li><span>IMONumber:</span><?php echo $vessel->IMONumber; ?></li>
    <li><span>Type:</span><?php echo $vessel->Type; ?></li>
    <li><span>Dwat:</span><?php echo $vessel->Dwat; ?></li>
    <li><span>Built:</span><?php echo $vessel->Built; ?></li>
    <li><span>Gear:</span><?php echo $vessel->Gear; ?></li>
    <li><span>CallSign:</span><?php echo $vessel->CallSign; ?></li>
    <li><span>LOA:</span><?php echo $vessel->LOA; ?></li>
    <li><span>Beam:</span><?php echo $vessel->Beam; ?></li>
    <li><span>Draft:</span><?php echo $vessel->Draft; ?></li>
    <li><span>Grain:</span><?php echo $vessel->Grain; ?></li>
    <li><span>Bale:</span><?php echo $vessel->Bale; ?></li>
    <li><span>HO:</span><?php echo $vessel->HO; ?></li>
    <li><span>HO_dims:</span><?php echo $vessel->HO_dims; ?></li>
    <li><span>HA:</span><?php echo $vessel->HA; ?></li>
    <li><span>HA_dims:</span><?php echo $vessel->HA_dims; ?></li>
    <li><span>CaptName:</span><?php echo $vessel->CaptName; ?></li>
    <li><span>Crew:</span><?php echo $vessel->Crew; ?></li>
  </ul>
  <ul class="section-right">
    <li><span>BRT:</span><?php echo $vessel->BRT; ?></li>
    <li><span>NRT:</span><?php echo $vessel->NRT; ?></li>
    <li><span>BT:</span><?php echo $vessel->BT; ?></li>
    <li><span>NT:</span><?php echo $vessel->NT; ?></li>
    <li><span>Speed_ball:</span><?php echo $vessel->Speed_ball; ?></li>
    <li><span>Speed_laden:</span><?php echo $vessel->Speed_laden; ?></li>
    <li><span>IFO_sea_ball:</span><?php echo $vessel->IFO_sea_ball; ?></li>
    <li><span>IFO_sea_laden:</span><?php echo $vessel->IFO_sea_laden; ?></li>    
    <li><span>MDO_sea_ball:</span><?php echo $vessel->MDO_sea_ball; ?></li>
    <li><span>MDO_port:</span><?php echo $vessel->MDO_port; ?></li>
    <li><span>IFO_port:</span><?php echo $vessel->IFO_port; ?></li>
    <li><span>Mobile:</span><?php echo $vessel->Mobile; ?></li>
    <li><span>Class:</span><?php echo $vessel->Class; ?></li>
    <li><span>Pandi:</span><?php echo $vessel->Pandi; ?></li>
    <li><span>Remarks:</span><?php echo $vessel->Remarks; ?></li>
    <li><span>ManagerName:</span><?php echo $vessel->ManagerName; ?></li>
    <li><span>HomePort:</span><?php echo $vessel->HomePort; ?></li>
    <li><span>Flag:</span><?php echo $vessel->Flag; ?></li>
  </ul>
  