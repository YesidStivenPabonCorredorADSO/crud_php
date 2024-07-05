<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <!-- Formulario con metodo post -->
  <form action="controladores/controlador.php" method="POST">
    <!-- Campo para el nombre -->
    <div>
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
    </div>
    <!-- Campo para el apellido -->
    <div>
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" name="apellido" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
    </div>
    <!-- Campo para el genero -->
    <div>
      <label for="genero">Genero</label>
      <br>
      <label for="masculino">Masculino</label>
      <input type="radio" id="masculino" name="genero" value="masculino">
      <label for="femenino">Femenino</label>
      <input type="radio" id="femenino" name="genero" value="femenino">
    </div>
    <!-- Campo para la edad -->
    <div>
      <label for="edad">Edad</label>
      <input type="number" id="edad" name="edad">
    </div>
    <!-- Boton para enviar -->
    <button type="submit">Enviar</button>
  </form>

</body>

</html>