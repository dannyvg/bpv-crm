<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Studenten</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    </head>
<body class="loggedin">

    <?php 
    include('header.php');
    ?>

    <div class="content">
        <form id="form1" action="Add.php" method="post">
            <h1 id="Note">Toevoegen:</h1>
            <div class="form">

                <h2 id="naam">Naam:</h2> 
                <input required id="Naam" name="Naam" type="text" placeholder="Naam" minlength="1" maxlength="40">

                <h2 id="naam">Branche:</h2> 
                <input required id="Branche" name="Branche" type="text" placeholder="Branche" minlength="1" maxlength="120">

                <!-- <h2 id="naam">Stage_Bedrijven:</h2> 
                <input required id="Stage_Bedrijven" name="Stage_Bedrijven" type="text" placeholder="Stage_Bedrijven" minlength="1" maxlength="120"> -->

                <h2 id="naam">BPV_Begeleider_school:</h2> 
                <input required id="BPV_Begeleider_school" name="BPV_Begeleider_school" type="text" placeholder="BPV_Begeleider_school" minlength="1" maxlength="120">

                <h2 id="naam">email:</h2> 
                <input required id="email" name="email" type="text" placeholder="email" minlength="1" maxlength="120">
            </div>  
            <div class="form1">
                <h2 id="naam">password:</h2> 
                <input required id="password" name="password" type="text" placeholder="password" minlength="1" maxlength="120">

                <h2 id="naam">Adres:</h2> 
                <input required id="Adres" name="Adres" type="text" placeholder="Adres" minlength="1" maxlength="120">

                <h2 id="naam">woonplaats:</h2> 
                <input required id="woonplaats" name="woonplaats" type="text" placeholder="woonplaats" minlength="1" maxlength="120">

                <h2 id="naam">Telefoonnummer:</h2> 
                <input required id="Telefoonnummer" name="Telefoonnummer" type="text" placeholder="Telefoonnummer" minlength="1" maxlength="120">

                <!-- <h2 id="naam">Reviews:</h2> 
                <input required id="Reviews" name="Reviews" type="text" placeholder="Reviews" minlength="1" maxlength="120"> -->
            </div>

       <br>
       <br>
       <button type="submit" id="submit" value="reg">Opslaan</button>
       <button type="reset" id="reset" value="Reset">Reset</button>

        </form>
</div>

</body>
</html>