function initialize() {
	var myLatlng = new google.maps.LatLng(42.372436,-71.11962);
	var mapOptions = {
		center: myLatlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoom: 18
	}
	var map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Ladas Law Firm'
	});			
}	
