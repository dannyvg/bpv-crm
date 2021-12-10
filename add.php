<?php

include("db.php");

session_start();


$Naam = mysqli_real_escape_string($con,$_POST['Naam']);
$Branche = mysqli_real_escape_string($con,$_POST['Branche']);
// $Stage_Bedrijven= mysqli_real_escape_string($con,$_POST['Stage_Bedrijven']);
$BPV_Begeleider_school= mysqli_real_escape_string($con,$_POST['BPV_Begeleider_school']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$password= mysqli_real_escape_string($con,$_POST['password']);
$Adres= mysqli_real_escape_string($con,$_POST['Adres']);
$woonplaats= mysqli_real_escape_string($con,$_POST['woonplaats']);
$Telefoonnummer= mysqli_real_escape_string($con,$_POST['Telefoonnummer']);
// $Reviews= mysqli_real_escape_string($con,$_POST['Reviews']);




        $sql="INSERT INTO studenten (BPV_Begeleider_school, email, password, Naam, Adres, woonplaats, Telefoonnummer, Reviews, Branche) 
        VALUES ('$BPV_Begeleider_school', '$email', '$password', '$Naam', '$Adres', '$woonplaats', '$Telefoonnummer', '-', '$Branche');";

        $result= $con->query($sql) or die(mysqli_error($con));

        if($result){
            $message = "Succesvol opgeslagen";
             header("Refresh:0.1; url=Studenten.php");
            }

            else {
            echo "ERROR!";
            }

mysqli_close($con);
?>