var map;
var spots;



function init() 
{
  	var home = new google.maps.LatLng(sessionStorage.userLocationLat, sessionStorage.userLocationLon);
  	var university = new google.maps.LatLng(sessionStorage.userUniversityLat, sessionStorage.userUniversityLon);

  	console.log(sessionStorage.userLocationLat);

  	map = new google.maps.Map(document.getElementById('map'), 
  	{
    	zoom: 10,
    	center: new google.maps.LatLng(sessionStorage.userLocationLat, sessionStorage.userLocationLon),
    	mapTypeId: google.maps.MapTypeId.ROADMAP
  	});

  	// Adds a marker at the center of the map.
  	addHome(home);
  	addUniversity(university);

	var x = new XMLHttpRequest();
	//prepare request
	x.open('GET', 'http://localhost:8080/sharemycar/webapp/apis/spot.php?idAll='+sessionStorage.userId, true);
	x.send();
	//handle readyState change event
	x.onreadystatechange = function() 
	{
		if (x.status == 200 && x.readyState == 4) 
		{
			console.log(x.responseText);
			var JSONdata = JSON.parse(x.responseText); 
			//get buildings array
			spots =JSONdata.spotLocations; 
			//read buildings
			for(var i = 0; i < spots.length; i++) 
			{
				var spot = new google.maps.LatLng(spots[i].location.latitude, sessionStorage.userLocationLon);
				console.log(spot);
				console.log(spots[i]);
				addMarker(spot, i);
			
			}//for
		}	
	}

}

// Adds a marker to the map and push to the array.
function addHome(location) 
{
	var marker = new google.maps.Marker(
	{
	    position: location,
	    map: map
	 });

}

// Adds a marker to the map and push to the array.
function addUniversity(location) 
{
  var marker = new google.maps.Marker(
  {
    position: location,
    map: map
  });
}


// Adds a marker to the map and push to the array.
function addMarker(location, texto) 
{
	var marker = new google.maps.Marker(
	{
	  position: location,
	  map: map
	});

    var contentString = 'Parada numero: ' + (texto + 1);
    var infowindow = new google.maps.InfoWindow({
          	content: contentString
        });

    marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
}//addMarker