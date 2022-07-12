<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h2>Upload de arquivos</h2>
        <form action="envia.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <input type="submit" value="Enviar">
        </form>

        <h6 class="mt-3">Arquivos enviados</h6>
        <?php require 'lista.php';?>

</body>
</html>
