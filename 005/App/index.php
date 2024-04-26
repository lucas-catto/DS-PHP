<?php
    // Just Queries
    require_once("./Config/config.php");

    $teachers = $pdo->prepare("SELECT * FROM Teachers");
    $teachers->execute();

    $students = $pdo->prepare("SELECT * FROM Students");
    $students->execute();

    $all_teachers = $teachers->fetchAll(PDO::FETCH_ASSOC);
    $all_students = $students->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="./CSS/Global/global.css">
        <link rel="stylesheet" href="./CSS/Index/index.css">
    </head>
    <body>
        <header>
            <h1>New Rigister</h1>
        </header>        
        
        <main>
            <ul>
                <li><a href="./Register/Teacher/teacher.html">New Teacher</a></li>
                <li><a href="./Register/Student/student.html">New Student</a></li>
            </ul>

            <section>
                <ul>
                    <h2>Teachers</h2>
                    <?php
                        foreach ($all_teachers as $teacher) {
                            echo "<li>";
                                echo "<p>ID: "    . $teacher["TeacherId"]    . "</p>";
                                echo "<p>Name: "  . $teacher["TeacherName"]  . "</p>";
                                echo "<p>Class: " . $teacher["TeacherClass"] . "</p>";
                            echo "</li>";
                        }
                    ?>
                </ul>

                <ul>
                    <h2>Students</h2>
                    <?php
                        foreach ($all_students as $student) {
                            echo "<li>";
                                echo "<p>ID: "       . $student["StudentId"]    . "</p>";
                                echo "<p>Name: "     . $student["StudentName"]  . "</p>";
                                echo "<p>Register: " . $student["StudentRegister"] . "</p>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </section>
        </main>

        <footer>
            <p>By <a href="https://github.com/lucas-catto/">Lucas Catto</a></p>
        </footer>
    </body>
</html>
