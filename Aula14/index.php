<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Pessoa.php';
            require_once 'Gafanhoto.php';
            
            $v[0] = new Video("Aula01 POO");
            $v[1] = new Video("Aula 12 PHP");
            $v[2] = new Video("Aula 15 HTML");
            
            $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");
            
            print_r($v);
            print_r($g);
        ?>
        </pre>
    </body>
</html>
