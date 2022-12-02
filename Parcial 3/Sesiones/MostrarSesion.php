<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if(!isset($_SESSION['idEmpleado']) || empty($_SESSION['idEmpleado'])){
            header("Location ./Sesion.html");
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Pagina principal de la aplicación</h1>
    <button type="button"><?php echo $_SESSION['idEmpleado'];?></button>
</body>
</html>