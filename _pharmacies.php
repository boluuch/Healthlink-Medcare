<?php
// Assuming you have a database connection established

// Get user's location from the request
$latitude = isset($_GET['lat']) ? $_GET['lat'] : null;
$longitude = isset($_GET['lng']) ? $_GET['lng'] : null;

if ($latitude !== null && $longitude !== null) {
    // Example SQL query to get pharmacies within 10km radius (you may need to adjust this based on your database structure)
    $sql = "SELECT id, name, latitude, longitude
            FROM pharmacies
            WHERE SQRT(POW(69.1 * (latitude - $latitude), 2) + POW(69.1 * ($longitude - longitude) * COS(latitude / 57.3), 2)) < 10";

    // Execute the query and fetch results
    $result = mysqli_query($your_db_connection, $sql);

    if ($result) {
        $pharmacies = mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
}