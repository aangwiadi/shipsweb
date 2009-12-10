  <header>
    <h1><?php echo $country->Name; ?></h1>
  </header> 
  <p><?php echo anchor(site_url().'/country/edit/'.$country->Id, 'Edit').' | '.anchor('/country/add/', 'New') ?></p>
  <ul class="section-left">
    <li><span>Name:</span><?php echo $country->Name; ?></li>
  </ul>
  
