<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções recursivas</title>
 </head>
 <body>
    <h2>Funções	recursivas</h2>
    <hr>
    <?php
        function exibeNumero(int $num) {
            echo "O valor passado para a função foi: $num </br>";
            $numeroNovo = $num-1;
            if($numeroNovo > 0)
            exibeNumero($numeroNovo);
        }

        if(isset($_POST['numero']))
            exibeNumero($_POST['numero']);
        else 
            echo "Valor inválido </br>";
    ?>
 </body>
 </html>