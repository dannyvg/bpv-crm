<?php
// Starting session
session_start();
//if not logged in redirect to login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
include('db.php');
$stmt = $con->prepare('SELECT Naam FROM studenten WHERE id = ?');
// GET ACCOUNT INFO BY ID
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($Naam);
$stmt->fetch();
$stmt->close();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
	<?php
		include('header.php');
		?>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welkom terug,  <?=$Naam?>!</p>
		
		</div>
	</body>
</html>