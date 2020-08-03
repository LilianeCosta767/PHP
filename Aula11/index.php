<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Aluno.php';
                require_once 'Bolsista.php';
                /*
                require_once 'Visitante.php';
                $v1 = new Visitante();
                $v1->setNome("Juvenal");
                $v1->setIdade(13);
                $v1->setSexo("M");
                print_r($v1);
                */
                
               
               $a1 = new Aluno();
               $a1->setNome("Pedro");
               $a1->setMatricula(1111);
               $a1->setSexo("M");
               $a1->setIdade(16);
               $a1->setCurso("Informática");
               $a1->pagarMensal();
               print_r($a1);
               
               $b1 = new Bolsista();
               $b1->setMatricula(121212);
               $b1->setNome("Jubileu");
               $b1->setBolsa(12.5);
               $b1->setCurso("Adminstação");
               $b1->setIdade(21);
               $b1->pagarMensal();
               print_r($b1);
            ?>
        </pre>
    </body>
</html>
