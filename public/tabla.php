<?php
require __DIR__ . ('/../clase/aprendiz.php');
$aprendiz = new Aprendiz();
$person=$aprendiz->Listar();
$prueba=$aprendiz->Eliminar()

?>
<table>
  <thead>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Generi</th>
    <th>Edad</th>
  </thead>
  <tbody>
    <?php

foreach ($person as $key => $value) {
  ?>
    <tr>
      <td><?php echo $value["id"] ?></td>
      <td><?php echo $value["nombre"] ?></td>
      <td><?php echo $value["apellido"] ?></td>
      <td><?php echo $value["genero"] ?></td>
      <td><?php echo $value["edad"] ?></td>
      <td>
        <form action="controladores/controlador.php" method="GET">
          <input type="hidden" value="<?php echo $value["id"] ?>" name="id">
          <button>Eliminar</button>
        </form>
        <form action="controladores/editar.php" method="GET">
          <input type="hidden" value="<?php echo $value["id"] ?>" name="id">
          <button>Editar</button>
        </form>
      </td>
    </tr>
    <?php
    } ?>
  </tbody>
</table>