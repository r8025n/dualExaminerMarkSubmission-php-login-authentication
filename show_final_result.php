<?php
	$server_name="localhost";
	$server_user_name="admin";
	$server_password="abcd1234";
	$database_name="DU_IIT";
	$table_name="final_result";

	$conn= mysqli_connect($server_name,$server_user_name,$server_password,$database_name);

	if(!$conn){
		echo "Database Connection Failed";
	}

	$query1= "SELECT * FROM final_result WHERE student_id='201101'";
	$query2= "SELECT * FROM final_result WHERE student_id='201102'";
	$query3= "SELECT * FROM final_result WHERE student_id='201103'";
	$query4= "SELECT * FROM final_result WHERE student_id='201104'";
	$query5= "SELECT * FROM final_result WHERE student_id='201105'";

	$row1= mysqli_fetch_assoc(mysqli_query($conn,$query1));
	$row2= mysqli_fetch_assoc(mysqli_query($conn,$query2));
	$row3= mysqli_fetch_assoc(mysqli_query($conn,$query3));
	$row4= mysqli_fetch_assoc(mysqli_query($conn,$query4));
	$row5= mysqli_fetch_assoc(mysqli_query($conn,$query5));

	function result($x){
		if($x==-1){
			echo "Recheck Needed";
		}
		else{
			echo $x;
		}
	}

?>

	<a href="home_page.php"><button>Home Page</button></a>

	<table width="950" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
    <td>
    <table width="100%" border="1" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
        <td><strong><h2>Student ID</h2></strong></td>
        <td><strong><h2>IIT-001 Mark</h2> </strong></td>
        <td><strong><h2>IIT-002 Mark</h2> </strong></td>
        <td><strong><h2>IIT-003 Mark</h2> </strong></td>
        </tr>
        <tr>
        	<td><strong>201101</strong></td>
            <td><strong><?php result($row1['iit_001']);?></strong></td>
            <td><strong><?php result($row1['iit_002']);?></strong></td>
            <td><strong><?php result($row1['iit_003']);?></strong></td>
        </tr>
        <tr>
            <td><strong>201102</strong></td>
            <td><strong><?php result($row2['iit_001']);?></strong></td>
            <td><strong><?php result($row2['iit_002']);?></strong></td>
            <td><strong><?php result($row2['iit_003']);?></strong></td>
        </tr>
        <tr>
            <td><strong>201103</strong></td>
            <td><strong><?php result($row3['iit_001']);?></strong></td>
            <td><strong><?php result($row3['iit_002']);?></strong></td>
            <td><strong><?php result($row3['iit_003']);?></strong></td>
        </tr>
        <tr>
            <td><strong>201104</strong></td>
            <td><strong><?php result($row4['iit_001']);?></strong></td>
            <td><strong><?php result($row4['iit_002']);?></strong></td>
            <td><strong><?php result($row4['iit_003']);?></strong></td>
        </tr>
        <tr>
            <td><strong>201105</strong></td>
            <td><strong><?php result($row5['iit_001']);?></strong></td>
            <td><strong><?php result($row5['iit_002']);?></strong></td>
            <td><strong><?php result($row5['iit_003']);?></strong></td>
        </tr>
    </table>
    </td>
    </tr>
</table>