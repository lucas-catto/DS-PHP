
<?php

require_once ("./config.php");

$sql = $pdo->prepare ("
    SELECT A.NOME AS ALUNO,
        D.NOME  AS DISCIPLINA,
        N.NOTA1 AS NOTA1,
        N.NOTA2 AS NOTA2,
        N.NOTA3 AS NOTA3,
        ROUND((N.NOTA1+N.NOTA2+N.NOTA3 / 3)) AS MEDIA
    
    FROM ALUNO A,
        DISCIPLINA D,
        NOTA N
    WHERE N.RA = A.RA
        AND N.IDDISC = D.IDDISC
");

$sql->execute();

$data = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $value) {
    
    echo $value["ALUNO"]      . "</br>";
    echo $value["DISCIPLINA"] . "</br>";
    echo $value["NOTA1"]      . "</br>";
    echo $value["NOTA2"]      . "</br>";
    echo $value["NOTA3"]      . "</br>";
    echo $value["MEDIA"]      . "</br>";
    echo "--------------------" . "</br>";
}
