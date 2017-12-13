var searchBox = new google.maps.places.SearchBox(document.getElementById('map-search'));
var lat, lng, city;

searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    places.forEach(function(place) {
        var searchCity = place.geometry;

        lat = searchCity.location.lat();
        lng = searchCity.location.lng();
        city = $('#map-search').val();
    });
});

$('#send').click(function () {

    if (lat == undefined || lng == undefined || city == undefined){
        alert('Місто не вибране!');
        return;
    }

    var jsonData = {
        coordinates: [lat, lng],
        city: city
    };

    $.ajax({
        type: "POST",
        url: "/ajax/search.php?action=save",
        data: JSON.stringify(jsonData),
        contentType: "application/json",
        success: function (data) {
            console.log(data);
        },
        failure: function (error) {
            console.log(error)
        }
    });

});

