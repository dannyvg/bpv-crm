<?php
	include('db.php');
	$idstud=$_GET['id'];
 
    $idstud_sql = $_POST['id'];
      $BPV_Begeleider_school_sql= $_POST['BPV_Begeleider_school'];
      $email_sql = $_POST['email'];
      $Naam_sql = $_POST['Naam']; 
      $Adres_sql = $_POST['Adres'];
      $Woonplaats_sql = $_POST['Woonplaats'];
      $Telefoonnummer_sql = $_POST['Telefoonnummer'];
      $Branche_sql = $_POST['Branche'];
 
	mysqli_query($con,"UPDATE studenten SET 
    BPV_Begeleider_school = '$BPV_Begeleider_school_sql', email = '$email_sql', Naam = '$Naam_sql', Adres = '$Adres_sql', Woonplaats = '$Woonplaats_sql', Telefoonnummer = '$Telefoonnummer_sql', Branche = '$Branche_sql' WHERE id = $idstud");

    
header('location:studenten.php');
?>