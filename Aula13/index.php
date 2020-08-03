<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';
            
            $c1 = new Cachorro();
            
            $c1->reagirFrase("olá");
            $c1->reagirFrase("Vai apanhar!");
            $c1->reagirHora(11, 45);
            $c1->reagirHora(21, 00);
            $c1->reagirDono(true);
            $c1->reagirDono(false);
            $c1->reagirIdadePeso(2, 12.5);
            $c1->reagirIdadePeso(17, 4.5);
        ?>
    </body>
</html>
