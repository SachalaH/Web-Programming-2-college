<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Factorial results</title>
</head>

<body>

    <?php

    $factorial = 1;
    $number = $_GET["number"];
    if($number<0){
        echo "<h1>Number is less than zero.</h1>";
    }
    elseif($number==0){
        echo "<h1>Factorial of 0 is 1.</h1>";
    }
    else{
    for($i=1;$i<=$number;$i++){
        $factorial *= $i;
    }

    echo "<h1>The number is $number</h1><br/><h1>The factorial for same is $factorial</h1>";
}

    ?>

</body>

</html>