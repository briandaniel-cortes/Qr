<br>
<br><br><br><br>
<center><div class="container trasparente pequeño text-center">
<img class="img-fluid login" src="<?php echo ruta; ?>assets/Imagenes//SitioWeb/login.png" alt="">
    <form class="needs-validation" novalidate method="POST" action="<?php echo ruta; ?>/Welcome/registrar">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Nombres</label>
                <input type="text" class="form-control" id="validationTooltip01" name="nombre" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Apellido Paterno</label>
                <input type="text" class="form-control" id="validationTooltip02" name="apellidopaterno" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Apellido Materno</label>
                <input type="text" class="form-control" id="validationTooltip02" name="apellidomaterno" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
        </div>
        <div class="form-row">

            <div class="col-md-1 mb-3">
                <label for="validationTooltip03">Dia</label>
                <input type="text" class="form-control" id="validationTooltip03" name="dia" required maxlength="2">
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-1 mb-3">
                <label for="validationTooltip03">Mes</label>
                <input type="text" class="form-control" id="validationTooltip03" name="mes" required maxlength="2">
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-2 mb-2">
                <label for="validationTooltip03">Año</label>
                <input type="text" class="form-control" id="validationTooltip03" name="ao" required maxlength="4">
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
                
            </div>

            

            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Sexo</label>

                <select class="custom-select" id="validationTooltip04" name="sexo" required>
                    <option selected disabled value="">Choose...</option>
                    <?php if ($sexo) : ?>
                        <?php
                        foreach ($sexo->result() as $worker) {
                        ?>
                            <option value="<?= $worker->id ?>"><?= $worker->sexo ?></option>
                        <?php } ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="10">
                                <center>No existen registros</center>
                            </td>
                        </tr>
                    <?php endif ?>
                </select>

                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Telefono</label>
                <input type="text" class="form-control" name="telefono" id="validationTooltip05" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label for="validationTooltip05">Correo</label>
                <input type="text" class="form-control" name="correo" id="validationTooltip05" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
                
            </div>
            <div class="col-md-5 mb-3">
                <label for="validationTooltip05">Contraseña</label>
                <input type="text" class="form-control" name="contras" id="validationTooltip05" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
                
            </div>

        </div>
        <button class="btn btn-primary" type="submit">Crear cuenta de usuario</button><br>
        <a href="<?php echo ruta; ?>welcome/milogin">Ya tengo una cuenta</a>
    </form>
</div>
</center>
