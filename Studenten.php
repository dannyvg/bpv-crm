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
    $sql = "SELECT * FROM studenten";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>Naam</th><th></th><th></th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            $idstud = $row["id"];
            echo "<tr><td>" . "<a href='detail.php?id=$idstud'>" . $idstud . "</a></td><td>" . $row["Naam"] . "</td><td>" . 
                $row["Branche"] . "</td>" . "<td>" . "</td>" . "<td>"
                . "</td><td><div class='links'><a href='delete.php?id=$idstud&action=delete' id='detail'><i class='far fa-trash-alt link'>verwijderen</i></a>" 
                . "<a href='edit.php?id=$idstud&action=edit' id='detail'><i class='fas fa-edit link'>bewerken </a></i> </div>" . "</td></tr>" ;
        

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