<?php
include 'db.php';

if ($_GET["action"] == "edit") {
      // echo " ik Edit ";
      $idstud = $_GET['id'];
      $sql = "SELECT id, BPV_Begeleider_school, email, Naam, Adres, Woonplaats, Telefoonnummer, Branche FROM studenten WHERE id = $idstud"; 
      $result = mysqli_query($con, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) 
        {
          $idstud = $row['id'];
          $BPV_Begeleider_school= $row['BPV_Begeleider_school'];
          $email = $row['email'];
          $Naam = $row['Naam']; 
          $Adres = $row['Adres'];
          $Woonplaats = $row['Woonplaats'];
          $Telefoonnummer = $row['Telefoonnummer'];
          $Branche = $row['Branche'];
          
        }
        
      }
    }

?>


    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pagina's Bewerken</title>
        <!--<link rel="stylesheet" href="klant_bewerken.css">
        <link rel="stylesheet" href="fontawesome/css/all.min.css"> -->
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="loggedin">
<?php 
  include('header.php');
?>
<div class="content">  
    <div class="form">
  <form method="post" action="edit-process-stud.php?id=<?php echo $idstud; ?>">
    <table>
      <input type="hidden" name="id" value='<?php echo $idstud; ?>'>
      <tr>
        <td class="naam">BPV BPV_Begeleider School</td>
        <td>
          <input type="text" class="in" name="BPV_Begeleider_school" id="BPV_Begeleider_school" value='<?php echo $BPV_Begeleider_school; ?>'>
        </td>
      </tr>
      <tr>
        <td class="naam">email</td>
        <td>
          <input type="text" class="in" name="email" id="email" value='<?php echo $email; ?>'>
        </td>
      </tr>
      <tr>
        <td class="naam">Naam</td>
        <td>
          <input type="text" class="in" name="Naam" id="Naam" value='<?php echo $Naam; ?>'>
        </td>
      </tr>

      <tr>
        <td class="naam">Adres</td>
        <td>
          <input type="text" class="in" name="Adres" id="Adres" value='<?php echo $Adres; ?>'>
        </td>
      </tr>

      <tr>
        <td class="naam">Woonplaats</td>
        <td>
          <input type="text" class="in" name="Woonplaats" id="Woonplaats" value='<?php echo $Woonplaats; ?>'>
        </td>
      </tr>

      <tr>
        <td class="naam">Telefoonnummer</td>
        <td>
          <input type="text" class="in" name="Telefoonnummer" id="Telefoonnummer" value='<?php echo $Telefoonnummer; ?>'>
        </td>
      </tr> 
      <tr>
      <tr>
        
      <tr>
        <td class="naam">Branche</td>
        <td>
          <input type="text" class="in" name="Branche" id="Branche" value='<?php echo $Branche; ?>'>
        </td>
      </tr>

      </tr>
        <td></td>
        <td>
          <input type="submit" id="subb" value="Opslaan">
          
        
          
        </td>
      </tr>
    </table>
  </form>
  </div>
</div>
</body>
</html>