<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importar dados do Excel</title>
</head>
<body>
    <h1>Importar planilha do Excel</h1>

    <form method="POST" action="process.php" enctype="multipart/form-data">
        <label>Arquivo</label>
        <input type="file" name="arquivo"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>