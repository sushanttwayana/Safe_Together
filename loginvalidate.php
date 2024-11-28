
<?php session_start();?>
<?php

include 'config.php';



if(isset($_POST['login'])) {	
    
    $email = $_POST['email'];
    echo "email entered: " . $email; // Debug statement
    $password = $_POST['password'];
    echo "pw entered: " . $password; // Debug statement
    
if ($email == 'admin@gmail.com') {
                    header('Location: ../Ananta/admin/admindashboard.php?success=true');
                    exit; // Ensure the script stops execution after redirection
}
    $sql = "SELECT * FROM user WHERE TRIM(email)=TRIM('$email')";
    $result = mysqli_query($con, $sql);
    if($result) {

        if(mysqli_num_rows($result) > 0) {
            

        while($row = mysqli_fetch_assoc($result)) {
    // echo $name;
    // Print the result depending if they match
            if ($row['pw'] == $password) {

                $_SESSION["email"] = $email;
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["name"] = $row['fname'];
                echo $row['fname'];
                echo $_SESSION["name"];
                header('Location: ../Ananta/User/index.php?success=true');
                    exit;
               
                 
                
            } else {
                echo 'Error: Password mismatch'; // Debug statement
            }
        }
    } else {
        echo 'Error: ...' . mysqli_error($con); // Debug statement
    }
    
        
    
}
    mysqli_close($con);
}
?>




