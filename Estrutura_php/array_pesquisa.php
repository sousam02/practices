<html>
    <head>
        <meta charset="utf-8">
        <title>Comentários</title>
    </head>

    <body>
        <?php
            $lista_frutas = ['banana', 'maçã', 'uva', 'abacaxi'];

            echo in_array('banana', $lista_frutas); // caso encontre o valor passado como parametro, retorna true
            echo '<hr>';
            
            echo array_search('uva', $lista_frutas);// retorna o index do valor, caso exista

        ?>

    </body>



</html>


