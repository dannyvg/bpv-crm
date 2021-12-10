<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Stagebedrijven</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    </head>
<body class="loggedin">

    <?php 
    include('header.php');
    ?>

    <div class="content">
        <form id="form1" action="Add_stagebedrijven.php" method="post">
            <h1 id="Note">Toevoegen:</h1>
            <div class="form">

                <h2 id="naam">Naam bedrijf:</h2> 
                <input required id="Naam_bedrijf" name="Naam_bedrijf" type="text" placeholder="Naam bedrijf" minlength="1" maxlength="40">

                <h2 id="naam">Adres:</h2> 
                <input required id="Adres" name="Adres" type="text" placeholder="Adres" minlength="1" maxlength="120">

                <h2 id="naam">Plaats:</h2> 
                <input required id="Plaats" name="Plaats" type="text" placeholder="Plaats" minlength="1" maxlength="120">

                
            </div>  
            <div class="form1">
                <h2 id="naam">Telefoonnummer:</h2> 
                <input required id="Telefoonnummer" name="Telefoonnummer" type="text" placeholder="Telefoonnummer" minlength="1" maxlength="120">

                <h2 id="naam">Website:</h2> 
                <input required id="Website" name="Website" type="text" placeholder="Website" minlength="1" maxlength="120">

                <h2 id="naam">Praktijkbegleiders</h2> 
                <input required id="Praktijkbegleiders" name="Praktijkbegleiders" type="text" placeholder="Praktijkbegleiders" minlength="1" maxlength="120">

            </div>

       <br>
       <br>
       <button type="submit" id="submit" value="reg">Opslaan</button>
       <button type="reset" id="reset" value="Reset">Reset</button>

        </form>
</div>

</body>
</html>