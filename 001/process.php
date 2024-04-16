
<head>
    <link rel="stylesheet" href="./CSS/Global/global.css">
    <link rel="stylesheet" href="./CSS/Process/process.css">
</head>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $name    = isset($_POST["name"])    ? $_POST["name"]    : null;
    $email   = isset($_POST["email"])   ? $_POST["email"]   : null;
    $message = isset($_POST["message"]) ? $_POST["message"] : null;

    if (
        $name    != null &&
        $email   != null &&
        $message != null
    ) {
        echo "<div>";
            echo "<p>Name: "    . $name    . "</p>";
            echo "<p>Email: "   . $email   . "</p>";
            echo "<p>Message: " . $message . "</p>";
            echo "<a href='./index.html'>Go Back!</a>";
        echo "</div>";
    }
}
else {
    header('location: ./index.html');
}

?>
