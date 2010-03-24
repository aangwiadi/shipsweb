  <h2><?php echo $country->Name; ?></h2>
  <div class="minimenu">
	  <ul>
		<li><?php echo anchor(site_url().'/country/edit/'.$country->Id, 'Edit'); ?></li>
		<li><?php echo anchor('/country/add/', 'New'); ?></li>
	  </ul>
  </div>
  <ul class="section">
    <li><span>Name:</span><?php echo $country->Name; ?></li>
  </ul>
  
