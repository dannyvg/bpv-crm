<?php 
include 'db.php';

if ($_GET["action"] == "edit") {

    $idstage = $_GET['id'];
    $sql = "SELECT id, Naam_bedrijf, Adres, Woonplaats, Telefoonnummer, Website, Praktijkbegleiders FROM stage_bedrijven WHERE id = $idstage";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result))
        {
            $idstage = $row ['id'];
            $Naam_bedrijf = $row ['Naam_bedrijf'];
            $Adres = $row ['Adres'];
            $Plaats = $row ['Woonplaats'];
            $Telefoonnummer = $row ['Telefoonnummer'];
            $Website = $row ['Website'];
            $PraktijkBegleiders = $row ['Praktijkbegleiders'];
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
  <form method="post" action="edit-process-stage.php?id=<?php echo $idstage; ?>">
    <table>
      <input type="hidden" name="id" value='<?php echo $idstage; ?>'>
      <tr>
        <td class="naam">Naam_bedrijf</td>
        <td>
          <input type="text" class="in" name="Naam_bedrijf" id="Naam_bedrijf" value='<?php echo $Naam_bedrijf; ?>'>
        </td>
      </tr>
      <tr>
        <td class="naam">Adres</td>
        <td>
          <input type="text" class="in" name="Adres" id="Adres" value='<?php echo $Adres; ?>'>
        </td>
      </tr>
      <tr>
        <td class="naam">Plaats</td>
        <td>
          <input type="text" class="in" name="Plaats" id="Plaats" value='<?php echo $Plaats; ?>'>
        </td>
      </tr>

      <tr>
        <td class="naam">Telefoonnummer</td>
        <td>
          <input type="text" class="in" name="Telefoonnummer" id="Telefoonnummer" value='<?php echo $Telefoonnummer; ?>'>
        </td>
      </tr>

      <tr>
        <td class="naam">Website</td>
        <td>
          <input type="text" class="in" name="Website" id="Website" value='<?php echo $Website; ?>'>
        </td>
      </tr>

      <tr>
        <td class="naam">Praktijkbegleiders</td>
        <td>
          <input type="text" class="in" name="Praktijkbegleiders" id="Praktijkbegleiders" value='<?php echo $PraktijkBegleiders; ?>'>
        </td>
      </tr> 
     
        
      

      <tr>
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