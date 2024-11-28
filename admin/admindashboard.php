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
  <meta charset="UTF-8" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="dashboard.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <!-- favicon  -->
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
  
  <script>

  // Save input and display the value in the table
  // function saveInput(id) {
  //   const inputField = document.getElementById('rescue_' + id);
  //   const savedText = document.getElementById('saved_team_' + id);

  //   // Get the value from the input field
  //   const rescueTeam = inputField.value;

  //   // Show the saved text below the input field
  //   if (rescueTeam) {
  //     savedText.innerText = `Assigned: ${rescueTeam}`;
  //     inputField.style.display = 'none'; // Hide input after assigning

  // }

        function myFunction0 () {
        location.replace("search_alert.php");
    };

    function myFunction1 () {
        location.replace("appepicenter.php");
    };
   
    function myFunction2 () {
        location.replace("../html/teacherregistration.php");
    };

    function myFunction3 () {
        location.replace("assignteacher.php");
    };


    function myFunction4 () {
        location.replace("search_page.php");
    };
 
    function myFunction6 () {
        location.replace("assignteacher.php");
    };
</script>
  <style>        
  #u{
            padding: 10px 35px 10px 30px;
            background-color: #2c415a;
            border: 1px #0e2650 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
            width: 120px;
        }
        #uu{
            padding: 10px 35px 10px 30px;
            background-color: #003566;
            border: 1px #003566 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
            width: 120px;
        }

        #d{
            padding: 10px 35px 10px 40px;
            /* background-color: rgb(96, 109, 74);
            border: 1px rgb(99, 107, 71) solid; */
            background-color: rgb(85, 99, 62);
            border: 1px rgb(85, 99, 62) solid;
            
            border-radius: 10px;
            color: white;
            width: 120px;
        }
   .butt{

  color: #fff !important;



}
        
        th{
          background-color: #003566;

        }

 h3{
   font-size: 5rem;
   color:var(--black); 
}

  </style>
</head>
<body>
  <div class="container" id="section1">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="../images/admin.png">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#section1">
          <i class="fa fa-folder-open"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#section2">
          <i class="fa-solid fa-user-secret"></i> 
          <span class="nav-item">Red Alerts</span>
        </a></li>
        <li><a href="#section3">
          <i class="fa fa-user-cog"></i> 
           <span class="nav-item">Assign List</span>
        </a></li>
        <li><a href="#section5">
        <i class="fa fa-plus"></i>
          <span class="nav-item">Add Epicenter</span>
        </a></li>
        <li><a href="#section4">
          <i class="fa-solid fa-users"></i>
          <span class="nav-item">User List</span>
        </a></li>
       
        <!-- <li><a href="#section6">
        <i class="fa fa-user-cog"></i>
          <span class="nav-item">Requested Teacher</span>
        </a></li>

        <li><a href="../esewa-master">
        <i class="fa fa-sack-dollar"></i>
          <span class="nav-item">Pay to Teachers</span>
        </a></li>
         -->

        <li><a href="../logout.php" class="logout">
          <i class="fa fa-sign-out"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <h3 style="font-size:30px;text-align:center; color:#005F99;">Safe Together</h3>
      <!-- <div class="main-top">
        <h1>Founders</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="../images/mukesh.jpg">
          <h4>Mukesh Prajapati</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/poojan.jpg">
          <h4>Poojan Koju</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/sumina.jpg">
          <h4>Sumina Awa</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>

        <div class="card">
          <img src="../images/sushant.jpg">
          <h4>Sushant Twayana</h4>
          <p>Founder</p>
          <button>Profile</button>
        </div>
      </div> -->


<br><br>
<hr style="border:4px solid white;">
      <section class="main">
      <div class="main-top" >
        <h1 style="font-size:1.75rem;">Statistics</h1>
      </div>
      <div class="users">
<?php
            $conn = mysqli_connect('localhost','root','','safetogether') or die('connection failed');
?>

      <div class="card" style="border:none;   ">
         <?php 

$select_users = mysqli_query($conn, "SELECT * FROM `user` WHERE `alert status` = 'red'") or die('query failed');

            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         
         <p style="border:none;font-size: 1.25rem;">Total Red Alerts</p>
      </div>




      <div  class="card" style="border:none;   ">
         <?php 

