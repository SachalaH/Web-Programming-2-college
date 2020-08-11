<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Number reversed!</title>
</head>

<body>

    <?php
    $num = $_GET["number"];
    $res = "";
    echo "<h1>Submitted number is : $num</h1>";

    while((int)$num!=0){
        $mod = $num%10;
        $res .= "$mod";
        $num = $num/10;
    }
    
    echo "<h1>Reverse of number is : $res</h1>";

    

    ?>

</body>

</html>