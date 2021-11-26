<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="autor" content="">

        
        <title>Registro</title>
        <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> -->
        
        <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
        </head>
    <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
          

            </div>
            
        </nav>
        

        <div class=" cambio color">
    <section class="page-section" id="contact">
            <div class="container">
            <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
       
            </ol>
            </nav>
            </div>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Registrarme</h2>
                    <h3 class="section-subheading text-muted">Unete a nosotros y disfruta de los beneficios.</h3>
                </div>
                <div class="alert alert-danger" id="msg-error" style="text-align:left;">
                    <strong>Importante</strong> corregir errores
                    <div class="list-errors"></div>
                </div>
                <form id="contactForm" name="sentMessage" novalidate="novalidate" action="<?php echo base_url(); ?>locales/registro" method="POST"  enctype="multipart/form-data">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">

                            <div class="input-group is-invalid">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="validatedInputGroupSelect">Usuario</label>
                            </div>
                            <select  class="custom-select <?php echo form_error('socio') ? 'is-invalid':'' ; ?>"  name="socio"
                            data-validation-required-message="Socio." value="<?php echo set_value('socio'); ?>" required>
                                
                                <?php $i=1; foreach($socio as $dato) {?>  
                                <option value="<?php echo $dato->id; ?>"><?php echo $dato->nombre; ?></option>
                                <?php $i++; } ?> 
                            </select>

                            </div>
                                <div class="invalid-feedback">
                                <?php echo form_error('socio'); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <input class="form-control <?php echo form_error('localname') ? 'is-invalid':'' ; ?>"  name="localname"
                                 type="text" placeholder="El nombre de tu local *" required="required" data-validation-required-message="Coloque el nombre del local." 
                                 value="<?php echo set_value('localname'); ?>"/>
                                <div class="invalid-feedback">
                                <?php echo form_error('localname'); ?>
                                </div>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control <?php echo form_error('localphone') ? 'is-invalid':'' ; ?>"  name="localphone"
                                type="text" placeholder="El telefono de tu local *" required="required" 
                                data-validation-required-message="Please enter your phone number." value="<?php echo set_value('localphone'); ?>"/>
                                <div class="invalid-feedback">
                                <?php echo form_error('localphone'); ?>
                                </div>
                            </div>
                            <br>

                            <div class="input-group is-invalid">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="validatedInputGroupSelect">Tipo local</label>
                                </div>
                                <select  class="custom-select <?php echo form_error('localtipo') ? 'is-invalid':'' ; ?>"  name="localtipo"
                                data-validation-required-message="coloque el tipo de local." value="<?php echo set_value('localtipo'); ?>" required>
                                    
                                    <?php $i=1; foreach($categoria as $dato) {?>  
                                    <option value="<?php echo $dato->id; ?>"><?php echo $dato->tipo; ?></option>
                                    <?php $i++; } ?> 
                                </select>

                            </div>
                            
                            <div class="form-row">
                                <div class="col-md-3 mb-12">
                                    <label class="section-subheading text-muted">Lunes :</label>
                                    <label class="section-subheading text-muted">Abre</label>
                                    <input type="time" class="form-control <?php echo form_error('lunestimeopen') ? 'is-invalid':'' ; ?>" name="lunestimeopen" 
                                    data-validation-required-message="coloque abertura Lunes." value="<?php echo set_value('lunestimeopen'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('lunestimeopen'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Cierra</label>
                                <input type="time" class="form-control <?php echo form_error('lunestimeclose') ? 'is-invalid':'' ; ?>" name="lunestimeclose" 
                                    data-validation-required-message="coloque cierre Lunes." value="<?php echo set_value('lunestimeclose'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('lunestimeclose'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Martes :</label>
                                <label class="section-subheading text-muted">Abre</label>
                                <input type="time" class="form-control <?php echo form_error('martestimeopen') ? 'is-invalid':'' ; ?>" name="martestimeopen" 
                                    data-validation-required-message="coloque abertura Martes." value="<?php echo set_value('martestimeopen'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('martestimeopen'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Cierra</label>
                                <input type="time" class="form-control <?php echo form_error('martestimeclose') ? 'is-invalid':'' ; ?>" name="martestimeclose" 
                                    data-validation-required-message="coloque cierre Martes." value="<?php echo set_value('martestimeclose'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('martestimeclose'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Miercoles :</label>
                                <label class="section-subheading text-muted">Abre</label>
                                <input type="time" class="form-control <?php echo form_error('miercolestimeopen') ? 'is-invalid':'' ; ?>" name="miercolestimeopen" 
                                    data-validation-required-message="coloque abertura Miercoles." value="<?php echo set_value('miercolestimeopen'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('miercolestimeopen'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Cierra</label>
                                <input type="time" class="form-control <?php echo form_error('miercolestimeclose') ? 'is-invalid':'' ; ?>" name="miercolestimeclose" 
                                    data-validation-required-message="coloque cierre Miercoles." value="<?php echo set_value('miercolestimeclose'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('miercolestimeclose'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Jueves :</label>
                                <label class="section-subheading text-muted">Abre</label>
                                <input type="time" class="form-control <?php echo form_error('juevestimeopen') ? 'is-invalid':'' ; ?>" name="juevestimeopen" 
                                    data-validation-required-message="coloque abertura Jueves." value="<?php echo set_value('juevestimeopen'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('juevestimeopen'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Cierra</label>
                                <input type="time" class="form-control <?php echo form_error('juevestimeclose') ? 'is-invalid':'' ; ?>" name="juevestimeclose" 
                                    data-validation-required-message="coloque cierre Jueves." value="<?php echo set_value('juevestimeclose'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('juevestimeclose'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Viernes :</label>
                                <label class="section-subheading text-muted">Abre</label>
                                <input type="time" class="form-control <?php echo form_error('viernestimeopen') ? 'is-invalid':'' ; ?>" name="viernestimeopen" 
                                    data-validation-required-message="coloque abertura Viernes." value="<?php echo set_value('viernestimeopen'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('viernestimeopen'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Cierra</label>
                                <input type="time" class="form-control <?php echo form_error('viernestimeclose') ? 'is-invalid':'' ; ?>" name="viernestimeclose" 
                                    data-validation-required-message="coloque cierre Viernes." value="<?php echo set_value('viernestimeclose'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('viernestimeclose'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Sabado :</label>
                                <label class="section-subheading text-muted">Abre</label>
                                <input type="time" class="form-control <?php echo form_error('sabadotimeopen') ? 'is-invalid':'' ; ?>" name="sabadotimeopen" 
                                    data-validation-required-message="coloque abertura Sabado." value="<?php echo set_value('sabadotimeopen'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('sabadotimeopen'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-12">
                                <label class="section-subheading text-muted">Cierra</label>
                                <input type="time" class="form-control <?php echo form_error('sabadotimeclose') ? 'is-invalid':'' ; ?>" name="sabadotimeclose" 
                                    data-validation-required-message="coloque cierre Sabado." value="<?php echo set_value('sabadotimeclose'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('sabadotimeclose'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                <label class="section-subheading text-muted">Domingo :</label>
                                <label class="section-subheading text-muted">Abre</label>
                                <input type="time" class="form-control <?php echo form_error('domingotimeopen') ? 'is-invalid':'' ; ?>" name="domingotimeopen" 
                                    data-validation-required-message="coloque abertura Domingo." value="<?php echo set_value('sabadomingotimeopendotimeopen'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('domingotimeopen'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                <label class="section-subheading text-muted">Cierra</label>
                                <input type="time" class="form-control <?php echo form_error('domingotimeclose') ? 'is-invalid':'' ; ?>" name="domingotimeclose" 
                                    data-validation-required-message="coloque cierre Domingo." value="<?php echo set_value('domingotimeclose'); ?>" required>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('domingotimeclose'); ?>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <input class="form-control <?php echo form_error('localvideo') ? 'is-invalid':'' ; ?>"  name="localvideo"
                                    type="text" placeholder="facebook video*" required="required" data-validation-required-message="Please enter your facebook video." value="<?php echo set_value('localvideo'); ?>"/>
                                    <div class="invalid-feedback">
                                    <?php echo form_error('localvideo'); ?>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input class="form-control <?php echo form_error('locallink') ? 'is-invalid':'' ; ?>"  name="locallink"
                                    type="text" placeholder="facebook link*" required="required" data-validation-required-message="Please enter your facebook link." value="<?php echo set_value('locallink'); ?>"/>
                                    <div class="invalid-feedback">
                                    <?php echo form_error('locallink'); ?>
                                    </div>
                                </div>
                              
                            </div>
                        </div> <!--aqui termina una columa-->

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6 mb-4">
                                        <div class="input-group is-invalid">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="validatedInputGroupSelect">Estado</label>
                                            </div>
                                            <select  class="custom-select <?php echo form_error('localtipo') ? 'is-invalid':'' ; ?>"  name="localEstado" id="idEstado"
                                            data-validation-required-message="coloque el tipo de local." value="<?php echo set_value('localtipo'); ?>"  required>
                                            <option value="">Selecciona tu estado</option>
                                                <?php $i=1; foreach($estado as $dato) {?>  
                                                <option value="<?php echo $dato->id; ?>"><?php echo $dato->estado; ?></option>
                                                <?php $i++; } ?> 
                                            </select>
                                          

                                        </div>

                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <div class="input-group is-invalid">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="validatedInputGroupSelect">Municipio</label>
                                            </div>
                                            <select  class="custom-select <?php echo form_error('localtipo') ? 'is-invalid':'' ; ?>"   name="localMunicipio" id="idMunicipio"
                                            data-validation-required-message="coloque el tipo de local." value="<?php echo set_value('localtipo'); ?>" disabled="" required>
                                                
                                                <option value="">Municipio</option>
                                                 
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control <?php echo form_error('direccion') ? 'is-invalid':'' ; ?>"  name="direccion" 
                                type="text" placeholder="La direccion de tu local *" required="required" 
                                data-validation-required-message="Coloque su direccion *." value="<?php echo set_value('direccion'); ?>"/>
                                <div class="invalid-feedback">
                                <?php echo form_error('direccion'); ?>
                                </div>
                            </div>
                        <div class="form-group">
                                <input class="form-control <?php echo form_error('localcorreo') ? 'is-invalid':'' ; ?>"  name="localcorreo"
                                 type="email" placeholder="El correo de tu local *" required="required" 
                                 data-validation-required-message="Please enter your email." value="<?php echo set_value('localcorreo'); ?>"/>
                                <div class="invalid-feedback">
                                <?php echo form_error('localcorreo'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-4">
                                    <input type="file" class="custom-file-input"  name="localfoto"
                                    data-validation-required-message="Please enter your foto." value="<?php echo set_value('localfoto'); ?>" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Foto</label>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('localfoto'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <input class="form-control <?php echo form_error('localdescripcion') ? 'is-invalid':'' ; ?>"  name="localdescripcion" type="text"
                                 placeholder="Descripcion del local *" required="required" data-validation-required-message="Please enter your email address." 
                                 value="<?php echo set_value('localdescripcion'); ?>"/>

                                <div class="invalid-feedback">
                                <?php echo form_error('localdescripcion'); ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-4">
                                    <input type="file" name="localfoto1" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Foto</label>
                                    <div class="invalid-feedback">
                                    <?php echo form_error('localfoto1'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="file" name="localfoto2" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Foto</label>
                                    <div class="invalid-feedback">
                                    <?php echo form_error('localfoto2'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <input type="file" name="localfoto3" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">Foto</label>
                                    <div class="invalid-feedback">
                                    <?php echo form_error('localfoto3'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control <?php echo form_error('localface') ? 'is-invalid':'' ; ?>"  name="localface"
                                 type="text" placeholder="Facebook *" required="required" data-validation-required-message="Please enter your facebook." value="<?php echo set_value('localface'); ?>"/>
                                <div class="invalid-feedback">
                                <?php echo form_error('localface'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control <?php echo form_error('localgoogle') ? 'is-invalid':'' ; ?>"  name="localgoogle"
                                 type="text" placeholder="Google*" required="required" data-validation-required-message="Please enter your google." value="<?php echo set_value('localgoogle'); ?>"/>
                                <div class="invalid-feedback">
                                <?php echo form_error('localgoogle'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Registrarme</button>
                    </div>

            </div>

        </section>


  
        <script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>  

     <!--   <script type="text/javascript">
            $(document).ready(function () {
                $("#idEstado").change(funcion (){
                    $("#idEstado option:selected").each(function () {
                        idEstado = $('#idEstado').val();
                        $.post("<?php echo base_url(); ?>municipio", {
                            idEstado : idEstado
                        }, function(data) {
                            $("#idMunicipio").html(data);
                        },
                            error: function(){
                                alert('error ...');
                                }
                    });
                });
            });
        </script> -->

        <script type="text/javascript">
            $(document).ready(function(){
                $('#idEstado').on('change', function(){
                    var idEstado = $(this).val();
                    if(idEstado == '')
                    {
                        $('#idMunicipio').prop('disabled', true);
                    } else {
                        $('#idMunicipio').prop('disabled', false);
                        $.ajax({
                            url:"<?php echo base_url()?>local/addlocal/get_Muncipio",
                            type:"POST",
                            data: {'idEstado' : idEstado},
                            dataType: 'json',
                            success: function(data){
                                $('#idMunicipio').html(data);
                            },
                            error: function(){
                                alert('error ...');
                            }
                        });
                    }
                });
            });
        </script>
 <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>  
 <script src="<?php echo base_url(); ?>assets/js/asincronas.js"></script> 
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>

<style>
    .cambio {
        background-image: url("https://qrtourproyecto.000webhostapp.com/imagenes/local2.png");
        background-attachment: fixed;
    }

    .color {
        background-color: rgb(252, 232, 167)
    }

    .foto {
        width: 50%;
    }

    .tam {
        font-size: 300%;
    }

    .texto-encima {
        position: absolute;
        top: 10px;
        left: 10px;
    }

    .centrado {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>