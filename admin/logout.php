<?php
	session_start();
	session_unset (); 
	session_destroy();
	header ('LOCATION:/GREEN-FARM/indexpage.php');


?>