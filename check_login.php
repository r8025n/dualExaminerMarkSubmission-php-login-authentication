<?php
	$server_name="localhost";
	$db_user_name="admin";
	$db_password="abcd1234";
	$database_name="DU_IIT";
	$table_name="examiners";

	$conn= mysqli_connect($server_name,$server_user_name,$server_password,$database_name);

	if(!$conn){
		echo "Database Connection Failed";
		echo '<a href="main_login_page.php"><button>BACK</button></a>';
	}

	$e_username= $_POST['uname'];
	$e_password= $_POST['pass'];

	$e_username= stripslashes(username);
	$e_password= stripslashes(password);

	$e_username= mysqli_real_escape_string($conn, $username);
	$e_password= mysqli_real_escape_string($conn, $password);

	$e_password_hash= hash('sha512', $e_password);

	$query_1= "SELECT * FROM $table_name WHERE BINARY username='e_username' and password='e_password_hash'";

	$result=mysqli_query($conn,$query_1);
	// Mysql_num_row is counting table row
	// If result matched $myusername and $mypassword, table row must be 1 row
	$count=mysqli_num_rows($result);

	if($count==1){

		session_start();

		$_SESSION('uname')=$e_username;
		$_SESSION('pass')=$e_password_hash;
		echo"<h1> Welcome $myusername </h1>";
		header("location:login_success.php");
	}

	else {
        echo "<h1> Wrong username and password </h1>";
        echo '<a href="main_login_page.php"><button>back</button></a>';
	}


?>