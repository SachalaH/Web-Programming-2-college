<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email users</title>
</head>

<body>
    <h1>Send email to your email list.</h1>
    <h3>Your mail list has following users</h3>
    <?php
      $user_array = array("Sophia"=>"sophia@google.com","Jacob"=>"jacob@tech.co.uk","William"=>"william.21@hotmail.com","Ramesh"=>"ramesh12@google.com");
      foreach($user_array as $y=>$y_value){
        echo $y." : ".$y_value."<br>";
      }
    ?>
    <h2>Email the list with</h2>
    <form action="send_email.php" method="post">
        <label for="subject">Subject of E-Mail:</label>
        <br />
        <br />
        <input type="text" name="subject" id="subject" />
        <br />
        <br />
        <label for="body">Body of E-Mail:</label>
        <br />
        <br />
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br />
        <br />
        <input type="submit" value="submit" name="submit" />
    </form>
</body>

</html>