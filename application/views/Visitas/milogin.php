<br>
<br><br><br><br>
<center>
    <div class="container trasparente pequeño2 text-center">
        <img class="img-fluid login" src="<?php echo ruta; ?>assets/Imagenes//SitioWeb/login.png" alt="">
        <form class="needs-validation" novalidate method="POST" action="<?php echo ruta; ?>/Welcome/logeando">
            <div class="form">
                <div class="p-7 ">
                    <label for="validationTooltip01">Correo</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="correo" required>
                    <div class="valid-tooltip">

                    </div>
                    <div class="invalid-tooltip">

                    </div>

                    <label for="validationTooltipUsername">Contraseña</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="contra" required>
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