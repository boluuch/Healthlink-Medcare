<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="location.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,500;1,600;1,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap"
    />
  </head>
  <body>
    <div class="location2">
      <div class="logo-header11">
        <div class="logo20">
          <img
            class="paramedic-sign-icon21"
            alt=""
            src="./public/paramedicsign.svg"
          />

          <div class="healthlink-medical20">
            <span class="healthlink-medical21">HealthLink Medical</span>
            <span class="span20"> </span>
          </div>
        </div>
        <div class="consultation-hub">Locate Pharmacies Around You</div>
      </div>
      <form action="search.php" id="locationForm" onsubmit="event.preventDefault(); geocodeAddress();">
        <div class="background-child">
          <div class="enter-your-location-wrapper">
        <div class="enter-your-location">Enter your Location:</div>
      </div>
            <input type="text" id="locationInput" name="locationInput" placeholder="Enter your location">
            <button type="submit" id="submitBtn" onclick="geocodeAddress()">
                <span id="submitBtnText">Submit</span>
            </button>
        </div>
    </form>
     
      <div class="map">
        <div id="map"></div>
    </div>

    <div>
      <h2>Results:</h2>
      <ul id="resultsList"></ul>
    </div>
    
    <div id="pharmacyList"></div>
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
                    // Fetch and display pharmacies within 5km radius
                    fetchPharmacies(location.lat(), location.lng());
                } else {
                    alert('Geocode was not successful: ' + status);
                }
            });
        }

        function searchPharmacies() {
        var locationInput = document.getElementById('locationInput').value;

        var request = {
          query: 'pharmacy',
          location: new google.maps.LatLng(0, 0), // Set initial location, will be updated after geocoding
          radius: 5000, // 5 kilometers radius
        };

        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({ 'address': locationInput }, function (results, status) {
          if (status === 'OK') {
            request.location = results[0].geometry.location;

            var service = new google.maps.places.PlacesService(document.createElement('div'));

            service.textSearch(request, function (results, status) {
              if (status === 'OK') {
                displayResults(results);
              } else {
                alert('Places API request failed: ' + status);
              }
            });
          } else {
            alert('Geocoding failed: ' + status);
          }
        });
      }

      function displayResults(results) {
        var resultsList = document.getElementById('resultsList');
        resultsList.innerHTML = '';

        for (var i = 0; i < Math.min(results.length, 10); i++) {
          var place = results[i];
          var li = document.createElement('li');
          li.textContent = place.name;
          resultsList.appendChild(li);
        }
      }
    </script>
      <div class="enter-your-location-wrapper">
       
      </div>
      <div class="sidebar2">
        <button class="home-btn2" disabled="{true}" id="homeBtn">
          <div class="btn2">
            <div class="home12">Home</div>
            <img
              class="iconsaxlinearhome2"
              alt=""
              src="./public/iconsaxlinearhome.svg"
            />
          </div>
        </button>
        
        </div>
        <a class="logout-btn2" href="index.php">
          <div class="chat-btn7">
            <div class="log-out2">Log out</div>
            <img
              class="iconsaxlinearsearchstatus14"
              alt=""
              src="./public/iconsaxlinearsearchstatus1.svg"
            />
          </div>
        </a>
        
      </div>
    </div>
    

    <button id="sendRequestBtn" onclick="sendRequest()" class="sendRequestBtn">Send Request</button>

    <script>
        // ... (previous script code)

        function sendRequest() {
            // You can add additional logic here if needed
            alert('Request sent!'); // For demonstration purposes
        }
    </script>
  </body>
</html>
