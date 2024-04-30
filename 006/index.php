<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search for a Student</title>
        <link rel="stylesheet" href="./CSS/style.css">
    </head>
    <body>
        <header>
            <h1>Search for a Student</h1>
        </header>
        <main>

            <form action="" method="get">
    
                <input type="text" name="name" placeholder="Search for a Student">
                <button type="submit">Search</button>
            </form>
    
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
    
                <?php
                    if (isset($_GET['name'])) {
    
                        require_once ("./Config/config.php");
    
                        $name = strip_tags($_GET['name']);
    
                        $sql = $pdo->prepare("SELECT * FROM Students WHERE StudentName LIKE ?");
                        $sql->execute(["%$name%"]);
    
                        foreach ($sql->fetchAll(PDO::FETCH_ASSOC) as $student) {
                            echo "<tr>";
                                echo "<td>" . $student['StudentId']   . "</td>";
                                echo "<td>" . $student['StudentName'] . "</td>";
                                echo "<td>" . $student['StudentAge']  . "</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>
        </main>

        <footer>
            <p>By <a href="https://github.com/lucas-catto/" target="_blank">Lucas Catto</a></p>
        </footer>
    </body>
</html>
