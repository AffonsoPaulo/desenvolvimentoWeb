<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de Inscrição</title>
</head>
<body>
<form id="formData" name="formData" method="post" action="receive.php">
    <h1>Dados Pessoais:</h1>
    <label for="formName">Nome: </label>
    <input id="formName" name="formName" type="text">

    <label for="formCivil">Estado Civil: </label>
    <select id="formCivil" name="formCivil">
        <option>Solteiro</option>
        <option>Casado</option>
        <option>União Estável</option>
        <option>Viúvo</option>
        <option>Divorciado</option>
        <option>Separado</option>
    </select>

    <label for="formBorn">Idade: </label>
    <input id="formBorn" name="formBorn" type="number">

    <label for="formEmail">E-mail: </label>
    <input id="formEmail" name="formEmail" type="email">

    <label for="formTel">Telefone: </label>
    <input id="formTel" name="formTel" type="tel" maxlength="15" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" placeholder="(22) 99999-9999">

    <label for="formAboutMe">Sobre mim: </label>
    <input id="formAboutMe" name="formAboutMe" type="text">

    <label for="formSchool">Formação Acadêmica: </label>
    <input id="formSchool" name="formSchool" type="text">

    <label for="formGoals">Objetivos: </label>
    <input id="formGoals" name="formGoals" type="text">

    <label for="formLang">Idiomas: </label>
    <input id="formLang" name="formLang" type="text">


</form>
</body>
</html>