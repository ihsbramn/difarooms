var map;
var InforObj = [];
// Add a marker clusterer to manage the markers.

var centerCords = {
    lat: -6.9032739,
    lng: 107.5731173
};



// var markersOnMap = [
//     //     {
//     //     placeName: ' <b>Ho-Chi-Minh City</b>  <br>' +
//     //         'Ho Chi Minh City (commonly known as Saigon) is a city in southern Vietnam. <br>' +
//     //         'Famous for the pivotal role it played in' +
//     //         'the Vietnam War. Its also known for its French colonial landmarks,' +
//     //         'including Notre-Dame Cathedral, made entirely of materials imported from France,' +
//     //         'and the 19th-century Central Post Office. Food stalls line the city’s streets,' +
//     //         'especially around bustling Bến Thành Market.',
//     //     LatLng: [{
//     //         lat: 10.775844,
//     //         lng: 106.701756
//     //     }]
//     // }
// ];

window.onload = function() {
    initMap();
};

function addMarker() {
    var markers = [];
    for (var i = 0; i < markersOnMap.length; i++) {
        var contentString = '<div id="content"><p>' + markersOnMap[i].placeName +
            '</p></div>';

        const marker = new google.maps.Marker({
            position: markersOnMap[i].LatLng[0],
            map: map
        });

        const infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 200
        });

        marker.addListener('click', function() {
            closeOtherInfo();
            infowindow.open(marker.get('map'), marker);
            InforObj[0] = infowindow;
        });
        marker.addListener('mouseover', function() {
            closeOtherInfo();
            infowindow.open(marker.get('map'), marker);
            InforObj[0] = infowindow;
        });
        // marker.addListener('mouseout', function() {
        //     closeOtherInfo();
        //     infowindow.close();
        //     InforObj[0] = infowindow;
        // });
        // markers.push(marker);
    }
    var markerCluster = new MarkerClusterer(map, markers, {
        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js'
    });
}

function closeOtherInfo() {
    if (InforObj.length > 0) {
        /* detach the info-window from the marker ... undocumented in the API docs */
        InforObj[0].set("marker", null);
        /* and close it */
        InforObj[0].close();
        /* blank the array */
        InforObj.length = 0;
    }
}


function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: centerCords
    });

    addMarker();
}