  <h2><?php echo $country->Name; ?></h2>
  <p><?php echo anchor(site_url().'/country/edit/'.$country->Id, 'Edit').' | '.anchor('/country/add/', 'New') ?></p>
  <ul class="section">
    <li><span>Name:</span><?php echo $country->Name; ?></li>
  </ul>
  
