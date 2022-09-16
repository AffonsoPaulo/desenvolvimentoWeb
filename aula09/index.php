<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload de arquivos</title>
</head>
<body>

<!--<form enctype="multipart/form-data" id="f" action="destino.php" method="post">-->
<!--    <label for="arquivo1">Documento: </label>-->
<!--    <input type="file" id="arquivo1" name="arquivo1" accept="application/msword,application/pdf"/><br/>-->
<!---->
<!--    <label for="arquivo2">Imagem: </label>-->
<!--    <input type="file" id="arquivo2" name="arquivo2" accept="image/*"/> <br/>-->
<!---->
<!--    <input type="submit" name="enviar" id="enviar" value="enviar"/>-->
<!--</form>-->
    <form enctype="multipart/form-data" id="f" action="destino.php" method="post">
        <label for="arquivo1">Documento: </label>
        <input type="file" id="arquivo1" name="arquivos[]" multiple accept="application/msword,application/pdf"/><br/>

        <label for="arquivo2">Imagem: </label>
        <input type="file" id="arquivo2" name="arquivos[]" multiple accept="image/*"/> <br/>

        <input type="submit" name="enviar" id="enviar" value="enviar"/>
    </form>
</body>
</html>