<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Array insert results</title>
</head>

<body>

    <?php
        function insert_arr($arr,$element, $index){
            if($index<0){
                echo "<h1>Invalid input</h1>";
            }
            elseif ($index > count($arr) ) {
                echo "<h1>Invalid input</h1>";

            }
            else{
            array_splice( $arr, $index, 0, $element ); 
            echo " <br> After inserting '$element' the array is : "."<br>";
            foreach ($arr as $x) 
            {echo "$x ";}
            echo "<br>";
            }
        }

        $original = array( '1','2','3','4','5' );
        echo 'Original array : '."<br>";
        foreach ($original as $x) 
        {echo "$x ";}
        $element = $_GET["element"];
        $index = $_GET["index"];
        insert_arr($original,$element, $index);
        
    ?>

</body>

</html>