<?php

function redirect_alert (string $message) : void {
    echo "<script>alert('$message');</script>";
    echo "<script>window.location.href='./../../index.php'</script>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = isset($_POST["name"])  ? strip_tags($_POST["name"])  : false;
    $class = isset($_POST["class"]) ? strip_tags($_POST["class"]) : false;

    if ($name != false && $class != false) {

        require_once("./../../Config/config.php");

        $sql = $pdo->prepare("INSERT INTO Teachers VALUES (null, ?, ?)");
        
        if ($sql->execute([$name, $class])) {
            redirect_alert('New Teacher!');
        }
        else {
            redirect_alert('Something is wrong!');
        }
    }
}
else {
    header("Location: ./../../index.php");
}
