<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Factorial</title>
</head>

<body>

    <?php
    $str = $_GET["str"];
    $res = "";
    echo "<h1>Submitted string is : $str</h1>";
    for($i=strlen($str)-1;$i>=0;$i--){
        $res.=$str[$i];
    }
    echo "<h1>Reverse of string is : $res</h1>";

    

    ?>

</body>

</html>