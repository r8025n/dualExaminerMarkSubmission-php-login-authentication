<?php

	session_start();
	session_destroy();
    
    echo "<h1>You have successfully logged out</br>";
    echo '<a href="main_login.php"><button>Login</button></a>';
 ?>