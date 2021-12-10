<?php
session_start();

include('db.php');

// check if data is submitted
if ( !isset($_POST['username'], $_POST['password']) ){
    // could not get the data
    exit('Please fill both username and password fields!');
}

// SQL voorbereiden
if ($stmt = $con->prepare('SELECT id, password FROM studenten WHERE email = ?')) {
    // bind parameters (s = string, i = int)
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exist
    $stmt->store_result();
    
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password);
    $stmt->fetch();
    // Account exists
    // Verify
    if ($_POST['password'] === $password) {
        // Verification succes!
        // Create sessions
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['Naam'] = $Naam;
        $_SESSION['id'] = $id;
        header('Location: home.php');
    } else {
        // Incorrect password
        echo 'Incorrect username and/or password!';

    }
   
}

    $stmt->close();
}

?>