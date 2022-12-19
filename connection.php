<?php 
//Set up the database access credentials
$hostname = 'localhost'; 
$name = 'root'; //your standard uni id
$pass = '';  // the password found on the W: drive
$databaseName = 'Project-Management'; //the name of the db you are using on phpMyAdmin
$connection = mysqli_connect($hostname, $name, $pass, $databaseName) or exit("Unable to connect to database!");
?>