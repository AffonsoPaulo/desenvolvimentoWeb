<?php
    echo empty('');
    var_dump(empty('Fulano'));

    echo strlen('Rafael');

    $texto = 'Olá, mundo!';
    
    var_dump(strpos($texto, 'X'));
    var_dump(strpos($texto, 'O'));
    var_dump(strpos($texto, 'M'));
    var_dump(strpos($texto, 'M', 5));
    var_dump(strpos($texto, 'M', 4));

    $texto = 'Olá, mundo!';

    echo substr($texto, 1).'</br>';
    echo substr($texto, 0, 3).'</br>';
    echo substr($texto, 6, 7).'</br>';

    echo "<pre>";
    print_r(explode('/', '06/11/1974'));
    echo "</pre></br>";

    echo "<pre>";
    print_r(explode(':', '09:48:23'));
    echo "</pre></br>";

    echo "<pre>";
    print_r(implode('/', array('06', '11', '1974')));
    echo "</pre></br>";

    echo "<pre>";
    print_r(implode(':', array('09', '48', '23')));
    echo "</pre></br>";

    echo "<pre>";
    print_r(str_split('Fluminense'));
    echo "</pre></br>";

    echo "<pre>";
    print_r(str_split('Fluminense', 2));
    echo "</pre></br>";

    $texto = 'Olá, mundo!';

    echo str_replace('Mundo', 'Amigos', $texto).'</br>';

    $texto = 'Bombeiro';

    echo str_replace('o', 'a', $texto, $qtdeTrocas).'</br>';
    echo $qtdeTrocas.'</br>';

    echo str_pad('Juca', 10).'</br>';
    echo str_pad('Juca', 10, '-=').'</br>';
    echo str_pad('Juca', 10, '-=', STR_PAD_LEFT).'</br>';
    echo str_pad('Juca', 10, '-=', STR_PAD_BOTH).'</br>';
    
    echo ltrim(' Juca').'</br>';
    echo ltrim('**Juca', '*').'</br>';

    echo rtrim('Juca ').'</br>';
    echo rtrim('Juca*', '*').'</br>';

    echo trim('Juca').'</br>';
    echo trim('**Juca**', '*').'</br>';
?>