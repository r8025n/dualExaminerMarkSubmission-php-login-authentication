<?php
	$server_name="localhost";
	$server_user_name="admin";
	$server_password="abcd1234";
	$database_name="DU_IIT";
	$table_1="1st_examiner_marks";
	$table_2="2nd_examiner_marks";
	$table_3="final_result";

	$conn= mysqli_connect($server_name,$server_user_name,$server_password,$database_name);

	if(!$conn){
		echo "Database Connection Failed";
	}

	//query11-> query on table 1st_examiner_marks for 1st student
	//query22-> query on table 2nd_examiner_marks for 2nd student

	$query11= "SELECT * FROM 1st_examiner_marks WHERE id='201101'";
	$query12= "SELECT * FROM 1st_examiner_marks WHERE id='201102'";
	$query13= "SELECT * FROM 1st_examiner_marks WHERE id='201103'";
	$query14= "SELECT * FROM 1st_examiner_marks WHERE id='201104'";
	$query15= "SELECT * FROM 1st_examiner_marks WHERE id='201105'";

	//row12 -> 1st examiner table, 2nd row means row for the 2nd student
	$row11= mysqli_fetch_assoc(mysqli_query($conn,$query11));
	$row12= mysqli_fetch_assoc(mysqli_query($conn,$query12));
	$row13= mysqli_fetch_assoc(mysqli_query($conn,$query13));
	$row14= mysqli_fetch_assoc(mysqli_query($conn,$query14));
	$row15= mysqli_fetch_assoc(mysqli_query($conn,$query15));

	$query21= "SELECT * FROM 2nd_examiner_marks WHERE id='201101'";
	$query22= "SELECT * FROM 2nd_examiner_marks WHERE id='201102'";
	$query23= "SELECT * FROM 2nd_examiner_marks WHERE id='201103'";
	$query24= "SELECT * FROM 2nd_examiner_marks WHERE id='201104'";
	$query25= "SELECT * FROM 2nd_examiner_marks WHERE id='201105'";

	$row21= mysqli_fetch_assoc(mysqli_query($conn,$query21));
	$row22= mysqli_fetch_assoc(mysqli_query($conn,$query22));
	$row23= mysqli_fetch_assoc(mysqli_query($conn,$query23));
	$row24= mysqli_fetch_assoc(mysqli_query($conn,$query24));
	$row25= mysqli_fetch_assoc(mysqli_query($conn,$query25));

	//res123-> result of the 2nd student on third course by 1st examiner
	$res111= $row11['ct1']+$row11['final1'];//
	$res112= $row11['ct2']+$row11['final2'];// 3 course result of 1st student by 1st examiner
	$res113= $row11['ct3']+$row11['final3'];//

	$res121= $row12['ct1']+$row12['final1'];
	$res122= $row12['ct2']+$row12['final2'];
	$res123= $row12['ct3']+$row12['final3'];

	$res131= $row13['ct1']+$row13['final1'];
	$res132= $row13['ct2']+$row13['final2'];
	$res133= $row13['ct3']+$row13['final3'];

	$res141= $row14['ct1']+$row14['final1'];
	$res142= $row14['ct2']+$row14['final2'];
	$res143= $row14['ct3']+$row14['final3'];

	$res151= $row15['ct1']+$row15['final1'];
	$res152= $row15['ct2']+$row15['final2'];
	$res153= $row15['ct3']+$row15['final3'];

	//res223-> result of the 2nd student on third course by 2nd examiner
	$res211= $row21['ct1']+$row21['final1'];//
	$res212= $row21['ct2']+$row21['final2'];// 3 course result of 1st student by 2nd examiner
	$res213= $row21['ct3']+$row21['final3'];//

	$res221= $row22['ct1']+$row22['final1'];
	$res222= $row22['ct2']+$row22['final2'];
	$res223= $row22['ct3']+$row22['final3'];

	$res231= $row23['ct1']+$row23['final1'];
	$res232= $row23['ct2']+$row23['final2'];
	$res233= $row23['ct3']+$row23['final3'];

	$res241= $row24['ct1']+$row24['final1'];
	$res242= $row24['ct2']+$row24['final2'];
	$res243= $row24['ct3']+$row24['final3'];

	$res251= $row25['ct1']+$row25['final1'];
	$res252= $row25['ct2']+$row25['final2'];
	$res253= $row25['ct3']+$row25['final3'];

	//////////////////////////////////////////////////////////1st student
	if(abs($res111-$res211)<20){
		$res=(float)(($res111+$res211)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_001='$res' WHERE student_id='201101'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_001='-1' WHERE student_id='201101'");
	}

	if(abs($res112-$res212)<20){
		$res=(float)(($res112+$res212)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_002='$res' WHERE student_id='201101'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_002='-1' WHERE student_id='201101'");
	}

	if(abs($res113-$res213)<20){
		$res=(float)(($res113+$res213)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_003='$res' WHERE student_id='201101'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_003='-1' WHERE student_id='201101'");
	}
	////////////////////////////////////////////////////////////////////2nd student
	
	if(abs($res121-$res221)<20){
		$res=(float)(($res121+$res221)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_001='$res' WHERE student_id='201102'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_001='-1' WHERE student_id='201102'");
	}

	if(abs($res122-$res222)<20){
		$res=(float)(($res122+$res222)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_002='$res' WHERE student_id='201102'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_002='-1' WHERE student_id='201102'");
	}

	if(abs($res123-$res223)<20){
		$res=(float)(($res123+$res223)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_003='$res' WHERE student_id='201102'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_003='-1' WHERE student_id='201102'");
	}

	////////////////////////////////////////////////////////////3rd student
	if(abs($res131-$res231)<20){
		$res=(float)(($res131+$res231)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_001='$res' WHERE student_id='201103'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_001='-1' WHERE student_id='201103'");
	}

	if(abs($res132-$res232)<20){
		$res=(float)(($res132+$res232)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_002='$res' WHERE student_id='201103'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_002='-1' WHERE student_id='201103'");
	}

	if(abs($res133-$res233)<20){
		$res=(float)(($res133+$res233)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_003='$res' WHERE student_id='201103'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_003='-1' WHERE student_id='201103'");
	}

	///////////////////////////////////////////////////////////////4th student
	if(abs($res141-$res241)<20){
		$res=(float)(($res141+$res241)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_001='$res' WHERE student_id='201104'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_001='-1' WHERE student_id='201104'");
	}

	if(abs($res142-$res242)<20){
		$res=(float)(($res142+$res242)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_002='$res' WHERE student_id='201104'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_002='-1' WHERE student_id='201104'");
	}

	if(abs($res143-$res243)<20){
		$res=(float)(($res143+$res243)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_003='$res' WHERE student_id='201104'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_003='-1' WHERE student_id='201104'");
	}

	///////////////////////////////////////////////////////////////5th student
	if(abs($res151-$res251)<20){
		$res=(float)(($res151+$res251)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_001='$res' WHERE student_id='201105'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_001='-1' WHERE student_id='201105'");
	}

	if(abs($res152-$res252)<20){
		$res=(float)(($res152+$res252)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_002='$res' WHERE student_id='201105'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_002='-1' WHERE student_id='201105'");
	}

	if(abs($res153-$res253)<20){
		$res=(float)(($res153+$res253)/2);
		mysqli_query($conn,"UPDATE final_result SET iit_003='$res' WHERE student_id='201105'");
	}
	else{
		mysqli_query($conn,"UPDATE final_result SET iit_003='-1' WHERE student_id='201105'");
	}





	header("location:logout2.php");
?>