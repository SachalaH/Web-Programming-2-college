<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practice</title>
</head>

<body>
    <!-- the variable scope -->
    <h1>Variable types</h1>
    <h2>Local variable</h2>

    <?php
      $variable_1 = "Hello";
      $variable_2 = 21;
      
      $variable_3 = 21.14;
      echo "<h3>Variable values outside function</h3>";
      echo '$variable_1: '.$variable_1;
      echo '<br/>$variable_2: '.$variable_2;
      
      echo '<br/>$variable_3: '.$variable_3;

      // function to demonstrate local variables
      function call_variables(){
        $variable_1 = "World";
        $variable_2 = 14;
        
        $variable_3 = 14.21;
        echo "<h3>Variable values inside function(local)</h3>";
        echo '$variable_1: '.$variable_1;
        echo '<br/>$variable_2: '.$variable_2;
        
        echo '<br/>$variable_3: '.$variable_3;
      }
      call_variables();

    ?>

    <h2>Global variable</h2>
    <?php
      // Creating a variable
      $example = "PHP is fun";

      function say_example(){
        // To access variables outside function we use global keyword
        global $example;

        echo '<br/>$example value inside function: '.$example;
      }
      echo '$example value outside function: '.$example;
      say_example();

    ?>
    <h2>Static variable</h2>
    <?php
      // initializing variable in the function
      function increment_by_one(){
        static $number = 0;
        $number++;
        return $number;
      }
      // Inital number value
      echo "Initial value of number is 0<br/>";

      // First call
      echo "After first call value of number: ".increment_by_one()."<br/>";
      // second call
      echo "After second call value of number: ".increment_by_one()."<br/>";
    ?>

    <h1>Standard functions in PHP</h1>
    <h2>String functions</h2>
    <?php
      // chop() function to remove specified characters from the right end of the string
      $str = "John Doe";
      echo $str . "<br>";
      echo chop($str,"Doe");
      echo "<br/>";
      // if we dont specify characters it removes \n from right end
      $str2 = "Bella Ciao!\n\n";
      echo $str2;
      echo chop($str2);
      echo "<br/>";

      // join() is a method to join elements of array
      // first param is what elements will be seperated by
      // second is the array
      $arr = array('What','a','beautiful','day!');
      echo join(" ",$arr);
      echo "<br/>";

      // strlen() is the function to check the lenght of the string
      echo "Length of string: 'Work From Home' is ".strlen("Work From Home");
    ?>

    <h2>Math functions</h2>
    <?php
    // abs() is used to find absolute of a number
    echo("Absolute value of 2.1 is : ".abs(2.1) . "<br>");
    echo("Absolute value of -21 is : ".abs(-21) . "<br>");
    echo("Absolute value of -1.4 is : ".abs(-1.4) . "<br>");
    echo("Absolute value of 14 is : ".abs(14));
    echo "<br/>";
    
    // ceil() is used to find the ceiling value
    echo("Ceiling value of 0.60: ".ceil(0.60) . "<br>");
    echo("Ceiling value of 0.40: ".ceil(0.40) . "<br>");
    echo("Ceiling value of 5: ".ceil(5) . "<br>");
    echo("Ceiling value of 5.1: ".ceil(5.1) . "<br>");
    echo("Ceiling value of -5.1: ".ceil(-5.1) . "<br>");
    echo("Ceiling value of -5.9: ".ceil(-5.9));
    echo "<br/>";

    
    // floor() is used to find the floor value
    echo("Floor value of 0.60: ".floor(0.60) . "<br>");
    echo("Floor value of 0.40:".floor(0.40) . "<br>");
    echo("Floor value of 5: ".floor(5) . "<br>");
    echo("Floor value of 5.1: ".floor(5.1) . "<br>");
    echo("Floor value of -5.1: ".floor(-5.1) . "<br>");
    echo("Floor value of -5.9: ".floor(-5.9));

    // base_convert() is used to convert a number from one base to another
    $hex = "F12"; 
    echo "<br>Hex Number is $hex";
    echo "<br>Hex to octal: ". base_convert($hex,16,8);
    echo "<br>Hex to binary: ". base_convert($hex,16,2);
    echo "<br>Hex to decimal: " .base_convert($hex,16,10);

    ?>

    <h2>Pass by Reference</h2>
    <?php
      function appendToString(&$string)
      {
          $string .= 'appended on the string.';
      }
      // initializing a string 
      $sam_str = 'String initialized, ';
      // passing the reference
      appendToString($sam_str);
      echo $sam_str;
    ?>

</body>

</html>