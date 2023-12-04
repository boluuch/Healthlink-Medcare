<?php
// Connect to your MySQL database
$dsn = "mysql:host=localhost;dbname=healthlink";
$dbusername = "root";
$dbpassword = "Ucee1812!";//change the password

try {
    //pdo=PHP data object
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     echo "connection failed". $e->getMessage();
}
$pdo = new PDO("mysql:host=localhost;dbname=healthlink", "root", "Ucee1812!");

set_time_limit(1000);

// Fetch user-entered location from the form
$userLocation = isset($_GET['locationInput']) ? $_GET['locationInput'] : '';

// Fetch pharmacy data from the database
$query = "SELECT name, latitude, longitude FROM location LIMIT 20";
$result = $pdo->query($query);

// Check if there are results
if ($result->rowCount() > 0) {
    $pharmacies = [];

    // Fetch each row and add it to the array
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        // Calculate the distance between user location and pharmacy location
        $distance = calculateDistance($userLocation, $row['latitude'], $row['longitude']);

        // If the distance is less than or equal to 5km, include the pharmacy
        if ($distance <= 3) {
            $pharmacies[] = [
                'name' => $row['name'],
                'lat' => $row['latitude'],
                'lng' => $row['longitude'],
            ];
        }
    }
} else {
    $pharmacies = [['error' => 'No pharmacies found']];
}

// Return the filtered list of pharmacies as JSON
header('Content-Type: application/json');
echo json_encode($pharmacies);

function calculateDistance($userLocation, $pharmacyLat, $pharmacyLng)
{
    // You need to implement the logic to calculate the distance between two sets of coordinates
    // This can be done using the Haversine formula or other distance calculation methods
    // Here's a simple example using the Haversine formula:

    $earthRadius = 6371; // Radius of the Earth in kilometers

    $userLocation = geocode($userLocation); // Convert user's location to coordinates
    $pharmacyLocation = ['lat' => $pharmacyLat, 'lng' => $pharmacyLng];

    $latDiff = deg2rad($pharmacyLocation['lat'] - $userLocation['lat']);
    $lngDiff = deg2rad($pharmacyLocation['lng'] - $userLocation['lng']);

    $a = sin($latDiff / 2) * sin($latDiff / 2) +
        cos(deg2rad($userLocation['lat'])) * cos(deg2rad($pharmacyLocation['lat'])) *
        sin($lngDiff / 2) * sin($lngDiff / 2);

    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

    $distance = $earthRadius * $c; // Distance in kilometers

    return $distance;
}

function geocode($address)
{
    // You may need to use a geocoding service to convert an address to coordinates
    // This is just a placeholder function, you should replace it with a real geocoding implementation
    // Example: Use Google Maps Geocoding API
    // Note: Ensure you have the necessary API key and handle error cases appropriately
    $apiKey = 'AIzaSyCfQPdUcZ5OVhaNz8oZnPvXohwXQeEty-E';
    $address = urlencode($address);
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$apiKey}";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if ($data['status'] === 'OK') {
        $location = $data['results'][0]['geometry']['location'];
        return $location;
    } else {
        // Handle geocoding errors
        return ['lat' => 0, 'lng' => 0];
    }
}
?>
