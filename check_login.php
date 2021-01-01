<?php
	$servername = "localhost";
	$username = "admin";
	$password = "abcd1234";
	$dbname = "DU_IIT";
	$tbl_name="examiners"; // Table name 

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		echo "Database Connection Failed";
		echo '<a href="main_login_page.php"><button>BACK</button></a>';
	}

	//$e_id=$_POST['tid'];
	$e_username= $_POST['uname'];
	$e_password= $_POST['pass'];
	
	$e_username= stripslashes($e_username);
	$e_password= stripslashes($e_password);
	//echo $e_password;
	//echo "ok";
	$e_username= mysqli_real_escape_string($conn, $e_username);
	$e_password= mysqli_real_escape_string($conn, $e_password);
	
	$e_password_hash= hash('sha512', $e_password);
	
	//echo $e_username;

	$query= "SELECT * FROM examiners WHERE username='$e_username' and paswd='$e_password_hash'";

	$result=mysqli_query($conn,$query);
	// Mysql_num_row is counting table row
	// If result matched $myusername and $mypassword, table row must be 1 row
	$count=mysqli_num_rows($result);
	echo "count=".$count;

	if($count==1){

		session_start();

		$_SESSION['username']=$e_username;
		$_SESSION['password']=$e_password_hash;
		echo"<h1> Welcome $myusername </h1>";
		header("location:login_success.php");
	}

	else {
        echo "<h1> Wrong username and password </h1>";
        echo '<a href="main_login_page.php"><button>back</button></a>';
	}


?>