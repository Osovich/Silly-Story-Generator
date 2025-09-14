<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['noun'] = htmlspecialchars($_POST['noun']);
    $_SESSION['verb'] = htmlspecialchars($_POST['verb']);
    $_SESSION['adjective'] = htmlspecialchars($_POST['adjective']);

    header("Location: story.php");
    exit();
} else {
    header("Location: form.php");
    exit();
}
?>