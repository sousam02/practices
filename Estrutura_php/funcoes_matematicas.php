<html>
    <head>
        <meta charset="utf-8">
        <title>Comentários</title>
    </head>

    <body>
        <?php

            $valor = 25.3;

            echo 'CEIL: '. ceil($valor); // arrendonda o float para cima
            echo '<hr>';

            echo 'FLOOR: '. floor($valor); //arrendonda o float para baixo
            echo '<hr>';

            echo 'ROUND: '. round($valor); //.0 e .4 -> arredonda para baixo || 0.5 -> arredonda para cima
            echo '<hr>';

            echo 'RANDOM NUMBER: ' . rand(10, 20);// retorna um numero aleatorio com base nos parametros de inicio e fim
            echo '<hr>';
        
            echo 'SQUARE ROOT: '. sqrt(round($valor));// retorna a raiz quadrada 
            echo '<hr>';



        ?>

    </body>



</html>


