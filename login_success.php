<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
    session_start();


	if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        
        echo "<h1> Sucessfully login </h1>";
        /*$e=$_SESSION['e_id'];

        if($e==1){
        	echo "gogo";
        }
        if($e==2){
        	echo "NOPNO";
        }*/
        
        echo '<a href="result_submission_c1.php"><button>Proceed</button></a>';
	} 
	else {
		header("location:main_login_page.php");
	}

?>