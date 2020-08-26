<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Experiment 2</title>
</head>

<body>
    <h1>Associative array example.</h1>
    <?php
        $user_array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
        echo "<h2>Associative array: initialized</h2><br>";
        print_associative_array($user_array);

        echo "<h2>Associative array : Ascending order sort by value</h2><br>";
        asort($user_array);
        print_associative_array($user_array);

        echo "<h2>Associative array : Ascending order sort by Key</h2><br>";
        ksort($user_array);
        print_associative_array($user_array);

        echo "<h2>Associative array : Descending order sorting by Value</h2><br>";
        arsort($user_array);
        print_associative_array($user_array);
        
        echo "<h2>Associative array : Descending order sorting by Key</h2><br>";
        krsort($user_array);
        print_associative_array($user_array);

        function print_associative_array($arr){
            foreach($arr as $y=>$y_value)
                {
                echo "Age of ".$y." is : ".$y_value."<br>";
                }
        }
?>

    <h1>Change case of the array elements</h1>

    <?php
    function array_change_value_case($input, $ucase)
    {
    $case = $ucase;
    $narray = array();
    if (!is_array($input))
    {
    return $narray;
    }
    foreach ($input as $key => $value)
    {
    if (is_array($value))
    {
    $narray[$key] = array_change_value_case($value, $case);
     continue;
    }
    $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
    }
    return $narray;
    }
    $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
    echo '<h2>Actual array </h2>';
    print_r($Color);
    echo '<br><h2>Values are in lower case.</h2>';
    $myColor = array_change_value_case($Color,CASE_LOWER);
    print_r($myColor);
    echo '<br><h2>Values are in upper case.</h2>';
    $myColor = array_change_value_case($Color,CASE_UPPER);
    print_r($myColor);
    ?>
</body>

</html>