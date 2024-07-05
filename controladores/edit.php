<?php
require __DIR__ . "/../clase/aprendiz.php";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_GET["id"];
    $aprendiz = new Aprendiz();
    $aprendiz->setId($id);
    $persona = $aprendiz->buscarPorId();
        var_dump($persona);

    foreach ($persona as $key => $value) {
    $nombre = $value["nombre"];
    $apellido = $value["apellido"];
    $genero = $value["genero"];
    $edad = $value["edad"];
    }
    
    var_dump($nombre);

    $nombre = $_GET["nombre"];

}

?>
<form action="actualizar.php" method="POST">
<input type="hidden" value="<?php echo $id ?>" name="id">
<div>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $nombre ?>">
</div>
<div>
    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="apellido" value="<?php echo $apellido ?>">
</div>
<div>
    <label>Genero</label>
    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($genero === 'masculino') ? 'checked' : ''; ?>>
    <label for="masculino">Masculino</label>
    <input type="radio" id="femenino" name="genero" value="femenino" <?php echo ($genero === 'femenino') ? 'checked' : ''; ?>>
    <label for="femenino">Femenino</label>
</div>
<div>
    <label for="edad">Edad</label>
    <input type="text" id="edad" name="edad" value="<?php echo $edad ?>">
</div>
<button type="submit">Actualizar</button>
</form>