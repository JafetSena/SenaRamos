<?php
    session_start();
    $empl = $_POST['idEmpleado'];
    $pass = $_POST['pass'];

    if(isset($_SESSION['idEmpleado'])){
        printf("REANUDANDO SESIÓN <br>");
        printf("Bienvenido de nuevo ",$_SESSION);
    }
    else{
        $_SESSION['idEmpleado'] = $empl;
        printf("NUEVA SESIÓN <br>");
        printf("Bienvenido %s",$empl);
    }
?>