$select_users = mysqli_query($conn, "SELECT * FROM `user` WHERE `alert status` = 'green'") or die('query failed');

            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p style="border:none;font-size: 1.25rem;">Total Safe people</p> 
      </div>


      <div class="card" style="border:none;   ">
         <?php 

$select_users = mysqli_query($conn, "SELECT * FROM `user` WHERE `rescue team` != ''") or die('query failed');

            $number_of_users = mysqli_num_rows($select_users);
         ?>
         <h3><?php echo $number_of_users; ?></h3>
         <p style="border:none;font-size: 1.25rem;">Rescue Team assigned</p>
      </div>

</div>
</section>


      

      <section class="teachers" id ="section2">
        <div class="teachers-list">
          <h1>Red Alert List</h1>
          <table class="table">
          <thead>
              <tr> 
                <th>ID</th>
                <th>FirstName</th>
                <!-- <th>MiddleName</th> -->
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Status</th>
                <th colspan="2"> 
               
                  <button class="butt" style="width:9rem;height:2.7rem; " onclick = "myFunction0()" style="color:white; width:2.7rem;">🔍Search</button> 
                 </th>
           
              </tr>
            </thead>
           
            <tbody>

            <!-- update & reject customer info -->
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="safetogether";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM user";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  if ($row['alert status']=='red'){


                  $id = $row['user_id'];
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $mobileno = $row['phone'];
                  $email = $row['email'];
                  $status = $row['alert status'];
                
                  ?>

              <tr>
              <td><?php echo $id  ?></td>
              <td><?php echo $fname ?></td>
              <td><?php echo $lname  ?></td>
              <td><?php echo $mobileno ?></td>
              <td><?php echo $email ?></td>
              <td style="background-color:red;"><?php echo $status ?></td>
           
              <!-- <td><?php echo $level  ?></td> -->
              <td>
              <!-- <a href="editteacher.php?id=<?php echo $id ?>"><input type="button" value="Update" id="u" class="edit"></a> -->
              
              </td>
              </tr>
                  <?php
                  }
                }
              }
              ?>
              </tbody>
          </table>
        </div>
      </section>







      <!-- Assign List -->
      
      <section class="teachers" id="section3">
        <div class="teachers-list">
          <h1>Assign List</h1>
          <table class="table">
            <thead>
              <tr> 
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Assign Rescue Team </th>
                <th colspan="2"> 
                  <!-- <button class="butt"  onclick = "myFunction2()" >ADD +</button> 
                  <button class="butt" style="width:9rem;height:2.7rem; " onclick = "myFunction4()" style="color:white; width:2.7rem;">🔍Search</button>  -->
              </th>
           
              </tr>
            </thead>
  
            <tbody>
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="safetogether";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM user";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  if ($row['alert status']=='red'){


                  $id = $row['user_id'];
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $mobileno = $row['phone'];
                  $email = $row['email'];
                  $rescue = $row['rescue team']

                
              ?>

              <tr>
              <td><?php echo $id  ?></td>
              <td><?php echo $fname ?></td>
              <td><?php echo $lname  ?></td>
              <td><?php echo $mobileno ?></td>
              <td><?php echo $email ?></td>
              <td><?php echo $rescue ?></td>
              



                      
              
          


          
              <td>
              <a href="updaterescueteam.php?id=<?php echo $id ?>"><input type="button" value="Update" id="u" class="edit"></a>
              <a href="deleterescuelist.php?id=<?php echo $id ?>"><input type="button" value="Delete" id="d"></a>
              </td>
              </tr>
              <?php
                  }

                }
              }
              ?>
              </tbody>

          </table>
        </div>





        <section class="teachers" id ="section2">
        <div class="teachers-list">
          <h1>Yellow Alert List</h1>
          <table class="table">
          <thead>
              <tr> 
                <th>ID</th>
                <th>FirstName</th>
                <!-- <th>MiddleName</th> -->
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Status</th>
                <th colspan="2"> 
                  <!-- <button class="butt"  onclick = "myFunction1()" >ADD +</button>  -->
                  <button class="butt" style="width:9rem;height:2.7rem; " onclick = "myFunction0()" style="color:white; width:2.7rem;">🔍Search</button> 
                 </th>
           
              </tr>
            </thead>
           
            <tbody>

            <!-- update & reject customer info -->
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="safetogether";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM user";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  if ($row['alert status']=='yellow'){


                  $id = $row['user_id'];
                  $fname = $row['fname'];
                  $lname = $row['lname'];
                  $mobileno = $row['phone'];
                  $email = $row['email'];
                  $status = $row['alert status'];
                
                  ?>

              <tr>
              <td><?php echo $id  ?></td>
              <td><?php echo $fname ?></td>
              <td><?php echo $lname  ?></td>
              <td><?php echo $mobileno ?></td>
              <td><?php echo $email ?></td>
              <td style="background-color:yellow;"><?php echo $status ?></td>
           
              <!-- <td><?php echo $level  ?></td> -->
              <td>
              <!-- <a href="editteacher.php?id=<?php echo $id ?>"><input type="button" value="Update" id="u" class="edit"></a> 
              <a href="deletestudent.php?id=<?php echo $id ?>"><input type="button" value="Delete" id="d"></a>-->
              </td>
              </tr>
                  <?php
                  }
                }
              }
              ?>
              </tbody>
          </table>
        </div>
      </section>





      


    
      <section class="teachers" id="section5">
        <div class="teachers-list">
          <h1>Add epicenter</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Latitude</th>
                <th>Longitute</th>
                <th>Radius</th>
                <th colspan="2"> 
                  
                  
                 </th>
                <!-- <th>Email</th>
                <th>Gender</th> -->
                <!-- <th>Subject Taught</th> -->
                <!-- <th colspan="2">Customize</th> -->

              </tr>
              
            </thead>
            <tbody>

           
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="safetogether";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM epicenter";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['id'];
                  $latitude = $row['latitude'];
                  $longitude = $row['longitude'];
                  $radius = $row['radius'];
                  ?>

                  <tr> 
                  <td><?php echo $id  ?></td>
                  <td><?php echo $latitude ?></td>
                  <td><?php echo $longitude ?></td>
                  <td><?php echo $radius  ?></td>

                  <td>
              <a href="updateepicenterform.php?id=<?php echo $id ?>"><input type="button" value="Update" id="u" class="edit"></a>
          


                  <!-- <td><?php echo $email  ?></td> -->
                  <!-- <td><?php echo $gender  ?></td> -->
                  <td>
                  <!-- <a href="edittempteacher.php?id=<?php echo $id ?>"><input type="button" value="Validate" id="u" class="edit"></a> -->
                  <!-- <a href="deletetempteacher.php?id=<?php echo $id?>"><input type="button" value="Reject" id="d"></a> -->
                  </td>
                  </tr>
                  <?php

                }
              }
              ?>
              </tbody>
          </table>
        </div>
      <!-- </section> -->
    </section>






      </section>
      <section class="teachers" id="section4">
        <div class="teachers-list">
          <h1>Users List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Gender</th>
                <!-- <th>Subject Taught</th> -->
                <!-- <th colspan="2">Customize</th> -->

              </tr>
              
            </thead>
            <tbody>

           
            <?php

              $host="localhost";
              $user="root";
              $password="";
              $database="safetogether";
              $con = mysqli_connect($host,$user,$password,$database);

              if(!$con){
                  die('Could not Connect My Sql:');
              }
              $sql = "SELECT * FROM user";

              $result = mysqli_query($con,$sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['user_id'];
                  $cfn = $row['fname'];
                  $cln = $row['lname'];
                  $mob = $row['phone'];
                  $email = $row['email'];
                  $gender = $row['gender'];
                  ?>

                  <tr> 
                  <td><?php echo $id  ?></td>
                  <td><?php echo $cfn ?></td>
                  <td><?php echo $cln ?></td>
                  <td><?php echo $mob  ?></td>
                  <td><?php echo $email  ?></td>
                  <td><?php echo $gender  ?></td>
                  <td>
                  <!-- <a href="edittempteacher.php?id=<?php echo $id ?>"><input type="button" value="Validate" id="u" class="edit"></a> -->
                  <!-- <a href="deletetempteacher.php?id=<?php echo $id?>"><input type="button" value="Reject" id="d"></a> -->
                  </td>
                  </tr>
                  <?php

                }
              }
              ?>
              </tbody>
          </table>
        </div>
      <!-- </section> -->
    </section>










  </div>

  

</body>
</html>
