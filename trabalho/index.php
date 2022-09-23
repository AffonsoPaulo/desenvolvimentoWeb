<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Formulário de Inscrição</title>
</head>
<body>
<main>
    <div class="card-name">
        <form id="formData" name="formData" method="post" action="receive.php">
            <h1>Dados Pessoais:</h1>
            <div class="card-flex">
                <div class="card">
                    <label class="inputTitles" for="formName">Nome: </label>
                    <input id="formName" name="formName" type="text">

                    <label class="inputTitles" for="formCivil">Estado Civil: </label>
                    <select id="formCivil" name="formCivil">
                        <option>Solteiro</option>
                        <option>Casado</option>
                        <option>União Estável</option>
                        <option>Viúvo</option>
                        <option>Divorciado</option>
                        <option>Separado</option>
                    </select>

                    <label class="inputTitles" for="formAge">Idade: </label>
                    <input id="formAge" name="formAge" type="number">

                    <label class="inputTitles" for="formEmail">E-mail: </label>
                    <input id="formEmail" name="formEmail" type="email">

                    <label class="inputTitles" for="formTel">Telefone: </label>
                    <input id="formTel" name="formTel" type="tel" maxlength="15"
                           placeholder="(22) 99999-9999">
                </div>

                <div class="card">
                    <label class="inputTitles" for="formAboutMe">Sobre mim: </label>
                    <input id="formAboutMe" name="formAboutMe" type="text">
                </div>
            </div>
            <div class="card-flex">
                <div class="card">
                    <label class="inputTitles" for="formSchool">Formação Acadêmica: </label>
                    <input id="formSchool" name="formSchool" type="text">
                </div>

                <div class="card">
                    <label class="inputTitles" for="formGoals">Objetivos: </label>
                    <input id="formGoals" name="formGoals" type="text">
                </div>
            </div>
            <div class="card-flex">
                <div class="card">
                    <label class="inputTitles" for="formLang">Idiomas: </label>
                    <input id="formLang" name="formLang" type="text">
                </div>

                <div class="card">
                    <input id="formSubmit" name="formSubmit" type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</main>
</body>
</html>