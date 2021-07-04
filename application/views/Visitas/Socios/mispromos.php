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
                <td><?= $datss = $worker->preciofijo ?></td>
                <td><?= $worker->preciodescuento ?></td>
                <td><?= $worker->fotopromo ?></td>
                <td><?= $datoss = $worker->preciofijo - $worker->preciodescuento ?></td>
                <?php
                if ($datoss <= 0) {
                ?>
                  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                  <script>
                    window.addEventListener('load', ups, false);

                    function ups() {
                      Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'ahi un problema, una de tus promociones tiene numero negativos porfavor revisalo y cambialo cuanto antes',

                      })
                    }
                  </script>
                <?php
                }
                ?>
                <td>
                  <h2>
                    <center>

                      <form action="<?php echo ruta; ?>/Socios/eliminarpromo" method="POST" id="for">
                        <input type="hidden" name="idpromo" value="<?= $worker->id ?>">
                       
                      </form>
                      <button type="button" class="btn btn-danger" onclick="op()">Eliminar</button>
                      <form action="<?php echo ruta; ?>/Socios/editarpromociones" method="POST">
                        <input type="hidden" name="localid" value="<?= $worker->id ?>">

                        <button type="submit" class="btn btn-success">Actualizar</button>

                      </form>
                  </h2>
                </td>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    function op() {
      Swal.fire({
        title: 'Seguro que deseas eliminarlo?',
        text: "Ya no podras recuperar el archivo!!!!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText:"Cancelar",
        confirmButtonText: 'Si, Lo elminare!'
      }).then((result) => {
        if (result.isConfirmed) {
          document.getElementById("for").submit();
        }
      })
    }
  </script>