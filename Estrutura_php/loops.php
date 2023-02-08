<html>
    <head>
        <meta charset="utf-8">
        <title>Comentários</title>
    </head>

    <body>
        <?php
            $registros = [
                ['titulo' => 'titulo noticia 1', 'conteudo' => 'conteudo noticia 1'],
                ['titulo' => 'titulo noticia 2', 'conteudo' => 'conteudo noticia 2'],
                ['titulo' => 'titulo noticia 3', 'conteudo' => 'conteudo noticia 3'],                
            ];

            $idx = 0;

            while ($idx < 3){
                echo "$registros[$idx] <hr>";
                $idx++;
            }
        ?>

    </body>



</html>


