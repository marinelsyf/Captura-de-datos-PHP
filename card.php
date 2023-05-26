<!DOCTYPE html>
<html>
<head>
    <title>Alumno Registrado</title>
    <link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>
    <div class="card">
    <h2>Alumno</h2>
        <img src="img/alumno.png" alt="Alumno">
        <p><strong>Nombre:</strong> <?php echo $_POST['nombre']; ?></p>
        <p><strong>Apellidos:</strong> <?php echo $_POST['apellidos']; ?></p>
        <p><strong>Edad:</strong> <?php echo $_POST['edad']; ?></p>
        <p><strong>Correo:</strong> <?php echo $_POST['correo']; ?></p>
    </div>
</body>
</html>
