<?php
    // if(isset($_POST["submit"])){
    //    foreach ($_POST["cars"] as $car) {
    //        # code...
    //        echo $car."<br>";
    //    }
    // }
    if(isset($_POST["submit"])){
        if(isset($_POST["cars"])){
            echo "<h2>You like these cars:</h2>";
            foreach ($_POST["cars"] as $car) {
                # code...
                echo "<li>$car</li>";
            }
        }
        if(isset($_POST["one"])){
            echo '<h2>You find this animal friendly: '.$_POST["one"][0].'</h2>';
        }
        if(isset($_POST["two"])){
            if($_POST["two"][0]=="25"){
                echo "<h2>Your answer is correct.</h2>";
            }
            else{
                echo "<h2>Your answer is incorrect.</h2>";
            }
            
        }if(isset($_POST["check_list"])){
            echo "<h2>You own these accessories:</h2>";
            foreach ($_POST["check_list"] as $item) {
                # code...
                echo "<li>$item</li>";
            }
        }
        if(isset($_POST["hiddenField"])){
            echo "<h2>This is what hidden field has to say:</h2>";
            echo $_POST["hiddenField"];
        }
    }
    // print_r($_POST["cars"])
?>