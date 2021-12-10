<?php 

include("db.php");

session_start();


$Naam_bedrijf = mysqli_real_escape_string($con,$_POST['Naam_bedrijf']);
$Adres = mysqli_real_escape_string($con,$_POST['Adres']);
$Plaats= mysqli_real_escape_string($con,$_POST['Plaats']);
$Telefoonnummer= mysqli_real_escape_string($con,$_POST['Telefoonnummer']);
$Website= mysqli_real_escape_string($con,$_POST['Website']);
$Praktijkbegleiders= mysqli_real_escape_string($con,$_POST['Praktijkbegleiders']);



$sql="INSERT INTO stage_bedrijven (Naam_bedrijf, Adres, Woonplaats, Telefoonnummer, Website, Praktijkbegleiders)
VALUES ('$Naam_bedrijf', '$Adres', '$Plaats', '$Telefoonnummer', '$Website', '$Praktijkbegleiders');";

$result= $con->query($sql) or die(mysqli_error($con));

if ($result){
    $message = "Succesvol opgeslagen";
    header ("Refresh:0.1; url=stage-bedrijven.php");
}

else {
    echo "ERROR";
}

mysqli_close($con);


?>