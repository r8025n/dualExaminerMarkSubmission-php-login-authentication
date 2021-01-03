<?php

	session_start();
	if($_SESSION['id']==2){
		session_destroy();
		header("location:result_calculation.php");
	}
	else{
		session_destroy();
	    
	    echo "<h1>You have successfully logged out</br>";
	    echo '<a href="home_page.php"><button>Home Page</button></a>';
	}
	
 ?>