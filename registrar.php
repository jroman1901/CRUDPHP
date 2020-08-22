<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrar usuario</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">Registrar usuario</div>
        <div class="contenido">
            <form action="registra.php" method='post'>
            <label for="i1">Nombres</label>
            <input type="text" id="txtnombre" name="txtnombre">
            <br>
            <label for="i2">Apellido paterno</label>
            <input type="text" id="txtapellidop" name="txtapellidop">
            <br>
            <label for="i3">Apellido materno</label>
            <input type="text" id="txtapellidom" name="txtapellidom">
            <br>
            <label for="i4">Correo</label>
            <input type="text" id="txtcorreo" name="txtcorreo">
            <br>
            <input type="submit" value="registrar">
            </form>

        </div>
    </div>
</body>
</html>