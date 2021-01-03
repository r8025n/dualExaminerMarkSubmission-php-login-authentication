<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
    session_start();


	if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        
        echo "<h1> Sucessfully logged in </h1>";
        
        echo '<a href="result_submission_c1.php"><button>Proceed</button></a>';
	} 
	else {
		header("location:main_login_page.php");
	}

?>