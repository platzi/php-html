<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de imágenes</title>
</head>
<body>
    
    <form action="server.php" method="post" enctype="multipart/form-data">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="image">Imagen:</label>
        <input type="file" name="image" id="image">

        <button type="submit">Mandar formulario</button>

    </form>

</body>
</html>