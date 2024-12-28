<?php

include 'conn.php';


if (isset($_POST['ok'])) {
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $phone=$_POST['phone'];
    $pass=$_POST['pass'];
    $pass2=$_POST['pass2'];

     $sel="SELECT * FROM customers where username='$uname'";
    $quer=mysqli_query($conn,$sel);



    if(empty($fname) || empty($lname)|| empty($uname) || empty($phone) || empty($pass)){

        echo '<script> alert("Error! fill empty field")</script>';
    }

     else{

        if ($num=mysqli_num_rows($quer)==1) {
            echo '<script> alert(" please username has been  taken")</script>';
        }

     else{


         if($pass != $pass2){

            echo '<script> alert("Error! confirm password does not match with password")</script>';
         }
         else{
        
        $ins="INSERT INTO customers SET fname='$fname',lname='$lname',username='$uname',phone='$phone',password='$pass'";
        $quer=mysqli_query($conn,$ins);
       
         if($quer)
              {
                  mysqli_query($conn, $quer);
                  echo '<script> alert("User Created Successful");window.location = \'sign_in.php\';</script>';
              }
             
         }
     }
 }

 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link rel="stylesheet" href="regi.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/regi.css">
</head>
<body>
    <center>
        <form action="regi.php" method="post">
            <fieldset><h2>REGISTRATION FORM</h2>

            <label for="First_name" class="lb">FIRST NAME</label><br>
            <input type="text" name="fname" class="in" required><br><br>

            <label for="last_name" class="lb">LAST NAME</label><br>
            <input type="text" class="in" name="lname" required><br><br>

            <label for="user_name"class="lb">USER NAME</label><br>
            <input type="text" class="in"  name="uname" required><br><br>

            <label for="phone"class="lb">PHONE</label><br>
            <input type="text" minlength="10"
             maxlength="10" class="in" name="phone" required><br><br>
            <label for="YOUR FIELD"></label>

            <label for="password"class="lb">
            PASSWORD</label><br>
            <input type="password" minlength="6" name="pass" class="in" required><br><br>
            <label for="password"class="lb"> CONFIRM PASSWORD</label><br>
            <input type="password" name="pass2" class="in" required><br><br>
            <button name="ok">Create Account</button>
            <a href="sign_in.php">login</a><br>
        </fieldset>
        </form>
    </center>
</body>
</html>







