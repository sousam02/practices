<html>
    <head>
        <meta charset="utf-8">
        <title>Comentários</title>
    </head>

    <body>
        <?php

            $texto = 'curso Completo em php';
            echo 'ORIGINAL STRING: '. $texto;
            echo '<hr>';

            $strtoupper = strtoupper($texto);
            echo 'STRING TO UPPER: '. $strtoupper;
            echo '<hr>';

            $strtolower = strtolower($texto);
            echo 'STRING TO LOWER: '. $strtolower;
            echo '<hr>';

            $ucfirst = ucfirst($texto);
            echo 'UPPERCASE FIRST: '.$ucfirst;
            echo '<hr>';

            $strlen = strlen($texto);
            echo 'STRING LENGHT: '.$strlen;
            echo '<hr>';

            $str_replace = str_replace('php', 'JavaScript', $texto);
            echo 'STRING REPLACE: '. $str_replace;
            echo '<hr>';

            $substr = substr($texto, 6, 8);
            echo 'SUB STRING: ' . $substr;
            echo '<hr>';
        ?>

    </body>



</html>


