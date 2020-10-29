var map;

DG.then(function () {
	map = DG.map('map', {
		center: [57.78101, 40.92068],
		zoom: 16,
		touchZoom: false,
		scrollWheelZoom: false,
		doubleClickZoom: false,
		fullscreenControl: false,
		geoclicker: false,
	});
	
	DG.marker([57.78230, 40.92054]).addTo(map).bindPopup('Рубликов Максим | Массажист');
});