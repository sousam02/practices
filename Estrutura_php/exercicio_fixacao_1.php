<html>
    <head>
        <meta charset="utf-8">
        <title>Comentários</title>
    </head>

    <body>
        <?php

            function doar_sangue($idade, $peso){
                if($idade >= 16 AND $idade <=69 AND $peso >= 50){
                    return 'Atende aos requisitos';
                }
    
                return 'Não atende aos requisitos';
            }


            $peso = 65;
            $idade = 28;

            echo doar_sangue($idade, $peso);

            
        ?>

    </body>



</html>


