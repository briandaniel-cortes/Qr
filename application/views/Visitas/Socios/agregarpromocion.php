<br>
<br><br><br><br>
<center><div class="container cambio2 pequeño text-center">
<img class="img-fluid login" src="<?php echo ruta; ?>assets/Imagenes//SitioWeb/login.png" alt="">
    <form class="needs-validation" novalidate method="POST" action="<?php echo ruta; ?>/Welcome/registrar">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Titulo de la promocion </label>
                <input type="text" class="form-control" id="validationTooltip01" name="promo" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Descripcion </label>
                <input type="text" class="form-control" id="validationTooltip02" name="descripcion" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Fecha inicio</label>
                <input type="text" class="form-control" id="validationTooltip02" name="fechainicio" required>
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
        </div>
        <div class="form-row">

            <div class="col-md-1 mb-3">
                <label for="validationTooltip03">Fecha final</label>
                <input type="text" class="form-control" id="validationTooltip03" name="fechafinal" required maxlength="2">
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-1 mb-3">
                <label for="validationTooltip03">Local</label>
                <input type="text" class="form-control" id="validationTooltip03" name="locale" required maxlength="2">
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-2 mb-2">
                <label for="validationTooltip03">Precio </label>
                <input type="text" class="form-control" id="validationTooltip03" name="preciofijo" required maxlength="4">
                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
                
            </div>

            

            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">Descuento</label>

                <select class="custom-select" id="validationTooltip04" name="preciodescuento" required>
                    <option selected disabled value="">Choose...</option>
                 
                </select>

                <div class="valid-tooltip">

                </div>
                <div class="invalid-tooltip">

                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Foto promocion</label>
                <input type="text" class="form-control" name="fotopromo" id="validationTooltip05" required>
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
