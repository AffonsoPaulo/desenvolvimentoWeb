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
?>