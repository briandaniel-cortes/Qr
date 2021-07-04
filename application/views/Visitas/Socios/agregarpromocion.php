<br>
<br><br><br><br>
<center>
    <div class="container cambio3 pequeño text-center">
        <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data"  action="<?php echo ruta; ?>/Socios/registrarpromo">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip01">Titulo de la promocion </label>
                    <input type="text" class="form-control" id="validationTooltip01" name="promo" required>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                </div>

                <div class="col-md-8">
                    <label for="validationTooltip03">Local</label>
                    <select class="custom-select" id="validationTooltip04" name="locale"  required>
                        <option selected disabled value="">Choose...</option>
                        <?php if ($promo) : ?>
                            <?php
                            foreach ($promo->result() as $worker) {
                            ?>
                                <option value="<?= $worker->id ?>"><?= $worker->nombrelocal ?></option>
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

            </div>

            <div class="form-row">
            <div class="col-md-4 mb-3">
                    <label for="validationTooltipUsername">Fecha inicio</label>
                    <input type="date" class="form-control" id="validationTooltip02" name="fechainicio" required>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                </div>  
                <div class="col-md-4 ">
                    <label for="validationTooltip03">Fecha final</label>
                    <input type="date" class="form-control" id="validationTooltip03" name="fechafinal" required maxlength="2">
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                </div>
               
                <div class="col-md-4">
                    <label for="validationTooltip03">Precio </label>
                    <input type="number" class="form-control" id="validationTooltip03" name="preciofijo" required maxlength="4">
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>

                </div>



                <div class="col-md-4 mb-3">
                    <label for="validationTooltip04">Descuento</label>

                    <input type="number" class="form-control" id="validationTooltip03" name="preciodescuento" required maxlength="4">

                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                </div>
                <div class="col-md-8 mb-3">
                    <label for="validationTooltip05">Foto promocion</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Foto</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="userfile" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Agregar Foto</label>
                        </div>
                    </div>
                </div>


            </div>
            <center>
                <div class="col-md-8 mb-3">
                    <label for="validationTooltip02">Descripcion </label>

                    <textarea type="text" class="form-control" id="validationTooltip02" name="descripcion" required cols="40" rows="5"></textarea>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                </div>
            </center>
            <button class="btn btn-primary" type="submit">Crear cuenta de usuario</button><br>
            <a href="<?php echo ruta; ?>welcome/milogin">Ya tengo una cuenta</a>
        </form>
    </div>
</center>