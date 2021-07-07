<br><br><br>
<div class="estiro color">

    <center>
        <h1 class="text-dark">Mi Perfil</h1>
    </center>
    <br>
    <center>
        <div class="container text-dark cambio3">

            <?php if ($socio) : ?>
                <?php
                foreach ($socio->result() as $worker) {
                ?>
                    <img class="img-fluid do" src="<?php echo ruta; ?>assets/Imagenes/perfil/<?= $worker->foto ?>" alt="">
                    <br><br>
                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputEmail4">nombre </label>
                            <input type="email" class="form-control" id="inputEmail4" disabled value="<?= $worker->nombre ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">apellidopaterno</label>
                            <input type="text" class="form-control" id="inputPassword4" disabled value="<?= $worker->apellidopaterno ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">apellidomaterno</label>
                            <input type="text" class="form-control" id="inputPassword4" disabled value="<?= $worker->apellidomaterno ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">fechanacimiento </label>
                            <input type="email" class="form-control" id="inputEmail4" disabled value="<?= $worker->fechanacimiento ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">telefono</label>
                            <input type="text" class="form-control" id="inputPassword4" disabled value="<?= $worker->telefono ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">correo</label>
                            <input type="text" class="form-control" id="inputPassword4" disabled value="<?= $worker->correo ?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">sexo </label>
                            <input type="email" class="form-control" id="inputEmail4" disabled value="<?= $worker->sexo ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">contrasena</label>
                            <input type="password" class="form-control" id="inputPassword4" disabled value="<?= $worker->contrasena ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">correo</label>
                            <input type="text" class="form-control" id="inputPassword4" disabled value="<?= $worker->correo ?>">
                        </div>
                    </div>
                    <h3>Datos de socio</h3>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">direccion </label>
                            <input type="email" class="form-control" id="inputEmail4" disabled value="<?= $worker->direccion ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">edad</label>
                            <input type="password" class="form-control" id="inputPassword4" value="d" disabled value="<?= $worker->edad ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">ocupacion</label>
                            <input type="text" class="form-control" id="inputPassword4" disabled value="<?= $worker->ocupacion ?>">
                        </div>
                    </div>
                <?php } ?>
            <?php else : ?>
                <tr>
                    <td colspan="10">
                        <center>No existen registros</center>
                    </td>
                </tr>
            <?php endif ?>
        </div>
        <br><br><br>
        <br>
    </center>
</div>
<style>
    .do {
        width: 30%;
    }
</style>