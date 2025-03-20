<!DOCTYPE html>
<html>
    <head>
        <style>
            p.texto{
                color: white;
                background-color: black;
            }
        </style>
    </head>
    <body>
        <p class="texto">
            <?php
                $n = 6;

                if ($n >= 4){
                    echo $n, " é maior ou igual a 4 + uma aleração quase plausível";
                }
                $n1 = 3;
                $n2 = 4;

                $result = ($n1/$n2)%$n2;

                if (result == 1) {
                    echo "<br>" , $result, " quociente ímpar de novo";
                } else {
                    echo "<br>", $result, " quociente par";
                }
            ?>
        </p>
    </body>
</html>