<?php
session_start();
include 'config.php';
$user_id = $_SESSION['user_id'];
if(!$con){
    die('Could not Connect My Sql:');
}




// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get latitude and longitude from the form
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];



    // echo("Latitude:". document.getElementById('latitude').value);
    // echo("Longitude:". document.getElementById('longitude').value);
    
    // Validate if latitude and longitude are provided
    if (empty($latitude) || empty($longitude)) {
        echo "Latitude and Longitude are required!";
        exit;
    }
    

    // Sanitize inputs
    $latitude = mysqli_real_escape_string($con, $latitude);
    $longitude = mysqli_real_escape_string($con, $longitude);

    // Insert data into the database
    // $sql = "INSERT INTO epicenter (latitude, longitude) VALUES ('$latitude', '$longitude')";
    $sql = "UPDATE user SET latitude = '$latitude', longitude = '$longitude' WHERE user_id = '$user_id'";

    if (mysqli_query($con, $sql)) {
        echo "latitude longitude saved successfully!";
        header("location: index.php");



    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($con);
} else {
    echo "Invalid request method.";
}
?>
