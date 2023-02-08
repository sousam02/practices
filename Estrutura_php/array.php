<html>
    <head>
        <meta charset="utf-8">
        <title>Comentários</title>
    </head>

    <body>
        <?php
            $lista_frutas = ['banana', 'maça', 'abacate', 'laranja'];

            echo 'LISTA ORIGINAL <br> <pre>';
                print_r($lista_frutas);
            echo '</pre>';

            echo 'INSERÇÃO DE ABACAXI <br><pre>';
            $lista_frutas[] = 'Abacaxi';
            print_r($lista_frutas);
            echo '</pre>';


            echo 'ARRAY ASSOCIATIVO';

            $cadastro = [
                'nome' => 'José',
                'idade' => 25, 
                'fumante' => true,
                'peso' => 77.2
            ];

            echo '<pre>';
                print_r($cadastro);
            echo '</pre>'
        ?>

    </body>



</html>


