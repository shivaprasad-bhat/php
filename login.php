<?php
session_start();

if (isset($_POST["uname"])) {
    if ($_POST["uname"] === "SP" && $_POST["pass"] === "abc") {
        $_SESSION["username"] = $_POST["uname"];
        echo "<script type='text/javascript'>alert('Logged in');</script>";
        header("Location: ./index.php");
    } else {
        echo "<script type='text/javascript'>alert('Invalid pass');</script>";
        header("Location: ./index.php");
    }
} else {
    echo "<script type='text/javascript'>alert('Post not set');</script>";
}
