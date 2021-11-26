<br><br><br><br>
<div class=" cambio color">
    <center>
        <h1 class="text-dark">Usuarios </h1>
        <br><br>
        <div class="cambio2">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Perfil</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($Usuario) : ?>
                        <?php
                        foreach ($Usuario->result() as $worker) {
                        ?>
                            <tr>
                                <td><?= $worker->id ?></td>
                                <td><?= $worker->nombre ?> <?= $worker->apellidopaterno ?> <?= $worker->apellidomaterno ?></td>
                                <td>de <?= $worker->fechanacimiento ?> </td>
                                <td><?= $worker->telefono ?></td>
                                <td><?= $worker->correo ?></td>
                                <td><?= $worker->sexo ?></td>
                                <td><?= $datoss = $worker->tipo ?></td>
                                <td><?= $worker->foto  ?></td>
                                <td><?= $worker->contrasena  ?></td>

                                <td>
                                    <h2>
                                        <center>
                                            <?php if ($datoss == 'admin') {
                                                echo "no se puede elminar";
                                            } else {
                                            ?>
                                                <form action="<?php echo ruta; ?>/Admon/EliminarUsuario" method="POST" id="for">
                                                    <input type="hidden" name="idpromo" value="<?= $worker->id ?>">

                                                </form>
                                                <button type="button" class="btn btn-danger" onclick="op()">Eliminar</button>
                                            <?php
                                            }
                                            ?>


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