<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fibonacci result</title>
</head>

<body>

    <?php

    $num1 = 0;
    $num2 = 1;
    $total = $_GET["number"];

    if($total<1){
        echo "<h1>Number of terms cannot be less than 1.</h1>";
    }
    elseif($total==1){
        echo "<h1>Total terms: $total</h1><br/><h3>Fibonacci series is : $num1.</h3>";
    }
    elseif($total==2){
        echo "<h1>Total terms: $total</h1><br/><h3>Fibonacci series is : $num1, $num2.</h3>";
    }
    else{
        $res = '<h1>Total terms: '.$total.'</h1><br/><h3>Fibonacci series is : '.$num1.', '.$num2;
        for($i=1;$i<=$total-2;$i++){
            $next = $num1 + $num2;
            $res.=" ,$next";
            $num1 = $num2;
            $num2 = $next;
        }
        $res.=".</h3>";
        echo $res;
    }

    

    ?>

</body>

</html>