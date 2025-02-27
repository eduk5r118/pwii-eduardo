<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>concatenação</title>
    <style>
        .cor{
            color: blue;
            background-color: orange;
            font-size: 60px;
        }
    </style>
</head>
<body>
    <p class = "cor">
        <?php
            ECHO "hello World!<br>";
            echo "hello World!<br>";
            EcHo "hello World!<br>";

            $nome = "Eduardo";
            $sobrenome = "Pompeu";
            $numero = 9;

            echo "${nome} <h1> ${sobrenome} </h1>";
            echo $numero . "<p> " . $nome . " " . $sobrenome . "</p>";
        ?>
    </p>
</body>
</html>