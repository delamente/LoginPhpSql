<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method="post">
    
    <h1>Suscribete!</h1>
    <input type="text" name="name" placeholder="Nombre completo">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" name="register">
    </form>
 <?php
    include('registrar.php');
    
 ?>

</body>
</html>