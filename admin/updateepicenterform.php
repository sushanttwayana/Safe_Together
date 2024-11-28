<?php

include 'db.php';

session_start();

// $username = $_SESSION['username'];

// if(!isset($username)){
//    header('location:../html/login.php');
// };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="updaterescueteam.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<style>
    .container{
        max-width:570px;
        /* border:10px solid red; */
    }
</style>

</head>
<body>
    <?php

    include 'db.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM epicenter WHERE id = $id "; // Employee_ID  = ".$id;

    $result = mysqli_query($conn, $sql);

    if($result){

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $latitude = $row['latitude'];
            // $mname = $row['cmn'];
            // $lname = $row['cln'];
            $longitude = $row['longitude'];
            $radius = $row['radius'];
            // $subtype = $row['subtype'];
            // $subtype2 = $row['subtype2'];
        }
    }
    ?>
    
    <div class="container">
        <header>Update Epicenter</header>

        <form action="updateepicenter.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <!-- Add a hidden input field to pass the id value -->
                    <input type="hidden" name="id" value="<?php echo $id; ?>">


                    <div class="fields">
                        <div class="input-field">
                            <label>Latitude</label>
                            <input type="text" name="latitude" placeholder="Enter your first name" value=" <?php global $fname; echo $fname ?>" required>
                        </div>

                        


                       
                        <div class="input-field">
                            <label>Longitude</label>
                            <input type="text"  name="longitude" placeholder="Enter mobile number" min="9000000000" max="9999999999"  value=" <?php global $mobileno; echo $mobileno ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Radius</label>
                            <input type="text"  name="radius" placeholder="Enter your email" value=" <?php global $email; echo $email ?>" required>
                        </div>





                        
                    </div>
                </div>
                       
                        <button class="sumbit" name="submit">
                            <span class="btnText">UPDATE</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>


</body>
</html>
