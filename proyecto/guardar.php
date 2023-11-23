<?php


require_once "Estudiante.php";


$objProyecto = new Estudiante($_POST["Id_tipo"], $_POST["Correo"],$_POST["Nombres"],$_POST["Apellidos"], $_POST["Documento"], $_POST["Numero"]);

$objProyecto->guardar();
echo $objProyecto->getId_tipo();
echo $objProyecto->getCorreo();
echo $objProyecto->getNombres();
echo $objProyecto->getApellidos();
echo $objProyecto->getDocumento();
echo $objProyecto->getNumero();

?>