<?php
   include 'conn.php';
   
   if (isset($_POST['ok'])) {
       
       $uname = $_POST['uname'];
       $pass = $_POST['pass'];

       $sel= "SELECT * from customers where username= '$uname' AND password='$pass'";

       $sql=mysqli_query($conn,$sel);

       if ($num= mysqli_num_rows($sql) ==0) {
           
           echo '<script> alert("Incorrect Username or Password")</script>';
       }

       else{
        session_start();

        $_SESSION['uname'] = $uname;

        header('location:available.php');
       }
   }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME</title>
    <link rel="stylesheet" href="../css/sign_in.css">
</head>
<body>
   
    <center>
   <form action="sign_in.php" method="POST">
    <fieldset><h1>L &nbsp;O&nbsp;G&nbsp;I&nbsp;N</h1>
    <label for="Username" class="lb">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        USERNAME</label><br>
    <input type="text" name="uname" class="in"><br><br>
    <label for="Username" class="lb">Password</label><br>
    <input type="password" name="pass" class="in"><br><br>
     </select><br><br>
   <button name="ok"> <a href="available.php">LOGIN</a></button>
</fieldset>
   </form> 
</center>
<div class="left">
    <h5>YOU ARE WELCOME</h5>
    <P>Login for more information</P>

    or   &nbsp;&nbsp;&nbsp;&nbsp;<a href="regi.php">Create Account</a>
</div>

</body>
</html>