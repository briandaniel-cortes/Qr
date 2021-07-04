<br><br><br><br>
<div class=" cambio color">
  <center>
    <h1 class="text-dark">Tus Promociones </h1>
    <br><br>
    <div class="cambio2">
    <h1 class="text-dark"><a href="<?php echo ruta; ?>/Socios/agregarpromociones" class="btn btn-info">Agregar Promocion</a></h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Promo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha</th>
            <th scope="col">Nombre Local</th>
            <th scope="col">Precio</th>
            <th scope="col">Descuento</th>
            <th scope="col">Imagen</th>
            <th scope="col">Total</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($Promociones) : ?>
            <?php
            foreach ($Promociones->result() as $worker) {
            ?>
              <tr>
                <td><?= $worker->promo ?></td>
                <td><?= $worker->descripcion ?></td>
                <td>de <?= $worker->fechainicio ?> a <?= $worker->fechafinal ?></td>
                <td><?= $worker->nombrelocal ?></td>
                <td><?= $worker->preciofijo ?></td>                
                <td><?= $worker->preciodescuento ?></td>
                <td><?= $worker->fotopromo ?></td>
                <td><?= $worker->preciofijo - $worker->preciodescuento ?></td>
                <td><h2><center><a href="" class="btn btn-danger">Eliminar</a>  <a href="" class="btn btn-success">Actualizar</a></center></h2></td>
              </tr>
            <?php } ?>
          <?php else : ?>
            <tr>
              <td colspan="10">
                <center>No existen registros</center>
              </td>
            </tr>
          <?php endif ?>
        </tbody>
      </table>


    </div>
    <br><br><br><br>
  </center>




