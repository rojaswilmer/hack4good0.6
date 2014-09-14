//TODO: maxBounds, or fitBounds + maxZoom

//    var layer1 = L.tileLayer('http://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=norges_grunnkart&zoom={z}&x={x}&y={y}');

//    var layer2 = L.tileLayer('http://opencache.statkart.no/gatekeeper/gk/gk.open_gmaps?layers=topo2&zoom={z}&x={x}&y={y}', {
//        attribution: '© Kartverket'
//    });


    var map1 = L.map('map1', {
//      layers: [layer1],
        center: [59.336, 5.967],
        zoom: 15,
//		maxBounds:[[59.3475,5.95081],[59.32522,5.98712]]
//		maxBounds:[[59.34934, 5.94592],[59.32067, 5.99785]]
    });

    map1.attributionControl.setPrefix('');

    var map2 = L.map('map2', {
//        layers: [layer2],
        center: [59.336, 5.967],
        zoom: 15,
        zoomControl: false
    });

    map1.sync(map2);
    map2.sync(map1);

//add images
	var image1Url='public/data/maps/test/img1.1.jpg',
	image1Bounds = [[59.3475,5.95081],[59.32522,5.98712]]; //northWest, southEast

	var image2Url="public/data/maps/test/img1.2.jpg",
	image2Bounds = [[59.3475,5.95081],[59.32522,5.98712]]; //northWest, southEast

	L.imageOverlay(image1Url,image1Bounds).addTo(map1);
	L.imageOverlay(image2Url,image2Bounds).addTo(map2);


//for development
		var popup = L.popup();
		function onMapClick(e) {
			popup
				.setLatLng(e.latlng)
				.setContent("You clicked at " + e.latlng.toString() + "<br></br><form name='input' action='' method='get'>Difference:<input type='text' name='difference'><input type='submit' value='submit'></form>")//submit 1. image1 / image2 filenames; 2. location clicked 3. difference spotted ==> ideally in a geojson file; which can then be added as a marker layer by the organization  4. update badgets / number of differences spotted, if with log-in function, we can store the number of badgets made / differences spotted
				.openOn(map1);
		}
		map1.on('click', onMapClick);
		map2.on('click', onMapClick);
//end of for development

function loadMap(mapName){
    $("#map1 .leaflet-image-layer").attr('src','public/data/maps/test/'+mapName+'.1.jpg');
    $("#map2 .leaflet-image-layer").attr('src','public/data/maps/test/'+mapName+'.2.jpg');
}
