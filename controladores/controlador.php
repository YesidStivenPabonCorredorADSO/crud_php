<?php
require __DIR__ .('/../clase/aprendiz.php');
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $genero = $_POST['genero'];
      $edad = $_POST['edad'];

      $aprendiz = new Aprendiz();
      $aprendiz->setNombre($nombre);
      $aprendiz->setApellido($apellido);
      $aprendiz->setGenero($genero);
      $aprendiz->setEdad($edad);
      $aprendiz->guardar();
    } else {
      echo "No se han proporcionado todos los datos";
    }
    header("Location: ../index.php");
  if ($_SERVER['REQUEST_METHOD']=== 'GET') {
    $id=$_GET('id');
    $aprendiz= new Aprendiz();
    $aprendiz->setId('id');
    $aprendiz->Elimnar();
    header("Location: ../index.php");
    # code...
  }
  // else {
    // if ($_SERVER['REQUEST_METHOD'] === "POST") {
    //   if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['genero']) && !empty($_POST['edad'])) {

    //     $nombre = $_POST['nombre'];
    //     $apellido = $_POST['apellido'];
    //     $genero = $_POST['genero'];
    //     $edad = $_POST['edad'];

    //     require_once('aprendiz.php');

    //     $aprendiz = new Aprendiz();
    //     $aprendiz->setNombre($nombre);
    //     $aprendiz->setApellido($apellido);
    //     $aprendiz->setGenero($genero);
    //     $aprendiz->setEdad($edad);

    //     $aprendiz->guardar();
    //   } else {
    //     echo "No se han proporcionado todos los datos";
    //   }
    //   echo "Guardado en metodo POST";
    // }
  // }
