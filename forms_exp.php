<?php

if(isset($_POST["submit-post"])){
    // We will check for the password from the database and if it is equal to the
    // entered password then we will log in the user into the application
    echo "<h1>Welcome to our app!</h1>";
    echo "<h3>E-Mail: " . $_POST["email"] . "</h3>";
    if(isset($_POST["remember"])){
        echo "<h3>You will be remembered!</h3>";
    }
}

if(isset($_GET["submit-get"])){
    
    echo "<h1>Following details were received: </h1>";
    echo "<h3>Name: " . $_GET["name"] . "</h3>";
    echo "<h3>E-Mail: " . $_GET["email"] . "</h3>";
    echo "<h3>Query: " . $_GET["textarea"] . "</h3>";
    if(isset($_GET["copy"])){
    echo "<h3>You will receive the copy of the form to: ". $_GET["email"] . "</h3>";
    }
    
}

?>