<br>
<br><br><br><br>

<center>
<h3>Conviertete en un socio y promociona tu local aqui</h3>
<br><br>
    <div class="container trasparente pequeño2 text-center">
        <img class="img-fluid login" src="<?php echo ruta; ?>assets/Imagenes//SitioWeb/loginsocio.png" alt="">
        <form class="needs-validation" novalidate method="POST" action="<?php echo ruta; ?>/Usuarios/registrasocio">
            <div class="form">
                <div class="p-7 ">
                    <h5>Nesecitamos tu correo con el que te registrastes y Tu contraseña</h5>
                    <label for="validationTooltip01">Correo</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="correo" required>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>

                    <label for="validationTooltipUsername"> Contraseña</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="contrasena" required>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                    <label for="validationTooltipUsername">Direccion </label>
                    <input type="text" class="form-control" id="validationTooltip02" name="direccion" required>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                    <label for="validationTooltipUsername">Edad
                    </label>
                    <input type="text" class="form-control" id="validationTooltip02" name="edad" required>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                    <label for="validationTooltipUsername">Ocupacion</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="ocupacion" required>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Crear cuenta de usuario</button><br>
            <a href="<?php echo ruta; ?>welcome/login">No Tengo Una Cuenta</a>
        </form>
    </div>
</center>