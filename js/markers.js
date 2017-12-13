function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 3,
        center: {lat: 55.755826, lng: 37.617300} // center for world Kyiv :)
    });

    // Create an array of alphabetical characters used to label the markers.
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Add some markers to the map.
    // Note: The code uses the JavaScript Array.prototype.map() method to
    // create an array of markers based on a given "locations" array.
    // The map() method here has nothing to do with the Google Maps API.
    var markers = locations.map(function(location, i) {
        return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
        });
    });

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers,
        {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}

//get all markers for DB
$.ajax({
    type: "POST",
    url: "/ajax/markers.php",
    contentType: "application/json",
    dataType: "json",
    success: function (data) {
        createListLocation(data);
    },
    failure: function (error) {
        alert(error);
    }
});

var list_loc = [], //array of names city
    locations = []; //array of coordinates

function createListLocation(data) {
    var count = data.length;

    for (var i = 0; i < count; i++){
        // console.log(data[i]['name_location']);
        // console.log(data[i]['lat']);
        // console.log(data[i]['lng']);

        $('#list_loc').append('<p>'+data[i]['name_location']+'</p>'); //create list DOM

        list_loc[i] = data[i]['name_location'];
        locations[i] = {
            lat: data[i]['lat'],
            lng: data[i]['lng']
        }
    }
}