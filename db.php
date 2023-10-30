<?php

$dbhost = 'localhost:3307';
$dbuser = '';
$dbpass = '';
$dbname = '';

// Connecting to db
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ( mysqli_connect_errno() ) {
    die ("connection failed: ". mysqli_connect_error());
} 

?>
