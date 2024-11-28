<?php
session_start();
$id = $_SESSION['user_id'];

include 'config.php';




if (isset($_POST['alertColor'])) {
    $alertColor = $_POST['alertColor'];
    // $alertStatusText = ($alertColor === 'green') ? 'Alert Status: OFF' : 'Alert Status: ON';
    echo "Received alertColor: " . $alertColor;
} else {
    echo "No alertColor received.";
}



$sql = "UPDATE user SET `alert status` ='$alertColor'

WHERE user_id = $id";

$result = mysqli_query($con, $sql);

if ($result) {
    header("location: index.php");
} else {
    echo "Error: " . mysqli_error($con); // Display error message for debugging
}

if ($alertColor == 'red'){}
    $data = json_encode($id);
    file_put_contents("data.json", $data); // to be read by python
    if(shell_exec(escapeshellcmd('python helpmessagesender.py '))){
        echo "success111";
    }
    else{
        echo "failed111";
    }



mysqli_close($con);






// // Get data from AJAX request
// $alertColor = $_POST['alertColor'] ?? '';

// // Validate input
// if (!empty($alertColor)) {
//     // Update the database
//     $sql = "UPDATE user SET `alert status` = 'green WHERE id = $id"; // Update the WHERE clause as needed
//     $stmt = $con->prepare($sql);
//     $stmt->bind_param("s", $alertColor);

//     if ($stmt->execute()) {
//         echo "Status updated successfully.";
//     } else {
//         echo "Error updating status: " . $stmt->error;
//     }

//     $stmt->close();
// } else {
//     echo "Invalid input.";
// }

// $con->close();

?>
