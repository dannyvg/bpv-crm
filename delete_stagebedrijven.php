<?php 
include 'db.php';
if ($_GET["action"] == "delete") {
    
    $idstage = $_GET['id'];
    $sql = "DELETE FROM stage_bedrijven WHERE id = $idstage";
    $result = mysqli_query($con, $sql);
    header('Location: stage-bedrijven.php');
}