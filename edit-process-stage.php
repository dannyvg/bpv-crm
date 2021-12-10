<?php 
    include('db.php');
    $idstage=$_GET['id'];

    $idstage_sql = $_POST['id'];
    $Naam_bedrijf_sql = $_POST['Naam_bedrijf'];
    $Adres_sql = $_POST['Adres'];
    $Plaats_sql = $_POST['Plaats'];
    $Telefoonnummer_sql = $_POST['Telefoonnummer'];
    $Website_sql = $_POST['Website'];
    $Praktijkbegleiders_sql = $_POST['Praktijkbegleiders'];

    mysqli_query($con, "UPDATE stage_bedrijven SET
    Naam_bedrijf = '$Naam_bedrijf_sql', Adres = '$Adres_sql', Woonplaats = '$Plaats_sql', Telefoonnummer = '$Telefoonnummer_sql', Website = '$Website_sql', Praktijkbegleiders= '$Praktijkbegleiders_sql' WHERE id = $idstage");



header('location:stage-bedrijven.php');
?>