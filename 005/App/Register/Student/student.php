<?php

function redirect_alert (string $message) : void {
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='./../../index.php'</script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = isset($_POST["name"])     ? strip_tags($_POST["name"])     : false;
    $register = isset($_POST["register"]) ? strip_tags($_POST["register"]) : false;

    if ($name != false && $register != false) {

        require_once("./../../Config/config.php");

        $sql = $pdo->prepare("INSERT INTO Students VALUES (null, ?, ?)");
        
        if ($sql->execute([$name, $register])) {
            redirect_alert('New Student!');
        }
        else {
            redirect_alert('Something is wrong!');
        }
    }
}
else {
    header("Location: ./../../index.php");
}
