<?php
// Starting session
session_start();
//if not logged in redirect to login page
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Studenten</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

        <form id="form1" action="Add.php" method="post">






	</head>
	<body class="loggedin">
    <?php
		include('header.php');
		?>
		<div class="content">
			<h2>Studenten</h2><a href="toevoegen.php">Toevoegen</a>
			<div>
            <?php
               include('db.php');
               $id = $_GET['id'];
               $sql = "SELECT *, studenten.Naam FROM studenten 
               where studenten.id = $id";
               $result = mysqli_query($con, $sql);
               if (mysqli_num_rows($result) > 0) {
                echo "<table><tr><th>Naam</th><th>Email</th><th>Adres</th><th>Woonplaats</th><th>Telefoonnummer</th><th>Branche</th></tr>";
                   while($row = mysqli_fetch_assoc($result))
                   {
                       echo "<tr><td>" . ""  . $row["Naam"]. "</td><td>"  .$row["email"] . "</td><td>". $row["Adres"] ."</td><td>" .$row["Woonplaats"] . 
                       "</td><td>" .$row["Telefoonnummer"] . "</td><td>".$row["Branche"] . "</td></tr>";
                   }
                   echo "</table>";
               }

               $SQL = "SELECT *
                FROM studenten_has_stage_bedrijven
                LEFT JOIN stage_bedrijven
                ON stage_bedrijven.id=studenten_has_stage_bedrijven.id_stage_bedrijfen
                WHERE id_studenten=$id";
              
                $result = mysqli_query($con, $SQL);

                
               if (mysqli_num_rows($result) > 0) {
               echo "<table><tr><th>Stage bedrijven</th>";
                   while($row = mysqli_fetch_assoc($result))
                   {
                       echo "<tr><td>" . $row["Naam_bedrijf"]."</td></tr>" ."<br>";
                   }
                echo "</table>";
               }

            ?>
				
			</div>
		</div>
	</body>
</html>