<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php require_once($_SERVER['DOCUMENT_ROOT'].'/sharemycar/webapp/lib/title.php'); ?> Passenger Spots </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="/sharemycar/webapp/css/footer.css">
  </head>
  <body>
    <header>
      <?php require_once($_SERVER['DOCUMENT_ROOT'].'/sharemycar/webapp/lib/header_users.php'); ?>
    </header>
    <main>
      <h1 class="title">Spots</h1>
	  <div class="box">
	  <h2>Select day:</h2>
		<select>
			<option>Monday</option>
			<option>Tuesday</option>
			<option>Wednesday</option>
			<option>Thursday</option>
			<option>Friday</option>
			<option>Saturday</option>
		</select>
	  </div>
		<div id="map" class="map">
		</div>
			<script>
			  function initMap() {
				var uluru = {lat: -25.363, lng: 131.044};
				var map = new google.maps.Map(document.getElementById('map'), {
				  zoom: 4,
				  center: uluru
				});
				var marker = new google.maps.Marker({
				  position: uluru,
				  map: map
				});
			  }
			</script>
			<script async defer
			src="https://maps.googleapis.com/maps/api/sharemycar/webapp/js?key=AIzaSyB4PiTd6ZW7-qZIvMXGbZ0IBtAg82ylKgE&callback=initMap">
			</script>
    </main>
    <footer class="footer footer--darkblue">
      <?php require_once($_SERVER['DOCUMENT_ROOT'].'/sharemycar/webapp/lib/footer.php'); ?>
    </footer>
  </body>
</html>
