<?php
if(isset($_GET["submit"])){
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $country = $_GET["country"];
    $subject = $_GET["subject"];
    $solution = $_GET["solution"];
    echo "<h1>Data recieved is:</h1><br>";
    echo "<h4>Your basic details are,<br>1. firstname :$firstname</h4>";
    echo "<h4><br>2. lastname :$lastname</h4>";
    echo "<h4><br>You belong to $country</h4>";
    echo "<h4><br>Your query/feedback is:<br>$subject</h4>";
    echo "<h4><br>and we will reach out to you by $solution</h4>";
}elseif($_POST["username"]){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    echo "<h2>You are logged in as: </h2>";
    echo "<h3>$username</h3>";
    echo "<h3>Password cannot be displayed due to security.</h3>";
    if($_POST["remember"]=="on"){
        echo "<h2>You will be remembered.</h2>";
    }

}

?>