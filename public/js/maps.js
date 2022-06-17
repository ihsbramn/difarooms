var map;
var InforObj = [];
// Add a marker clusterer to manage the markers.

// center map
var centerCords = {
    lat: -6.917076,
    lng: 107.618979
};

window.onload = function() {
    initMap();
};

// marker funtion
function addMarker() {
    var markers = [];
    for (var i = 0; i < markersOnMap.length; i++) {
        var contentString = '<div id="content"> <p> <b>' + markersOnMap[i].placeName +
            '</b> </p></div>' + '<a target="_blank" href="' + markersOnMap[i].url + '">Show Details</a>';

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

// Add controls to the map, allowing users to hide/show features.
const styleControl = document.getElementById("style-selector-control");



const styles = {
    default: [],
    hide: [{
            featureType: "poi",
            stylers: [{ visibility: "off" }],
        },
        {
            featureType: "transit",
            elementType: "labels.icon",
            stylers: [{ visibility: "off" }],
        },
    ],
};


function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: centerCords,
        mapTypeControl: false,
    });

    // map.controls[google.maps.ControlPosition.TOP_LEFT].push(styleControl);
    map.setOptions({ styles: styles["hide"] });

    document.getElementById("hide-poi").addEventListener("click", () => {
        map.setOptions({ styles: styles["hide"] });
    });

    document.getElementById("show-poi").addEventListener("click", () => {
        map.setOptions({ styles: styles["default"] });
    });

    addMarker();

}