<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro de Alumnos</title>
    <link rel="icon" href="img/estudiant.jpg">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <h1>Registrar alumno</h1>

    <form method="post" action="card.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
