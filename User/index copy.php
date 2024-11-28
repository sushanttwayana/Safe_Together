<?php
session_start();
include 'config.php';
if(!$con){
    die('Could not Connect My Sql:');
}
// if (!isset($_SESSION['user_id'])) {
//     echo $_SESSION['user_id'];
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Together</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    
    <link rel="stylesheet" href="../User/style.css">


    

    <!-- <script src="../User/alert.js"></script> -->
    <script>

        
    
    document.getElementById("emergency-btn").onclick = showAlertStatus;
    document.getElementById("mark-safe-btn").onclick = markMeAsSafe;




    function markMeAsSafe() {
    console.log('hey');
    let alertColor = "green";

    $.ajax({
        url: 'marksafe.php', // PHP file to handle the request
        method: 'POST',
        data: { alertColor: alertColor },
        success: function(response) {
            console.log('Database updated:', response);
            alert('You have been marked as safe!');
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
}

</script>
<script src="../User/alert.js"></script>

</head>
<body>
    <!-- Top Navigation Bar -->
    <header class="top-nav">
        <nav>
            <ul>
            <li><a href="reliefpoint.php">Relief Point</a></li>
            
            
            <li><a href="medical.php">Medical ID</a></li>
                <!-- <li><a href="#user">User</a></li> -->
                
                <?php
                    if (isset($_SESSION['user_id'])) {
                    
                ?>  
                    <li><a href="">
                    <!-- <i class="fas fa-sign-in-alt"></i>  -->
                    <?php echo "User:". $_SESSION['name']?></a>
                 </li> 
                <?php
                    }
                ?>
                    <li> <a href="logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        
                    </a> </li> 
               
                <!-- <li><a href="logout.php">Logout</a></li> -->
            </ul>
        </nav>
    </header>

    <aside class="side-nav left">
        <h3>Emergency Numbers</h3>
        <ul>
            <li>Police: 100</li>
            <li>Ambulance: 102</li>
            <li>Fire Brigade: 101</li>
            <li>Nepal Red Cross: 977-1-4270650</li>
            <li>Traffic Police: 103</li>
            <li>Child Helpline (CWIN): 1098</li>
            <li>Women Helpline: 1145</li>
            <li>Tourist Police: 1144</li>
          </ul>
          
    </aside>

    <aside class="side-nav right">
        <h3>Medical Information</h3>
        <ul>
            <li>Blood Group: A+</li>
            <li>Allergies: None</li>
            <li>Conditions: Asthma</li>
            <ul>Vaccine
            <li>COVID-19 Vaccine: Yes, Last Dose: 2024/01/01</li>
            <li>Influenza Vaccine: No, Last Dose: 2001/01/01</li>
            <li>Tetanus Vaccine (Td/Tdap): Yes, Last Dose: 2005/05/05</li>
            <li>Hepatitis A Vaccine: Yes, Last Dose: 2008/01/01</li>
            <li>Hepatitis B Vaccine: No, Last Dose: 2008/01/01</li>
        </ul>
        </ul>
    </aside>

<div class="main-body">
    <div class="header">
        Safe Together
      </div>
    <br>
    <div class="partition emergency-section">
        <div class="center-content">
        <?php
                       
                       $userid= $_SESSION['user_id'];

                       $sql = "SELECT * FROM user WHERE user_id = '" . mysqli_real_escape_string($con, $_SESSION['user_id']) . "'";


                    
                    $result = mysqli_query($con, $sql);
                    if($result) {
                
                        if(mysqli_num_rows($result) > 0) {
                            
                
                        while($row = mysqli_fetch_assoc($result)) {
                           $alertcolor =  $row['alert status'];
                          
                        }
                    }
                }
                ?>  


            
            <!-- <?php echo htmlspecialchars($alertcolor); ?> -->




            <form id="signupForm" action="epicenterset.php" method="POST">
        <input type="hidden" id="latitude" name="latitude">
        <input type="hidden" id="longitude" name="longitude">
        <!-- <button type="button" onclick="showAlertStatus()">Get Location and Submit</button> -->
    




            <button id="emergency-btn" class="emergency-btn" >Call for Emergency</button><br>
         
                        <button id="alert-status" class="alert-status" style="background-color:
    <?php echo htmlspecialchars($alertcolor); ?>;">
    Alert Status : ON
</button><br>

<button id="mark-safe-btn" class="mark-safe-btn" type="button" onclick="markMeAsSafe()">Mark Me as Safe</button>
</form>
        </div>
    </div>







    
    <div class="partition disaster-info-section">
        <div class="disaster-info">
            <h3>What to Do During a Disaster:</h3>
            <ul>
                <li>Stay calm and follow official instructions.</li>
                <li>Move to a safe location if needed.</li>
                <li>Keep emergency supplies nearby.</li>
                <li>Help others if it is safe to do so.</li>
            </ul>
        </div>
    </div>



    

<!-- New Relief Form Container -->
<div class="partition relief-form-section">
        <div class="relief-form">
            <h3>Provide Relief</h3>
            <form action="providerelief.php" method="POST">
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="text" id="name" name="fname" placeholder="Enter first name" required>
                </div>
                <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="text" id="name" name="lname" placeholder="Enter last name" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" placeholder="Enter the address" required>
                </div>
                <div class="form-group">
                    <label for="relief_material">Relief Material:</label>
                    <textarea id="relief_material" name="relief_material" placeholder="Enter the relief materials" rows="4" required></textarea>
                </div>
                <button type="submit" class="submit-relief-btn">Submit</button>
            </form>
        </div>
</div>






<script src="../User/alert.js"></script>


    <footer>
        <p>© 2024 SafeTogether. All rights reserved.</p>
      </footer>

    </div>



</body>
</html>
