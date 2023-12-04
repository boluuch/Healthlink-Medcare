<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Map</title>
   <style>
       #map {
            height: 400px;
            width: 100%;
        }
   </style>

</head>
<body>
    <h1>Location Map</h1>
    <form id="locationForm">
        <label for="locationInput">Enter Your Location:</label>
        <input type="text" id="locationInput" placeholder="Enter your location">
        <button type="button" onclick="geocodeAddress()">Submit</button>
    </form>
    <div id="map"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfQPdUcZ5OVhaNz8oZnPvXohwXQeEty-E&callback=initMap" async defer></script>
    <script>
        var map;
        var geocoder;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 0, lng: 0 },
                zoom: 2
            });

            geocoder = new google.maps.Geocoder();
        }

        function geocodeAddress() {
            var address = document.getElementById('locationInput').value;

            geocoder.geocode({ 'address': address }, function (results, status) {
                if (status === 'OK') {
                    var location = results[0].geometry.location;
                    map.setCenter(location);
                    map.setZoom(14); // You can adjust the zoom level as needed

                    // Add a marker for the entered location
                    var marker = new google.maps.Marker({
                        map: map,
                        position: location,
                        title: 'Entered Location'
                    });
                } else {
                    alert('Geocode was not successful: ' + status);
                }
            });
        }
    </script>
</body>
</html>
