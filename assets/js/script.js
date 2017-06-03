// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
$(document).ready(function(){
	$('.form').on('submit', function(e){
		e.preventDefault();
		console.log($(this).serialize());
	});
});

function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
	  center: {lat: -15.80479997, lng: -48.01125516},
	  zoom: 13
	});
	var input = (document.getElementById('pac-input'));

	var types = document.getElementById('type-selector');
	map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
	map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

	var autocomplete = new google.maps.places.Autocomplete(input);
	autocomplete.bindTo('bounds', map);

	var infowindow = new google.maps.InfoWindow();
	var marker = new google.maps.Marker({
		map: map,
		anchorPoint: new google.maps.Point(0, -29)
	});

	autocomplete.addListener('place_changed', function() {
		infowindow.close();
		marker.setVisible(false);
		var place = autocomplete.getPlace();
		
		if (!place.geometry) {
			// User entered the name of a Place that was not suggested and
			// pressed the Enter key, or the Place Details request failed.
			window.alert("No details available for input: '" + place.name + "'");
			return;
		}

		// If the place has a geometry, then present it on a map.
		if (place.geometry.viewport) {
			map.fitBounds(place.geometry.viewport);
		} else {
			map.setCenter(place.geometry.location);
			map.setZoom(17);  // Why 17? Because it looks good.
		}
		marker.setIcon(/** @type {google.maps.Icon} */({
			url: place.icon,
			size: new google.maps.Size(40, 40),
			origin: new google.maps.Point(0, 0),
			anchor: new google.maps.Point(17, 34),
			scaledSize: new google.maps.Size(30, 30)
		}));
		marker.setPosition(place.geometry.location);
		marker.setVisible(true);

		var address = '';
		if (place.address_components) {
			address = [
				(place.address_components[0] && place.address_components[0].short_name || ''),
				(place.address_components[1] && place.address_components[1].short_name || ''),
				(place.address_components[2] && place.address_components[2].short_name || '')
			].join(' ');
		}

		infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
		infowindow.open(map, marker);
	
		$('.nome').val(place.name);
		$('.endereco').val(place.formatted_address);
	});

	// Sets a listener on a radio button to change the filter type on Places
	// Autocomplete.
	function setupClickListener(id, types) {
		var radioButton = document.getElementById(id);
		radioButton.addEventListener('click', function() {
		autocomplete.setTypes(types);
		});
	}

	setupClickListener('changetype-all', []);
	setupClickListener('changetype-address', ['address']);
	setupClickListener('changetype-establishment', ['establishment']);
	setupClickListener('changetype-geocode', ['geocode']);
}