<script>
        function numberOnly(id) {
            var element = document.getElementById(id);
            element.value = element.value.replace(/[^0-9]/gi, "");
        }
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

</div>

<script src="<?php echo ruta; ?>/assets/Librerias/Boostrap/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="<?php echo ruta; ?>/assets/Librerias/Boostrap/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="<?php echo ruta; ?>/assets/Librerias/Boostrap/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>

<style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url('https://acegif.com/wp-content/uploads/loading-25.gif') 50% 50% no-repeat rgb(249, 249, 249);
        opacity: .8;

    }
</style>
<style>
    .estiro{
        background-image: url("https://qrtourproyecto.000webhostapp.com/imagenes/local.png");
        height: 100%;
        background-attachment: fixed;
        width: 100%;
        position: relative;

    }
    .parallax {
        background-image: url("https://www.mexicodestinos.com/blog/wp-content/uploads/2015/05/Huejutla-Hidalgo.jpg");
        height: 100%;
        width: 100%;
        position: absolute;
        background-attachment: fixed;
    }
    .parallax2 {
        background-image: url("https://qrtourproyecto.000webhostapp.com/imagenes/local.png");
        height: 100%;
        background-attachment: fixed;
        width: 75%;
        position: relative;
        align-items: center;
    }
    .locales{
        background-color: rgb(248,  223, 217);
    }

    .trasparente {
        background-color: rgba(32, 72, 133, 0.652);
        width: 100%;
    }

    .izq {
        float: right;

    }

    .foto {
        width: auto;
        height: 500px;
    }

    .logo {
        height: 50px;
    }

    .tum {
        width: 430px;
        height: 330px;
    }

    .flecha {
        width: 20%;
        height: 10%;
    }

    .pos {
        display: inline-block;
        padding: auto;
    }
    .cuadro{
        width: 100%;
    }
    .fuente {
        fill: #0dc292;
        letter-spacing: 0;
        word-spacing: 0;
        font-family: Bradley Hand ITC;
        font-size: 14pt;
        font-weight: 600;
        font-style: normal;
        font-stretch: 0
    }.chico{
        width: 10%;
        height: 10%;
    }.pequeño{
        width: 50%;
    }.pequeño2{
        width: 30%;
    }.login{
        width: 50%;
        height: auto;
        margin: auto;
    }.invi{
        visibility: hidden;
    }


</style>
<style>
* { 
-webkit-box-sizing: border-box; 
-moz-box-sizing: border-box; 
-o-box-sizing: border-box; 
box-sizing: border-box; 
/* adds animation for all transitions */ 
-webkit-transition: .25s ease-in-out; 
-moz-transition: .25s ease-in-out; 
-o-transition: .25s ease-in-out; 
transition: .25s ease-in-out; 
margin: 0; 
padding: 0; 
-webkit-text-size-adjust: none; 
} 


#drawer-toggle { 
position: absolute; 
opacity: 0; 
}

#drawer-toggle-label { 
-webkit-touch-callout: none; 
-webkit-user-select: none; 
-khtml-user-select: none; 
-moz-user-select: none; 
-ms-user-select: none; 
user-select: none; 
left: 0px; 
height:50px; 
width: 50px; 
display: block; 
position: fixed; 
background: rgba(255,255,255,.0); 
z-index: 1; 
} 

/* adds our "hamburger" menu icon */ 

#drawer-toggle-label:before { 
content: '->'; 
font-weight: 1000;
display: block; 
position: absolute; 
height: 80px; 
width: 100px; 
font-size: 300%;
color: chartreuse;
top: -20px;
} 



/* drawer menu pane - note the 0px width */ 

#drawer { 
position: fixed; 
top: 30; 
left:-300px; 
height: 5%; 
width: 300px; 
background: #2f2f2f; 
overflow-x: hidden; 
-webkit-overflow-scrolling: touch; 
} 

/* actual page content pane */ 

#page-content { 
margin-left: 0px; 
margin-top: 50px; 
width: 100%; 
height: calc(100% - 50px); 
overflow-x:hidden; 
overflow-y:scroll; 
-webkit-overflow-scrolling: touch; 
padding: 20px; 
}

/* checked styles (menu open state) */ 

#drawer-toggle:checked ~ #drawer-toggle-label { 
height: 10%; 
width: calc(100% - 300px); 
} 

#drawer-toggle:checked ~ #drawer-toggle-label, 
#drawer-toggle:checked ~ header { 
left: 300px; 
} 

#drawer-toggle:checked ~ #drawer { 
left: 0px; 
} 

#drawer-toggle:checked ~ #page-content { 
margin-left: 300px; 
}

/* Menu item styles */ 

#drawer ul { 
list-style-type:none; 
} 

#drawer ul a { 
display:block; 
padding:10px; 
color:#c7c7c7; 
text-decoration:none; 
} 

#drawer ul a:hover { 
color:white; 
} 

/* Responsive MQ */ 


</style>