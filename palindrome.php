<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Factorial</title>
</head>

<body>

    <?php

    $isPalindrome = false;
    $str = $_GET["str"];
    echo "<h1>Submitted string is : $str</h1>";
    $index = 0;
    for($i=strlen($str)-1;$i>=0;$i--){
        if($str[$i] == $str[$index]){
            $index++;
            $isPalindrome = true;
        }else{
            $isPalindrome = false;
            break;
        }
    }
    if($isPalindrome){
        echo "<h1>The given string is Palindrome.</h1>";
    }
    else{
        echo "<h1>The given string is NOT Palindrome.</h1>";

    }


    ?>

</body>

</html>