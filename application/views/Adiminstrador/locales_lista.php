<br><br><br><br>
<div class=" cambio color">
    <center>
        <h1 class="text-dark">Locales </h1>
        <br><br>


        <div class="cambio2">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Local</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Accion</th>

                    </tr>
                </thead>
                <tbody>
                    <?php if ($locales) : ?>
                        <?php
                        foreach ($locales->result() as $worker) {
                        ?>
                            <tr>
                                <td><?= $worker->id ?></td>
                                <td><?= $worker->nombrelocal ?></td>
                                <td><?= $worker->Descripciondellocal ?></td>
                                <td><?= $worker->direccionlocal ?></td>
                                <td><?= $worker->correolocal ?></td>
                                <td><?= $worker->telefonolocal ?></td>
                                <td><?= $worker->tipo ?></td>
                                <td>
                                    <h2>


                                        <form action="<?php echo ruta; ?>/Socios/eliminarpromo" method="POST" id="for">
                                            <input type="hidden" name="idpromo" value="<?= $worker->id ?>">

                                        </form>
                                        <button type="button" class="btn btn-danger" onclick="op()">Eliminar</button>
                                        <form action="<?php echo ruta; ?>/Socios/editarpromociones" method="POST">
                                            <input type="hidden" name="localid" value="<?= $worker->id ?>">

                                            <button type="submit" class="btn btn-success">Ver mas</button>

                                        </form>
                                    </h2>
                                </td>
                            </tr>

                </tbody>
            <?php } ?>
        <?php else : ?>
            <tr>
                <td colspan="10">
                    <center>No existen registros</center>
                </td>
            </tr>
        <?php endif ?>
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