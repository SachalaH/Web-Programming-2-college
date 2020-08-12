<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Array Practice</title>
</head>

<body>

    <h1>Array practice</h1>
    <hr>
    <h2>Indexed Array</h2>
    <?php
        echo "<h3>Indexed Array example 1</h3>";
        $grocery_list = array();
        $grocery_list[0] = "Potatoes";
        $grocery_list[1] = "Tomatoes";
        $grocery_list[2] = "Avocados";
        $grocery_list[3] = "Onions";
        echo "I need to purchase:";
        echo "<ul>";
        foreach($grocery_list as $item){
            echo "<li>". $item . "</li>";
        }
        echo "</ul>";

        echo "<br/><h3>Indexed Array example 2</h3>";


        $places_to_visit = array("London","Paris","New York","Dubai");
        echo "You have " . count($places_to_visit) . " dream cities in your bucket list, namely:";
        echo "<ul>";
        foreach($places_to_visit as $city){
            echo "<li>". $city . "</li>";
        }
        echo "</ul>";
    ?>
    <hr>
    <h2>Associative Array</h2>

    <?php
        echo "<h3>Associative Array example</h3>";
        $user_email_list = array("john doe"=>"jd@example.com","jane doe"=>"jane.d@asd.co.uk");
        $user_email_list["test user"] = "test@example.in";
        
        echo "<table border=1><tr><th>User</th><th>E-mail</th></tr>";
        foreach ($user_email_list as $user => $email) {
            echo "<tr><td>$user</td><td>$email</td></tr>";
        }
        echo "</table>";
    ?>
    <hr>
    <h2>Multidimensional Array</h2>
    <?php
        echo "<h3>Grocery stock in kgs.</h3>";
        $grocery_stock = array (
            array("Apple",25,15),
            array("Avocado",30,19),
            array("Lemon",30,28),
            array("Potato",20,15)
          );

          for($i=0;$i<count($grocery_stock);$i++){
              echo "<h4>".$grocery_stock[$i][0]."</h4>"."In stock: ".$grocery_stock[$i][1]."kgs, sold: ".$grocery_stock[$i][2]."kgs.<br>";
          }
    ?>

    <hr>
    <h2>Sorting of Array</h2>
    <?php
        $files = array("sample.txt","test.jpg","presentation.ppt","audio.mp3","hd.png");
        echo "<h4>Files in the device are:</h4>";
        foreach($files as $file){
            echo "$file<br/>";
        }
        echo "<h4>Files after sorting in ascending oder:</h4>";
        sort($files);
        foreach($files as $file){
            echo "$file<br/>";
        }
        echo "<h4>Files after sorting in descending oder:</h4>";
        rsort($files);
        foreach($files as $file){
            echo "$file<br/>";
        }

        echo "<h4>Sorting user list with respect to emails:</h4>";
        asort($user_email_list);
        echo "<table border=1><tr><th>User</th><th>E-mail</th></tr>";
        foreach ($user_email_list as $user => $email) {
            echo "<tr><td>$user</td><td>$email</td></tr>";
        }
        echo "</table>";

        echo "<h4>Sorting user list with respect to emails in reverse order:</h4>";
        arsort($user_email_list);
        echo "<table border=1><tr><th>User</th><th>E-mail</th></tr>";
        foreach ($user_email_list as $user => $email) {
            echo "<tr><td>$user</td><td>$email</td></tr>";
        }
        echo "</table>";

        $profession = array("Avinash"=>"Doctor","Zeba"=>"Nurse","Kabir"=>"Police");
        echo "<h4>Profession array</h4>";
        echo "<table border=1><tr><th>Name</th><th>Profession</th></tr>";
        foreach ($profession as $name => $career) {
            echo "<tr><td>$name</td><td>$career</td></tr>";
        }
        echo "</table>";
        
        echo "<h4>Sorting profession array with respect to key:</h4>";
        ksort($profession);
        echo "<table border=1><tr><th>Name</th><th>Profession</th></tr>";
        foreach ($profession as $name => $career) {
            echo "<tr><td>$name</td><td>$career</td></tr>";
        }
        echo "</table>";

        echo "<h4>Sorting profession array with respect to key in reverse:</h4>";
        krsort($profession);
        echo "<table border=1><tr><th>Name</th><th>Profession</th></tr>";
        foreach ($profession as $name => $career) {
            echo "<tr><td>$name</td><td>$career</td></tr>";
        }
        echo "</table>";
    ?>

</body>

</html>