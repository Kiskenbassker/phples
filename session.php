<?php
session_start();

if(isset($_POST['send']) && (!in_array($_POST['name'], $_SESSION['party']))) {
    if(!isset($_SESSION['party']))
        $_SESSION['party'] = array();
    
    array_push($_SESSION['party'], $_POST['name']);
}

date_default_timezone_set('Europe/Kiev');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sessions Party</title>
</head>
<body>
  <?php var_dump($_SESSION['party']);
    ?>
  
   <p>Hello, welcome to our Sessions Party with Cookies and Lemonade!</p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="name">Your name, please!</label>
    <input type="text" name="name" id="name" />
    <input type="submit" value="Send" name="send" />
    </form>
    <?php 
        $current_date = date('H:i');
          $start_date = '20:00';
          $end_date = '22:00';
        
        if(in_array($_POST['name'], $_SESSION['party'])) {
            if(($current_date >= $start_date) && ($current_date <= $end_date)) {
                echo "<br/>You're part of our party!<br/>";
                foreach($_SESSION['party'] as $key => $value) {
                    echo $value . "<br/>";
                } 
                echo "are partying today!";
            } else {
                echo "<br/>The party time haven't come yet!";
            }
        } else {
            echo "<br/>You're not partying with us!<br/>"; 
        }
    ?> 
</body>
</html>