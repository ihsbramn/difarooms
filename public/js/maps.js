var map = new google.maps.Map(document.getElementById('map2'), {
    zoom: 13,
    center: new google.maps.LatLng(-6.917076, 107.618979),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var infowindow = new google.maps.InfoWindow();

var marker, i;

for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][2], locations[i][3]),
        map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent('<p>' + locations[i][0] + '</p>' + locations[i][1] + '<br>' + '<a target="_blank" href="' + locations[i][4] + '">Show Details</a>');
            infowindow.open(map, marker);
        }
    })(marker, i));
}

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

map.setOptions({ styles: styles["hide"] });

document.getElementById("hide-poi").addEventListener("click", () => {
    map.setOptions({ styles: styles["hide"] });
});

document.getElementById("show-poi").addEventListener("click", () => {
    map.setOptions({ styles: styles["default"] });
});