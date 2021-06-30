<br><br><br>
<center>
    <div id="fb-root"></div>
    <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>

</center>
<div class="card text-dark  estiro">
    <?php if ($localfetalle) : ?>
        <?php
        foreach ($localfetalle->result() as $worker) {
        ?>
            <h5 class="card-header"><?= $worker->nombrelocal ?></h5>

            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><?= $worker->Descripciondellocal ?></p>
                        <hr>
                        <p class="card-text">
                        <h6>Direccion del local</h6>
                        </p>
                        <p class="card-text"><?= $worker->direccionlocal ?></p>
                        <p class="card-text">
                        <h6>Correo del local</h6>
                        </p>
                        <p class="card-text"><?= $worker->correolocal ?></p>
                        <p class="card-text">
                        <h6>Telefono</h6>
                        </p>
                        <p class="card-text"><?= $worker->telefonolocal ?></p>
                        <p class="card-text">
                        <h6>Tipo</h6>
                        </p>
                        <p class="card-text"><?= $worker->tipo ?></p>
                        <p class="card-text">
                        <h6></h6>
                        </p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Lunes</th>
                                    <th scope="col">Martes</th>
                                    <th scope="col">Miercoles</th>
                                    <th scope="col">Jueves</th>
                                    <th scope="col">Viernes</th>
                                    <th scope="col">Sabado</th>
                                    <th scope="col">Dommingo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="card-text"><?= $worker->lunes ?></p>
                                    </td>
                                    <td>
                                        <p class="card-text"><?= $worker->martes ?></p>
                                    </td>
                                    <td>
                                        <p class="card-text"><?= $worker->miercoles ?></p>
                                    </td>
                                    <td>
                                        <p class="card-text"><?= $worker->jueves ?></p>
                                    </td>
                                    <td>
                                        <p class="card-text"><?= $worker->viernes ?></p>
                                    </td>
                                    <td>
                                        <p class="card-text"><?= $worker->sabado ?></p>
                                    </td>
                                    <td>
                                        <p class="card-text"><?= $worker->domingo ?></p>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo ruta; ?>assets//Imagenes/locales/<?= $worker->foto ?>" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo ruta; ?>assets//Imagenes/locales/<?= $worker->foto ?>" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <div id="fb-root"></div>
                        <div class="fb-video" data-href="https://www.facebook.com/watch/?v=<?= $worker->facebookvideo ?> " data-width="600" data-show-text="false">
                            <blockquote cite="https://developers.facebook.com/<?= $worker->facebooklink ?>" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/EvilDoggo/videos/295246335483399/"></a>
                                <p></p>Publicado por <a href="https://www.facebook.com/EvilDoggo">Evil Doge</a> en Sábado, 22 de mayo de 2021
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3>Comentarios</h3>
                    <div id="fb-root"></div>
                    <div class="fb-comments" data-href="https://www.facebook.com/<?= $worker->facebook ?>" data-width="" data-numposts="5"></div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="invi">
                        <?= $dat0 = $worker->google ?>
                    </div>
                    <?php
                    if (empty($dat0)) {
                    } else {
                    ?>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30584.154082933706!2d-98.43084787142155!3d21.14181407707425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d726937c6d4e45%3A0x4943316bd6808859!2sHuejutla%2C%20Hgo.!5e1!3m2!1ses!2smx!4v1624819382823!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <?php
                    } ?>

                </div>
                <div class="col">

                </div>

            </div>

        <?php } ?>
    <?php else : ?>
        <tr>
            <td colspan="10">
                <center>No existen registros</center>
            </td>
        </tr>
    <?php endif ?>
</div>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0&appId=2538167006398904&autoLogAppEvents=1" nonce="Dv275lZp"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v11.0&appId=2538167006398904&autoLogAppEvents=1" nonce="MdFsOP1S"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0&appId=2538167006398904&autoLogAppEvents=1" nonce="pkCo73ey"></script>