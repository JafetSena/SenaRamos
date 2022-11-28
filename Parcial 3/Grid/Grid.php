<?php

$servidor = "localhost";
$basededatos = "programacion_web";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor, $usuario, $password, $basededatos) or die("No se pudo conectar a localhost");
$consulta = "select * from empleado";
$registros = mysqli_query($con,$consulta) or die("problemas con el select");

//RESULTADO COMO ARRAY ASOCIATIVO
// while ($result = mysqli_fetch_array($registros, MYSQLI_ASSOC)) {
//     printf($result['nombre']. ' '. $result['apPaterno']. '<br>' );
// }

//Resultado como array asociativo
// while($result = mysqli_fetch_array($registros, MYSQLI_NUM)) {
//     printf($result[0]. ' '. $result[1]. '<br>');
// }

//Resultado de la consulta como una matriz
$result = mysqli_fetch_all($registros.MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);
?>