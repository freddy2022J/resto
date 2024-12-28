<?php
    session_start();
    
	echo '<script> alert("Thank you for using our system");</script>';
	session_destroy();
	
?>