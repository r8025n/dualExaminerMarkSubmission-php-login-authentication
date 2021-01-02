<?php
// Check if session is not registered, redirect back to main page.  
    session_start();

	if(!(isset($_SESSION['username']) && isset($_SESSION['password']))){
    	header("location:main_login_page.php");  
	} 

?>


<table width="950" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
    <form name="form3" method="post" action="c1_connect.php">
    <td>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
        <td colspan="4"><strong><h2>COURSE CODE</h2></strong></td>
        <td colspan="1"><strong><h2>:</h2> </strong></td>
        <td colspan="5"><strong><h2>IIT-001</h2> </strong></td>
        </tr>
        <tr>
            <td width="180"><strong>Student ID</strong></td>
            <td width="20"><strong>:</strong></td>
            <td width="100"><strong>201101</strong></td>
            <td width="50">--> </td>
            <td width="180" align="center">Class Test</td>
            <td width="20">:</td>
            <td width="100"><input name="s1" type="number" id="s1"></td>
            <td width="100" align="center">Final</td>
            <td width="20">:</td>
            <td width="100"><input name="sf1" type="number" id="sf1"></td>
        </tr>
        <tr>
            <td><strong>Student ID</strong></td>
            <td><strong>:</strong></td>
            <td><strong>201102</strong></td>
            <td>--> </td>
            <td align="center">Class Test</td>
            <td>:</td>
            <td><input name="s2" type="number" id="s2"></td>
            <td align="center">Final</td>
            <td>:</td>
            <td><input name="sf2" type="number" id="sf2"></td>
        </tr>
        <tr>
            <td><strong>Student ID</strong></td>
            <td><strong>:</strong></td>
            <td><strong>201103</strong></td>
            <td>--> </td>
            <td align="center">Class Test</td>
            <td>:</td>
            <td><input name="s3" type="number" id="s3"></td>
            <td align="center">Final</td>
            <td>:</td>
            <td><input name="sf3" type="number" id="sf3"></td>
        </tr>
        <tr>
            <td><strong>Student ID</strong></td>
            <td><strong>:</strong></td>
            <td><strong>201104</strong></td>
            <td>--> </td>
            <td align="center">Class Test</td>
            <td>:</td>
            <td><input name="s4" type="number" id="s4"></td>
            <td align="center">Final</td>
            <td>:</td>
            <td><input name="sf4" type="number" id="sf4"></td>
        </tr>
        <tr>
            <td><strong>Student ID</strong></td>
            <td><strong>:</strong></td>
            <td><strong>201105</strong></td>
            <td>--> </td>
            <td align="center">Class Test</td>
            <td>:</td>
            <td><input name="s5" type="number" id="s5"></td>
            <td align="center">Final</td>
            <td>:</td>
            <td><input name="sf5" type="number" id="sf5"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td height="50"><input type="submit" name="submit3" value="SUBMIT"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    </td>
    </form>
    </tr>
</table>
