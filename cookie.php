<?php
if((!isset($_COOKIE['party']))&&(isset($_POST['send']))) {
    $name = $_POST['name'];
    $partying[] = $name;
    setcookie('party');
}
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
    foreach($partying as $party) {
        echo $party . "<br/>";
    }
    ?>
</body>
</html>