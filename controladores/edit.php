<?php
require __DIR__ . "/../clase/aprendiz.php";

$nombre = ''; // Inicializar variables
$apellido = '';
$genero = '';
$edad = '';
$id = '';

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_GET["id"];
    $aprendiz = new Aprendiz();
    $aprendiz->setId_usuario($id);
    $persona = $aprendiz->buscarPorId();

    foreach ($persona as $key => $value) {
        $nombre = $value["nombre"];
        $apellido = $value["apellido"];
        $genero = $value["genero"];
        $edad = $value["edad"];
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $genero = $_POST["genero"];
    $edad = $_POST["edad"];

    $aprendiz = new Aprendiz();
    $aprendiz->setId_usuario($id);
    $aprendiz->setNombre($nombre);
    $aprendiz->setApellido($apellido);
    $aprendiz->setGenero($genero);
    $aprendiz->setEdad($edad);

    $aprendiz->Editar();

    // Redireccionar a la página de lista de apendices
    header("Location: ../index.php");
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre;?>"><br><br>
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" value="<?php echo $apellido;?>"><br><br>
    <label for="genero">Género:</label>
    <select id="genero" name="genero">
        <option value="Masculino" <?php if ($genero == 'Masculino') echo 'selected';?>>Masculino</option>
        <option value="Femenino" <?php if ($genero == 'Femenino') echo 'selected';?>>Femenino</option>
    </select><br><br>
    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" value="<?php echo $edad;?>"><br><br>
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input type="submit" value="Actualizar">
</form>