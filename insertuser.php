<?php
        // $host="localhost";
        // $user="root";
        // $password="";
        // $database="safetogether";
        // $con = mysqli_connect($host,$user,$password,$database);

        // if(!$con){
        //     die('Could not Connect My Sql:');
        // }

        include 'config.php';

        
        

        if(isset($_POST['submit']))
        {	

            $cfn = $_POST['cfn'];
            $cln = $_POST['cln'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $mob = $_POST['mob'];
            $gender = $_POST['gender'];
            $pw = $_POST['pw'];
            // $cpw = $_POST['cpw'];
            $econtact = $_POST['econtact1'];
            $econtact2 = $_POST['econtact2'];
            
            $tole = $_POST['street'];
            $mun = $_POST['mun'];
            $wno = $_POST['wno'];
            $district = $_POST['district'];

            $bg = $_POST['bg'];
            $allergy = $_POST['allergy'];
            $medication = $_POST['medication'];
            $alertstatus = "green";

            // $elevel = $_POST['glevel'];
            // $ffn = $_POST['ffn'];
            // $mfn = $_POST['mfn'];

            // $filename = $_FILES["ppimg"]["name"];
            // $tempname = $_FILES["ppimg"]["tmp_name"];
            // $folder = "images/".$filename;
            // move_uploaded_file($tempname,$folder);
           
            // $type = "s";
          

            $sql = "INSERT INTO `user`(`fname`, `lname`, `dob`,`email`,`pw`, `gender`, `phone`,`emergency contact 1`,`emergency contact 2`,`tole`,`municipality`,`district`,`ward`,`bloodgroup`,`allergy`,`current medication`,`alert status`) VALUES ( '$cfn','$cln','$dob','$email','$pw','$gender','$mob','$econtact','$econtact2','$tole','$mun','$district','$wno','$bg','$allergy','$medication','$alertstatus')";






                if (mysqli_query($con, $sql)) {
                    
                    if(shell_exec(escapeshellcmd('python registerloctolatlong.py '))){
                        echo "success111";
                    }
                    else{
                        echo "failed111";
                    }
                    // header('location:../html/profile.php');
                    header('location:login.php');
                    echo "success";
                }else {

                    
                        echo 'Error: ' . mysqli_error($con);
                   
                    // echo 'teacher registration failed';
                }

	        mysqli_close($con);
            
            
        }
        

?>









