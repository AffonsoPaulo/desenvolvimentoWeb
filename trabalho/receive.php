// GRUPO: PAULO AFFONSO E GUSTAVO NERY
<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="receive.css">
    <title>Currículo</title>
</head>
<body>
<main>
    <div class="card-name">
        <h1>Dados Pessoais</h1>

        <p><?php if (!empty($_POST['formName']))
                echo $_POST['formName'], '</br>'; ?></p>

        <p><?php if (!empty($_POST['formCivil']) && !empty($_POST['formAge']))
                echo $_POST['formCivil'] . ', ' . $_POST['formAge'] . ' anos'; ?></p>

        <p><?php if (!empty($_POST['formEmail']))
                echo $_POST['formEmail'], '</br>'; ?></p>

        <p><?php if (!empty($_POST['formTel']))
                echo $_POST['formTel'], '</br>'; ?></p>
    </div>

    <section class="card-flex">
        <div class="card">
            <h2>Sobre mim</h2>
            <p><?php if (!empty($_POST['formAboutMe']))
                    echo $_POST['formAboutMe'], '</br>'; ?></p>
        </div>
        <div class="card">
            <h2>Formação Acadêmica</h2>
            <p><?php if (!empty($_POST['formSchool']))
                    echo $_POST['formSchool'], '</br>'; ?></p>
        </div>
    </section>

    <section class="card-flex">
        <div class="card">
            <h2>Idiomas</h2>
            <p><?php if (!empty($_POST['formLang']))
                    echo $_POST['formLang'], '</br>'; ?></p>
        </div>
        <div class="card">
            <h2>Currículo criado em</h2>
            <p><?php date_default_timezone_set('America/Sao_Paulo');
                echo date("d/m/Y H:i:s"); ?></p>
        </div>
    </section>
</main>
</body>
</html>