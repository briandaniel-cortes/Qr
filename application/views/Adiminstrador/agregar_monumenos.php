<br>
<br><br><br><br>
<center>
    <div class="container cambio3 pequeño text-center">
        <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="<?php echo ruta; ?>/Admon/agregamonumento">

            <center>
                <div class="">

                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip01">Titulo</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="titulo" value="" required>
                        <div class="valid-tooltip">

                        </div>
                        <div class="invalid-tooltip">

                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip01">Descripcion</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="descripcion" value="" required>
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
                    <div class="col-md-4 mb-3">
                        <label for="validationTooltip01">Codigo</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="codigo" value="" required>
                        <div class="valid-tooltip">

                        </div>
                        <div class="invalid-tooltip">

                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </center>




        </form>
    </div>
</center>
<style>
    .fotogra {
        width: 50%;
    }
</style>