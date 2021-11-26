<br><br><br><br>
<div class=" cambio color">
    <center>
        <h1 class="text-dark">Tus Promociones </h1>
        <br><br>
        <a href="<?php echo ruta; ?>/Admon/monumentosagregar" class="btn btn-info">Agregar</a>
        <br><br><br>

        <div class="cambio2">
             <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Codigo Qr</th>
                        <th scope="col"><center>Acciones</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($monumentos) : ?>
                        <?php
                        foreach ($monumentos->result() as $worker) {
                        ?>
                            <tr>
                                <td><?= $worker->id ?></td>
                                <td><?= $worker->titulo ?></td>
                                <td><?= $worker->descripcion ?></td>
                                <td><?= $worker->foto ?> </td>
                                <td><?= $worker->codigo ?> </td>
                               
                               
                                <td>
                                    <h2>
                                        <center>

                                            <form action="<?php echo ruta; ?>/Admon/Eliminarmonumentos" method="POST" id="for">
                                                <input type="hidden" name="idpromo" value="<?= $worker->id ?>">

                                            </form>
                                            <button type="button" class="btn btn-danger" onclick="op()">Eliminar</button>
                                            <form action="<?php echo ruta; ?>/Admon/monumentoseditar" method="POST">
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
                cancelButtonText: "Cancelar",
                confirmButtonText: 'Si, Lo elminare!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("for").submit();
                }
            })
        }
    </script>