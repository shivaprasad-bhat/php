<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./login.php" method="post">
        <input type="text" name="uname" placeholder="Email"> <br>
        <input type="password" name="pass" placeholder="Password"><br>
        <input type="submit" name="sub" value="Submit">
    </form>
</body>

</html>