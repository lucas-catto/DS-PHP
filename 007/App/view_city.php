<?php

    if (!isset($_GET['city_name'])) {
        return header("Location: ./index.php");
    }
    else {
        if (!is_numeric($_GET['city_name'])) {
            return header("Location: ./index.php");
        }
        else {
            
            $state_id = $_GET['city_name'];

            require_once("./Config/config.php");

            $sql = $pdo->prepare("SELECT COUNT(*) AS StateCount FROM States");
            $sql->execute();

            $state = $sql->fetch(PDO::FETCH_ASSOC);

            if ($state_id <= $state["StateCount"] && $state_id > 0) {
    
                $sql = $pdo->prepare("SELECT * FROM Cities WHERE CityState = ?");
                $sql->execute([$state_id]);
    
                $all_cities = $sql->fetchAll(PDO::FETCH_ASSOC);
            }
            else {
                return header("Location: ./index.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cities</title>
        <link rel="stylesheet" href="./CSS/ViewCity/view_city.css">
    </head>
    <body>
        <header>
            <a href="./index.php">
                <h1>Cities</h1>
            </a>
        </header>
        <main>
            <ul>
                <?php foreach ($all_cities as $city) { ?>
                    <li><?php echo $city["CityName"] ?></li>
                <?php } ?>
            </ul>
        </main>
        
        <footer>
            <p>By <a href="https://github.com/lucas-catto/" target="_blank">Lucas Catto</a></p>
        </footer>
    </body>
</html>
