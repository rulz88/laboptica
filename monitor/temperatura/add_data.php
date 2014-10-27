<?php
    // Connect to MySQL
    include("dbconnect.php");
	$SQL = "INSERT INTO temperature (celsius) VALUES ('".$_GET["temperature"]."')";
	echo $SQL;
    // Execute SQL statement
    mysql_query($SQL);
    // Go to the review_data.php 
    header("Location: review_data.php");
?>