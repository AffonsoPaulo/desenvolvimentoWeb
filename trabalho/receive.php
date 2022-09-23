<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="receive.css">
    <title>C</title>
</head>
<body>

</body>
</html>
<?php
if(!empty($_POST['formName']))
    echo 'Nome: ', $_POST['formName'],'</br>';
if(!empty($_POST['formCivil']))
    echo 'Estado Civil: ', $_POST['formCivil'],'</br>';
if(!empty($_POST['formAge']))
    echo 'Idade: ', $_POST['formAge'],'</br>';
if(!empty($_POST['formEmail']))
    echo 'E-mail: ', $_POST['formEmail'],'</br>';
if(!empty($_POST['formTel']))
    echo 'Telefone: ', $_POST['formTel'],'</br>';
if(!empty($_POST['formAboutMe']))
    echo 'Sobre mim: ', $_POST['formAboutMe'],'</br>';
if(!empty($_POST['formSchool']))
    echo 'Formação Acadêmica: ', $_POST['formSchool'],'</br>';
if(!empty($_POST['formGoals']))
    echo 'Objetivos: ', $_POST['formGoals'],'</br>';
if(!empty($_POST['formLang']))
    echo 'Idiomas: ', $_POST['formLang'],'</br>';

date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/Y H:i:s");

?>