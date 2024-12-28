<?php

session_start();

if (!isset($_SESSION['uname'])) {
        
    
    echo '<script> alert("Please Login First");window.location = \'sign_in.php\';</script>';
    }


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>available food</title>

    <link rel="stylesheet" href="../css/available.css">
</head>
<body>
    <div class="header">
        <center><h1>AVAILABLE FOODS</h1></center>
    </div>

    <div class="by">
        <ul>
            <li><a href="available.php">HOME</a></li>
            <li><a href="order.php">MY ORDER</a></li>
            <li><a href="picture.php">PICTURE</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            <li><?php   

              echo $_SESSION['uname'];

              ?></li>
        </ul>
    </div>
    <div class="food1">
        <center>
            <br><br><br>
        <h3>Category: Dinner</h3>
<br><br>
        <p>Your choice is very important</p><br>
        <h4>Price: 2$ = 2000 FRW</h4><br>
             <a href="food.php"><button>VIEW THIS FOOD</button></a>
            </center>
    </div>
    <div class="food2">
        <center>
            <br><br><br>
        <h3>Category: Dinner</h3>
<br><br>
        <p>Your choice is very important</p><br>
        <h4>Price: 2$ = 2000 FRW</h4><br>
             <a href="food.php"><button>VIEW THIS FOOD</button></a>
            </center>
    </div>
    <div class="food3">
        <center>
            <br><br><br>
        <h3>Category: Dinner</h3>
<br><br>
        <p>Your choice is very important</p><br>
        <h4>Price: 2$ = 2000 FRW</h4><br>
             <a href="food.php"><button>VIEW THIS FOOD</button></a>
            </center>
    </div>
    <div class="food4">
        <center>
            <br><br><br>
        <h3>Category: Dinner</h3>
<br><br>
        <p>Your choice is very important</p><br>
        <h4>Price: 2$ = 2000 FRW</h4><br>
             <a href="food.php"><button>VIEW THIS FOOD</button></a>
            </center>
    </div>
    <!-- <footer>
        copyright@Freddy
    </footer> -->
</body>
</html>