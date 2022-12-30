<?php
    if(empty($_POST['login']) || empty($_POST['senha'])) {
    echo "Usuário e/ou senha não enviados <br/>";
    } else {
        echo "Ok! Vou validar! <br/>";
    }