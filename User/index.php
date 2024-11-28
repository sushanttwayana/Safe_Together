<?php
session_start();
include 'config.php';
if(!$con){
    die('Could not Connect My Sql:');
}


// if (!isset($_SESSION['user_id'])) {
//     echo $_SESSION['user_id'];
// }



$host = "localhost";
$dbname = "safetogether";
$username = "root";
$password = "";

$id = $_SESSION['user_id'];
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Use backticks for the column name and bind the parameter
    $stmt = $pdo->prepare("SELECT `alert status` FROM user WHERE user_id = :user_id");
    $stmt->execute([':user_id' => $id]); 

    $alertStatus = $stmt->fetchColumn();
    
    // echo "Alert Status: " . $alertStatus; 
    
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

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

    function showAlertStatus() {
        let alertStatusButton = document.getElementById('alert-status');
        // alertStatusButton.textContent = "Alert Status: OFF";
    console.log('hey');
    let alertColor = "red";
    console.log(alertColor);


    // Create a form dynamically
    let form = document.createElement('form');
    form.method = 'POST';
    form.action = 'marksafe.php';

    let input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'alertColor';
    input.value = alertColor;

    form.appendChild(input);
    document.body.appendChild(form);

    form.submit(); // Submit the form

 
}

    function markMeAsSafe() {
        let alertStatusButton = document.getElementById('alert-status');
        // alertStatusButton.textContent = "Alert Status: OFF";
    console.log('hey');
    let alertColor = "green";
    console.log(alertColor);


    // Create a form dynamically
    let form = document.createElement('form');
    form.method = 'POST';
    form.action = 'marksafe.php';

    let input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'alertColor';
    input.value = alertColor;

    form.appendChild(input);
    document.body.appendChild(form);

    form.submit(); // Submit the form
    // const alertStatus = "<?php echo $alertStatus; ?>";
    // console.log(alertStatus);
 
}


function playAudio() {
            const audioElement = document.getElementById("audio");
            if (audioElement) {
                try {
                    audioElement.play();
                    setTimeout(() => {
                        audioElement.pause();
                        audioElement.currentTime = 0; // Reset to the start
                    }, 30000);
                } catch (error) {
                    console.error("Error playing audio:", error);
                }
            } else {
                console.error("Audio element not found.");
            }
        }



        function stopAudio() {
        const audioElement = document.getElementById("audio");
        if (audioElement) {
            try {
                audioElement.pause(); // Pause the audio
                audioElement.currentTime = 0; // Reset playback to the beginning
            } catch (error) {
                console.error("Error stopping audio:", error);
            }
        } else {
            console.error("Audio element not found.");
        }
    }

// function playAudio() {
//             const audioElement = document.getElementById("audio");

//             // audioElement.play();
           
//             if (alertStatus == "red" || alertStatus == "yellow") {
//                 // console.log("red color")
//                 // console.log(alertStatus)
//                 if (audioElement.paused) {
//                     audioElement.play();
//                 }
//             } else if (alertStatus === "green") {
//                 // console.log("green color")

//                 // console.log(alertStatus)

//                 if (!audioElement.paused) {
//                     audioElement.pause();
//                     audioElement.currentTime = 0; 
//                 }
//             }
//             playAudio();
//         }

</script>
<script src="../User/alert.js"></script>

</head>
<body>
    <!-- Top Navigation Bar -->
    <header class="top-nav">
        <nav>
            <ul>
            <li><a href="estimator.php">Flood Estimator</a></li>

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
                        //    $alertStatusText ="Alert Status: ON";
                          
                        }
                    }
                }
                ?>  


            
            <!-- <?php echo htmlspecialchars($alertcolor); ?> -->




    <audio src="siren-alert-96052.mp3" id="audio" loop></audio>
           
    


            <button id="emergency-btn" class="emergency-btn" ype="button" onclick="showAlertStatus();playAudio()">Call for Emergency</button>

            <button type="button" onclick="playAudio();" style="background-color: #ffebee; color:#ffebee;">
        Play Audio
    </button><br>


         
            <button id="alert-status" class="alert-status" style="background-color:
    <?php echo htmlspecialchars($alertcolor); ?>;">ALERT STATUS
</button><br>

<button id="mark-safe-btn" class="mark-safe-btn" style="background-color:wheat;" type="button" onclick="markMeAsSafe();playAudio();">Mark Me as Safe</button>

<button type="button" onclick="stopAudio();" style="background-color: #ffebee; color:#ffebee;">Stop Audio</button>
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
