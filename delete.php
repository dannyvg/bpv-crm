
<?php
include 'db.php';
if ($_GET["action"] == "delete") {
    // echo "ik Remove";
    $idstud = $_GET['id'];
    $sql = "DELETE FROM studenten WHERE id = $idstud";
    $result = mysqli_query($con, $sql);
    header('Location: studenten.php');
  }


