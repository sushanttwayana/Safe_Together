<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $relief_material = $_POST['relief_material'];

    // Validate the required fields
    if (empty($fname) || empty($address) || empty($relief_material)) {
        echo "All fields are required!";
        exit;
    }
    include 'config.php';

    

    // Sanitize the input to prevent SQL injection
    $fname = mysqli_real_escape_string($con, $fname);
    $lname = mysqli_real_escape_string($con, $lname);
    $address = mysqli_real_escape_string($con, $address);
    $relief_material = mysqli_real_escape_string($con, $relief_material);

    // Insert data into the `reliefpoint` table
    // $sql = "INSERT INTO reliefpoint (fname,lname,address, material) 
    //         VALUES ('$fname',$lname', '$address', '$relief_material')";

$sql = "INSERT INTO reliefpoint (fname, lname, address, material) 
VALUES ('$fname', '$lname', '$address', '$relief_material')";




if (mysqli_query($con, $sql)) {
    echo "<script>
            alert('Relief data submitted successfully!');
            setTimeout(function() {
                window.location.href = '../user/index.php';
            }, 1000); // 1 second delay before redirect
          </script>";
    exit;


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
} else {
    echo "Invalid request method.";
}
?>
