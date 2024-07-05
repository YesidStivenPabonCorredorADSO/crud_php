<?php

require __DIR__ . "/../clase/aprendiz.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["genero"];
$edad = $_POST["edad"];

$aprendiz = new Aprendiz();
$aprendiz->setNombre($nombre);
$aprendiz->setApellido($apellido);
$aprendiz->setGenero($genero);
$aprendiz->setEdad($edad);
$aprendiz->Editar();
header("Location: ../index.php");
}
?>