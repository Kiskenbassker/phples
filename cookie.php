<?php
if((!isset($_COOKIE['party']))&&(isset($_POST['send']))) {
    $name = $_POST['name'];
    setcookie('party', $name);
}
date_default_timezone_set('Europe/Kiev');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies Party</title>
</head>
<body>
   <p>Hello, welcome to our Cookies Party!</p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="name">Your name</label>
    <input type="text" name="name" id="name" />
    <input type="submit" value="Send" name="send" />
    </form>
    <?php 
        $current_date = date('H:i');
          $start_date = '01:00';
          $end_date = '02:00';
        
        if(isset($_COOKIE['party']) && ($current_date >= $start_date) && ($current_date <= $end_date))
            echo "<br/>You're part of our party!<br/>";
        else
            echo "<br/>You're not partying with us!<br/>";
    ?> 
</body>
</html>