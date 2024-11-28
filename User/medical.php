<?php
session_start();
include 'config.php';
if(!$con){
    die('Could not Connect My Sql:');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Medical History</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="medical.css">

</head>
<body>

    <header class="top-nav">
        <nav>
            <ul>
                <li><a href="index.php">Back to Home</a></li>
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



<!-- <div class="header">
  Patient Medical History
</div> -->

<?php
                    if (isset($_SESSION['user_id'])) {
    $sql = "SELECT * FROM user WHERE 
    TRIM(user_id) = '{$_SESSION['user_id']}'";


   
    $result = mysqli_query($con, $sql);
    if($result) {
      if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
                            
                ?> 

<div class="container">
  <!-- Patient Information Section -->
  <div class="patient-info">
    <h1 style="text-align: center; padding:-30px; color:#005F99;">Medical History</h1>
    <hr><h3>Patient Information</h3>
    <p><strong>Name:</strong> 
   
      <?php 
      echo $row['fname']. $row['lname'];
      ?>

    </p>
    <p><strong>DOB:</strong> 
    <?php 
      echo $row['dob'];
      ?>
  
  </p>
    <p><strong>Gender:</strong> 
    <?php 
      echo $row['gender'];
      ?>
    </p>
    <p><strong>Blood Group:</strong>
    <?php 
      echo $row['bloodgroup'];
      ?>
  </p>
    <p><strong>Contact:</strong> 
    <?php 
      echo $row['phone'];
      ?>
      </p>
    <?php
                    }
                  }
                  }
                }
                    ?>
  </div>

  <!-- Medical History Section -->
  <div class="medical-history">
    <h3>Medical History</h3>
    <div id="history-list">
      <div class="history-item">
        <h4>2023 - Diabetes Diagnosis</h4>
        <p>Prescribed medication for Type 2 Diabetes. Regular check-ups advised.</p>
      </div>
      <div class="history-item">
        <h4>2021 - Surgery</h4>
        <p>Underwent appendectomy. Recovery was smooth without complications.</p>
      </div>
      <div class="history-item">
        <h4>2019 - High Blood Pressure</h4>
        <p>Started on antihypertensive medication. Advised lifestyle changes.</p>
      </div>
    </div>
    <button onclick="addHistory()">Add Recent History</button>
  </div>
</div>
<br><br><br>

<footer>
    <p>© 2024 SafeTogether. All rights reserved.</p>
  </footer>


<script>
  // Function to add a new medical history record
  function addHistory() {
    const historyList = document.getElementById('history-list');
    const newHistory = document.createElement('div');
    newHistory.className = 'history-item';
    newHistory.innerHTML = `
      <h4>2024 - Routine Check-Up</h4>
      <p>All vitals are normal. Advised regular exercise and a balanced diet.</p>
    `;
    historyList.appendChild(newHistory);
    alert('Recent medical history added!');
  }
</script>

</body>
</html>
