<?php
require __DIR__ . ('/../clase/aprendiz.php');
$aprendiz = new Aprendiz();
$aprendiz->Listar();
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

    foreach ($aprendiz as $key => $value) {
    ?>
      <tr>
        <td>
          <?php
          echo $value = ('id');
          ?>
        <td>
          <?php
          echo $value = ('nombre');
          ?>
        </td>
        <td>
          <?php
          echo $value = ('apellido');
          ?>
        </td>
        <td>
          <?php
          echo $value = ('genero');
          ?>
        </td>
        <td>
          <?php
          echo $value = ('edad');
          ?>
        </td>
        <td>
          <form action="controladores/controlador.php"method="POST">
            <input tpye="hidden"value=""><?php echo $value=('id')?>
            <button>Elimnar</button>
          </form>
        </td>
      </tr>

    <?php
    } ?>
  </tbody>
</table>