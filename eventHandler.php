<?php 
    if(isset($_GET["submit-area"])){
        if($_GET["area"]=="square"){
            $side = $_GET["side"];
            $area = $side * $side;
            echo "<h3>Area of square having size $side units is $area units square.</h3>";
        } if($_GET["area"]=="rectangle"){
            $length = $_GET["length"];
            $breadth = $_GET["breadth"];
            $area = $length * $breadth;
            echo "<h3>Area of rectangle having dimensions $length and $breadth units  is $area units square.</h3>";
        } if($_GET["area"]=="circle"){
            $radius = $_GET["radius"];
            $area = (22*$radius*$radius)/7;
            echo "<h3>Area of circle having radius $radius units is $area units square.</h3>";
        }

    }
    if(isset($_POST["submit"])){
        echo "<h2>Following details were recieved:</h2>";
        echo "<h4>Name: ".$_POST["name"] . "</h4>";
        echo "<h4>E-Mail: ".$_POST["email"] . "</h4>";
        if($_POST['concern']=="query"){
            echo "<h4>Queries recieved: </h4>";
            if(isset($_POST['q1'])){
                echo"<h4>". $_POST['q1'] . "</h4>" ;
            }
            if(isset($_POST['q2'])){
                echo"<h4>". $_POST['q2'] . "</h4>";
            }
            if(isset($_POST['q3'])){
                echo"<h4>". $_POST['q3'] . "</h4>";
            }
            if(isset($_POST['other-box'])){
                echo"<h4>". $_POST['other-query'] . "</h4>" ;
            }
        }
        if($_POST['concern']=="feedback"){
            echo "<h4>Feedback recieved: </h4>";
            echo"<h4>". $_POST["feedback"]."</h4>";
        }
    }
?>