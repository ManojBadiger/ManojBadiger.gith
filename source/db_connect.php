<?php
    $server="sql303.epizy.com";
	$username="epiz_26186197";
    $password="bE5c5fRU6FBy8ae";
	$dbname="epiz_26186197_mydb";
	$conn=mysqli_connect($server, $username, $password, $dbname);
	if(!$conn)
	{
		die("Connection failed".mysqli_connect_error());
	}
	?>