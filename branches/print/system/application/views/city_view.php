  <h2><?php echo $city->Name; ?></h2>
  <div class="minimenu">
	  <ul>
		<li><?php echo anchor(site_url().'/city/edit/'.$city->Id, 'Edit'); ?></li>
		<li><?php echo anchor('/city/add/', 'New'); ?></li>
	  </ul>
  </div>
  <ul class="section">
    <li><span>Name:</span><?php echo $city->Name; ?></li>
    <li><span>Country:</span><?php echo $city->CountryName; ?></li>
  </ul>
  
