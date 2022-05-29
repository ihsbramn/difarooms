var map;
var InforObj = [];
// Add a marker clusterer to manage the markers.

var centerCords = {
    lat: -6.9032739,
    lng: 107.5731173
};

window.onload = function() {
    initMap();
};

function addMarker() {
    var markers = [];
    for (var i = 0; i < markersOnMap.length; i++) {
        var contentString = '<div id="content"> <p>' + markersOnMap[i].placeName +
            '</p></div>' + '<a target="_blank" href="' + markersOnMap[i].url + '">Google Maps</a>';

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

        // goole.maps.event.addListener(contentString, 'click', function() {
        //     window.location.href = this.url;
        // });
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
        zoom: 13,
        center: centerCords
    });

    addMarker();
}