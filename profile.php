<?php 
// use the session
session_start();
// if not logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}

include('db.php');
// get results
$stmt = $con->prepare('SELECT password, email, Naam, Telefoonnummer, Branche, adres, Woonplaats FROM studenten WHERE id = ?');
// GET ACCOUNT INFO BY ID
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $Naam, $Telefoonnummer, $Branche, $adres, $Woonplaats);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profiel pagina</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<?php
		include('header.php');
		?>
		<div class="content">
			<h2>Profiel pagina</h2>
			<div>
				<p>Dit zijn je gegevens:</p>
				<table>
					<tr>
						<td>Naam:</td>
						<td><?=$Naam?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
					<tr>
						<td>Wachtwoord:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Telefoonnummer:</td>
						<td><?=$Telefoonnummer?></td>
					</tr>
					<tr>
						<td>Adres:</td>
						<td><?=$adres?> in  <?=$Woonplaats?></td>
					</tr>
					<tr>
						<td>Branche:</td>
						<td><?=$Branche?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>