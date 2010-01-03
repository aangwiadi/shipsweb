  <h2><?php echo $city->Name; ?></h2>
  <p><?php echo anchor(site_url().'/city/edit/'.$city->Id, 'Edit').' | '.anchor('/city/add/', 'New') ?></p>
  <ul class="section">
    <li><span>Name:</span><?php echo $city->Name; ?></li>
    <li><span>Country:</span><?php echo $city->CountryName; ?></li>
  </ul>
  
