<br>
<br><br><br><br>
<center>
    <div class="container cambio3 pequeño text-center">
        <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="<?php echo ruta; ?>/Socios/editpromo">
            <?php if ($promo) : ?>
                <?php
                foreach ($promo->result() as $worker) {
                ?>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip01">Titulo de la promocion </label>
                            <input type="text" class="form-control" id="validationTooltip01" name="promo" value="<?= $worker->promo ?>" required>
                            <div class="valid-tooltip">

                            </div>
                            <div class="invalid-tooltip">

                            </div>
                        </div>

                        <div class="col-md-8">
                            <input type="hidden" name="local"  value="<?= $worker->locale ?>">
                            <label for="validationTooltip03">Local</label>
                            <select class="custom-select" id="validationTooltip04" disabled required>
                                <option selected disabled value="<?= $worker->locale ?>" >No puedes cambiar este campo </option>
                                
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
                            <input type="date" class="form-control" id="validationTooltip02" name="fechainicio" value="<?= $worker->fechainicio ?>" required>
                            <div class="valid-tooltip">

                            </div>
                            <div class="invalid-tooltip">

                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <label for="validationTooltip03">Fecha final</label>
                            <input type="date" class="form-control" id="validationTooltip03" name="fechafinal" value="<?= $worker->fechafinal ?>" required maxlength="2">
                            <div class="valid-tooltip">

                            </div>
                            <div class="invalid-tooltip">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationTooltip03">Precio </label>
                            <input type="number" class="form-control" id="validationTooltip03" name="preciofijo" value="<?= $worker->preciofijo ?>" required maxlength="4">
                            <div class="valid-tooltip">

                            </div>
                            <div class="invalid-tooltip">

                            </div>

                        </div>



                        <div class="col-md-4 mb-3">
                            <label for="validationTooltip04">Descuento</label>

                            <input type="number" class="form-control" id="validationTooltip03" name="preciodescuento" value="<?= $worker->preciodescuento ?>" required maxlength="4">

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

                                    <input type="file" name="userfile" class="custom-file-input" id="inputGroupFile01" value="" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Agregar Foto</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="recuperado" value="<?= $worker->fotopromo ?>">
                        <input type="hidden" name="idpromo" value="<?= $worker->id ?>">
                                <center><img src="<?php echo ruta; ?>assets/Imagenes/locales/<?= $worker->fotopromo ?>" class="fotogra"></center>

                    </div>
                    <center>
                        <div class="col-md-8 mb-3">
                            <label for="validationTooltip02">Descripcion </label>

                            <textarea type="text" class="form-control" id="validationTooltip02" name="descripcion" required cols="40" rows="5">
                    <?= $worker->descripcion ?>
                    </textarea>
                            <div class="valid-tooltip">

                            </div>
                            <div class="invalid-tooltip">

                            </div>
                        </div>
                    </center>
                    <button class="btn btn-primary" type="submit">Crear cuenta de usuario</button><br>
                    <a href="<?php echo ruta; ?>welcome/milogin">Ya tengo una cuenta</a>
                <?php } ?>
            <?php else : ?>
                <tr>
                    <td colspan="10">
                        <center>No existen registros</center>
                    </td>
                </tr>
            <?php endif ?>
        </form>
    </div>
</center>
<style>

.fotogra{
    width: 50%;
}
</style>