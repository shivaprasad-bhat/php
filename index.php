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
    <h1>Hello Welcome to my site</h1> <br>
    <?php
    if (isset($_SESSION["username"])) {
        echo "<p>Hello " . $_SESSION["username"] . "</p>";
        echo "<a href=\"./logout.php\">Logout</a>";
    } else {
        echo "<p>Not Logged in </p>";
        echo "<a href=\"./login_screen.php\">Login</a>";
    }
    ?>
</body>

</html>