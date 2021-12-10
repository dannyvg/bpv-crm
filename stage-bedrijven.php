

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
		<title>Stage bedrijven</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
    <?php
		include('header.php');
		?>
		<div class="content">
			<h2>Stage Bedrijven</h2><a href="stage_bedrijven_toevoegen.php">Toevoegen</a>
			<div>
            <?php
    include('db.php');
    $sql = "SELECT * FROM stage_bedrijven";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>Stage bedrijf</th><th>Locatie</th><th></th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            $idstage = $row["id"];
            echo "<tr><td>" . "<a href='bedrijven-detail.php?id=$idstage'>" . $idstage . "</a></td><td>" . $row["Naam_bedrijf"] . "</td><td>" . 
                $row["Woonplaats"] . "</td>" . "<td>" . "</td>" . "<td>" . $row["Adres"] . "</td>". "<td>" 
                . "</td><td><div class='links'><a href='delete_stagebedrijven.php?id=$idstage&action=delete' id='detail'><i class='far fa-trash-alt link'>verwijderen</i></a>" 
                . "<a href='edit_stagebedrijven.php?id=$idstage&action=edit' id='detail'><i class='fas fa-edit link'>bewerken </a></i> </div>" . "</td></tr>" ;
                "</tr>" . "<br>";

        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
				
			</div>
		</div>
	</body>
</html>