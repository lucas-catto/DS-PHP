<?php
    require_once("./Config/config.php");

    $sql = $pdo->prepare("SELECT * FROM States");
    $sql->execute();

    $states = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>States</title>
        <link rel="stylesheet" href="./CSS/Index/index.css">
    </head>
    <body>
        <header>
            <h1>States</h1>
        </header>
        <main>
            <form action="./view_city.php" method="get">
                <select name="city_name">

                    <option disbled selected>Select a State</option>

                    <?php foreach ($states as $state) { ?>
                        <option value="<?php echo $state["StateId"] ?>"><?php echo $state["StateName"] ?></option>
                    <?php } ?>
                </select>

                <button type="submit">View</button>
            </form>
        </main>
        
        <footer>
            <p>By <a href="https://github.com/lucas-catto/" target="_blank">Lucas Catto</a></p>
        </footer>
    </body>
</html>
