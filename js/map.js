function initialize() {
	var mapOptions = {
	  center: new google.maps.LatLng(42.1149808,-70.8258948),
	  zoom: 18
	};
	var map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(42.1149808,-70.8258948),
		map: map,
		title: 'Ladas Law Firm'
	});			
}