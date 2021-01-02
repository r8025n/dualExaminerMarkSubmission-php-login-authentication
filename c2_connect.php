<?php

	$server_name="localhost";
	$server_user_name="admin";
	$server_password="abcd1234";
	$database_name="DU_IIT";
	$table_name="1st_examiner_marks";

	session_start();
	
	if(!(isset($_SESSION['username']) && isset($_SESSION['password']))){
    	header("location:main_login_page.php");  
	} 
	
	$conn= mysqli_connect($server_name,$server_user_name,$server_password,$database_name);

	if(!$conn){
		echo "Database Connection Failed";
		header("location:result_submission_c2.php");
	}


	$ct1=$_POST['s1'];
	$ct2=$_POST['s2'];
	$ct3=$_POST['s3'];
	$ct4=$_POST['s4'];
	$ct5=$_POST['s5'];

	$f1=$_POST['sf1'];
	$f2=$_POST['sf2'];
	$f3=$_POST['sf3'];
	$f4=$_POST['sf4'];
	$f5=$_POST['sf5'];

	if($_SESSION['id']==1){ 
		$query1= "UPDATE 1st_examiner_marks SET ct2='$ct1', final2='$f1' WHERE id='201101'";
		$query2= "UPDATE 1st_examiner_marks SET ct2='$ct2', final2='$f2' WHERE id='201102'";
		$query3= "UPDATE 1st_examiner_marks SET ct2='$ct3', final2='$f3' WHERE id='201103'";
		$query4= "UPDATE 1st_examiner_marks SET ct2='$ct4', final2='$f4' WHERE id='201104'";
		$query5= "UPDATE 1st_examiner_marks SET ct2='$ct5', final2='$f5' WHERE id='201105'";
	}

	else if($_SESSION['id']==2){
		$query1= "UPDATE 2nd_examiner_marks SET ct2='$ct1',final2='$f1' WHERE id='201101'";
		$query2= "UPDATE 2nd_examiner_marks SET ct2='$ct1',final2='$f2' WHERE id='201102'";
		$query3= "UPDATE 2nd_examiner_marks SET ct2='$ct1',final2='$f3' WHERE id='201103'";
		$query4= "UPDATE 2nd_examiner_marks SET ct2='$ct1',final2='$f4' WHERE id='201104'";
		$query5= "UPDATE 2nd_examiner_marks SET ct2='$ct1',final2='$f5' WHERE id='201105'";
	}

	if(mysqli_query($conn, $query1) && mysqli_query($conn, $query2) && mysqli_query($conn, $query3) && mysqli_query($conn, $query4) && mysqli_query($conn, $query5)){
		echo "Marks entry was successful";
		echo '<a href="result_submission_c3.php"><button>Next Page</button></a>';
	}
	else{
		header("location:result_submission_c2.php");
	}

?>