<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email review</title>
</head>

<body>
    <?php
    function send_email($subject,$body){

      echo "<h2>The following mail will be sent to your mail list</h2>";
      $user_array = array("Sophia"=>"sophia@google.com","Jacob"=>"jacob@tech.co.uk","William"=>"william.21@hotmail.com","Ramesh"=>"ramesh12@google.com");
      foreach($user_array as $y=>$y_value){
        echo $y." : ".$y_value."<br>";
      }
      echo '<h4>Subject: </h4>'.$_POST["subject"];
      echo '<h4>Body: </h4>'.$_POST["body"];

    }


  if(isset($_POST["submit"])){
    send_email($_POST["subject"], $_POST["body"]);
  }


?>
</body>

</html>