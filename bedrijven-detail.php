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
			<h2>Stage bedrijven</h2>
            <!-- <a href="toevoegen.php">Toevoegen</a> -->
			<div>
            <?php
               include('db.php');
               $id = $_GET['id'];
               $sql = "SELECT * FROM stage_bedrijven 
               where stage_bedrijven.id = $id";
               $result = mysqli_query($con, $sql);
               if (mysqli_num_rows($result) > 0) {
                echo "<table><tr><th>Bedrijf</th><th>Adres</th><th>Plaats</th><th>Nummer</th><th>Website</th><th>Praktijkbegleiders</th></tr>";
                   while($row = mysqli_fetch_assoc($result))
                   {
                       echo "<tr><td>" . ""  . $row["Naam_bedrijf"]. "</td><td>"  .$row["Adres"] . "</td><td>". $row["Woonplaats"] ."</td><td>" .$row["Telefoonnummer"] . 
                       "</td><td>" .$row["Website"] . "</td><td>".$row["Praktijkbegleiders"] . "</td></tr>";
                   }
                   echo "</table>";
               }
               echo "<br/>";

               $SQL = "SELECT *
               FROM studenten_has_stage_bedrijven
               inner JOIN studenten
               ON studenten.id = studenten_has_stage_bedrijven.id_studenten
               where id_stage_bedrijfen = $id";

             
               $result = mysqli_query($con, $SQL);

               
              if (mysqli_num_rows($result) > 0) {
              echo "<table><tr><th>Studenten</th>";
                  while($row = mysqli_fetch_assoc($result))
                  {
                      echo "<tr><td>" . $row["Naam"]."</td></tr>";
                  }
               echo "</table>";
              }
              else{
                  echo "";
              }

              
            ?>
				
			</div>
		</div>
	</body>
</html>