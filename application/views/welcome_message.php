<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Vida y Salud Parral</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?php echo base_url(); ?>lib/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo base_url(); ?>lib/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
    <body>

        <nav class="light-blue lighten-1 nav-extended" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Vida Y Salud Parral</a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Iniciar Sesion</a></li>
                    <li><a class="waves-effect waves-light modal-trigger" href="#modal2">Registrarse</a></li>
                    <li><a href="#"><i class="material-icons">shopping_cart</i> </a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a class="waves-effect waves-light modal-trigger" href="#modal1">Iniciar Sesion</a></li>
                    <li><a class="waves-effect waves-light modal-trigger" href="#modal2">Registrarse</a></li>
                    <li><a href="#"><i class="material-icons">shopping_cart</i> </a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                <div class="nav-content">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a class="active" href="#home">Home</a></li>
                        <li class="tab"><a href="#productos">Productos</a></li>
                        <li class="tab"><a href="#servicios">Servicios</a></li>
                        <li class="tab"><a href="#about">Quienes Somos</a></li>
                        <li class="tab"><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>



        </nav>
    <main>
       
        <!--Noticias-->
        <div class="">
            <div class="slider">
                <ul class="slides">

                    <li>
                        <img width="100%" src="<?php echo base_url(); ?>/lib/img/img1-1.jpg">

                        <div class="caption center-align">
                            <h3>Primera Noticia</h3>
                            <h5 class="light grey-text text-lighten-3">Texto para primera noticia</h5>
                            <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>

                        </div>
                    </li>
                    <li>
                        <img width="100%" src="<?php echo base_url(); ?>/lib/img/img2.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Segunda Noticia</h3>
                            <h5 class="light grey-text text-lighten-3">Texto para segunda noticia</h5>
                            <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>
                        </div>
                    </li>
                    <li>
                        <img width="100%" src="<?php echo base_url(); ?>/lib/img/img4.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Tercera Noticia</h3>
                            <h5 class="light grey-text text-lighten-3">Texto para tercera noticia</h5>
                            <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>
                        </div>
                    </li>
                    <li>
                        <img width="100%" src="<?php echo base_url(); ?>/lib/img/img3.png"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>Cuarta Noticia</h3>
                            <h5 class="light grey-text text-lighten-3">Texto para cuarta noticia</h5>
                            <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
      

        <!-- Modal Iniciar sesion -->
        <div id="modal1" class="modal modal-content">
            <div class="container">
                <div class="row ">
                    <div class="center">
                        <img class="responsive-img circle" width="25%" src="<?php echo base_url(); ?>lib/img/logo3.jpg">
                        <h4>Iniciar Sesión</h4>
                    </div>
                    <form name="formlogin">
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <label for="rutusuario">RUT: </label>  
                            <input type="text" id="rutusuario" class="form-control" />
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">vpn_key</i>
                            <label for="contraseña">Contraseña: </label>  
                            <input type="password" id="contraseña" class="form-control"/>
                        </div>
                        <div class="input-field right">
                            <a href="#">¿Perdiste la contraseña?</a>
                            <input id="login" type="submit" class="btn btn-primary waves-effect" value="Ingresar" /> 
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- FIN Modal Iniciar sesion -->

        <!-- Modal Registrar -->
        <div id="modal2" class="modal modal-fixed-footer">
            <div class="row">  
                <form action="" name="formreg" method="POST" id="formreg">
                    <div>
                        <div class="col s12"> 
                            <h4>Datos de registro</h4>
                            <div class="col s6">
                                <div class="input-field">
                                    <i class="material-icons prefix">account_circle</i>
                                    <label for="rut">RUT: </label>                           
                                    <input type="text" name="rut" id="rutusuario2">
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">face</i>
                                    <label for="nombre">Nombre: </label>
                                    <input type="text" name="nombre" id="nombre"/>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">face</i>
                                    <label for="apellido">Apellido: </label>
                                    <input type="text" name="apellido"  id="apellido"/>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">location_on</i>
                                    <label for="direccion">Direccion: </label>
                                    <input type="text" name="direccion" id="direccion"/>
                                </div>

                            </div>
                            <div class="col s6">
                                <div class="input-field">
                                    <i class="material-icons prefix">call</i>
                                    <label for="telefono">Telefono: </label>
                                    <input type="text" name="telefono" id="telefono"/>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">mail</i>
                                    <label for="correo">Correo: </label>
                                    <input type="text" name="correo" id="correo"/>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <label for="contraseña1">Contraseña: </label>
                                    <input type="password" name="contraseña1" id="contraseña1"/>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <label for="confirContraseña">Confirmar Contraseña: </label>
                                    <input type="password" name="confirContraseña" id="contraseña2"/>
                                </div>

                            </div>
                        </div>                      
                    </div> 
                    <div class="modal-footer">                      
                        <input type="submit" name="bt" id="btnregistrar" value="Registrarse" class="btn"/>
                    </div>
                </form> 
            </div>
        </div>
        <div class="container">
            <div class="section">
                <div class="divider"></div>
                <h4 class="center">Productos destacados</h4>
                <div class="divider"></div>
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <div class="card-panel hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" width="100%" src="<?php echo base_url(); ?>lib/img/prod1.jpg">

                                </div>
                                <h5 class="center">Producto 1</h5>

                                <p class="light">Detalle producto, Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <div class="card-panel hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" width="100%" src="<?php echo base_url(); ?>lib/img/prod2.jpg">
                                </div>
                                <h5 class="center">Producto 2</h5>

                                <p class="light">Detalle producto, Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <div class="card-panel hoverable">
                                <div class="card-image waves-effect waves-block waves-light" >
                                    <img class="activator responsive-img" width="100%" src="<?php echo base_url(); ?>lib/img/prod3.jpg">
                                </div>
                                <h5 class="center">Producto 3</h5>

                                <p class="light">Detalle producto, Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
        </div>
        <div class="container">
            <div class="row">
                <div class="divider"></div>
                <h4 class="center">PRODUCTOS</h4>
                <div class="divider"></div>
                <div class="col s3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url(); ?>lib/img/aromaterapia1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">PRODUCTO<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Esto es un producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">PRODUCTO<i class="material-icons right">close</i></span>
                            <p>Aqui va la descripcion de un producto, Aqui va la descripcion de un producto, Aqui va la descripcion de un producto,.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-floating waves-effect waves-light  green accent-4"><i class="large material-icons">add</i></a>
                        </div>
                    </div>
                </div>
                <div class="col s3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url(); ?>lib/img/aromaterapia1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">PRODUCTO<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Esto es un producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">PRODUCTO<i class="material-icons right">close</i></span>
                            <p>Aqui va la descripcion de un producto, Aqui va la descripcion de un producto, Aqui va la descripcion de un producto,.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-floating waves-effect waves-light  green accent-4"><i class="large material-icons">add</i></a>
                        </div>
                    </div>
                </div>   
                <div class="col s3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url(); ?>lib/img/aromaterapia1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">PRODUCTO<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Esto es un producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">PRODUCTO<i class="material-icons right">close</i></span>
                            <p>Aqui va la descripcion de un producto, Aqui va la descripcion de un producto, Aqui va la descripcion de un producto,.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-floating waves-effect waves-light  green accent-4"><i class="large material-icons">add</i></a>
                        </div>
                    </div>
                </div>  
                <div class="col s3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url(); ?>lib/img/aromaterapia1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">PRODUCTO<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Esto es un producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">PRODUCTO<i class="material-icons right">close</i></span>
                            <p>Aqui va la descripcion de un producto, Aqui va la descripcion de un producto, Aqui va la descripcion de un producto,.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-floating waves-effect waves-light  green accent-4"><i class="large material-icons">add</i></a>
                        </div>
                    </div>
                </div>   
                <div class="col s3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url(); ?>lib/img/aromaterapia1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">PRODUCTO<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Esto es un producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">PRODUCTO<i class="material-icons right">close</i></span>
                            <p>Aqui va la descripcion de un producto, Aqui va la descripcion de un producto, Aqui va la descripcion de un producto,.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-floating waves-effect waves-light  green accent-4"><i class="large material-icons">add</i></a>
                        </div>
                    </div>
                </div> 
                <div class="col s3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url(); ?>lib/img/aromaterapia1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">PRODUCTO<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Esto es un producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">PRODUCTO<i class="material-icons right">close</i></span>
                            <p>Aqui va la descripcion de un producto, Aqui va la descripcion de un producto, Aqui va la descripcion de un producto,.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-floating waves-effect waves-light  green accent-4"><i class="large material-icons">add</i></a>
                        </div>
                    </div>
                </div>  
                <div class="col s3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url(); ?>lib/img/aromaterapia1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">PRODUCTO<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Esto es un producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">PRODUCTO<i class="material-icons right">close</i></span>
                            <p>Aqui va la descripcion de un producto, Aqui va la descripcion de un producto, Aqui va la descripcion de un producto,.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-floating waves-effect waves-light  green accent-4"><i class="large material-icons">add</i></a>
                        </div>
                    </div>
                </div>   
                <div class="col s3">
                    <div class="card hoverable">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url(); ?>lib/img/aromaterapia1.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">PRODUCTO<i class="material-icons right">more_vert</i></span>
                            <p><a href="#">Esto es un producto</a></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">PRODUCTO<i class="material-icons right">close</i></span>
                            <p>Aqui va la descripcion de un producto, Aqui va la descripcion de un producto, Aqui va la descripcion de un producto,.</p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="btn-floating waves-effect waves-light  green accent-4"><i class="large material-icons">add</i></a>
                        </div>
                    </div>
                </div>  

            </div>

        </div>
    </main>
    <footer class="page-footer blue lighten-1">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Acerca De</h5>
                    <p class="grey-text text-lighten-4">Nuestro objetivo, es acercar a un sin número de terapias Complementarias, y a los mejores terapeutas, para así aportar un granito de arena en el logro de un Equilibrio en tu salud y la de todos aquellos que trabajamos para ello.</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Desarrollado por <a class="orange-text text-lighten-3" href="#">Yeison Opazo, Inacap Talca</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>lib/js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript">
        $(function() {
            //                Inicio de Materialize
            $('.modal').modal();
            $('.button-collapse').sideNav();
            $('.carousel.carousel-slider').carousel({fullWidth: true});
            $('.carousel').carousel('next', 3);
            $('.slider').slider();
            //                Fin de inicio materialize

            $("#login").click(function(e) {
                e.preventDefault();
                var rutusuario = $("#rutusuario").val();
                var contraseña = $("#contraseña").val();
                if (rutusuario == "" || contraseña == "") {
                    Materialize.toast("Faltan Campos", "1000");
                } else {
                    $.ajax({
                        url: '<?php echo site_url() ?>/iniciar',
                        type: 'post', dataType: 'json',
                        data: {"rutusuario": rutusuario, "contraseña": contraseña}
                    }).success(function(obj) {

                        if (obj[1] == "administrador") {
                            window.location.href = "<?PHP echo site_url() ?>/AdminController";
                            Materialize.toast("Administrador", 1000);
                        } else if (obj[1] == "cliente") {
                            window.location.href = "<?PHP echo site_url() ?>/ClientController";
                            Materialize.toast("Cliente", 1000);
                        } else {
                            Materialize.toast("Usuario no registrado", 1000);
                        }

                    }).fail(function() {
                        Materialize.toast("Consulta fallida", 1000);
                    });
                }

            });
            //------------------REGISTRAR-------------------
            $("#btnregistrar").click(function(e) {
                e.preventDefault();
                var rut = $("#rutusuario2").val();
                var nombre = $("#nombre").val();
                var apellido = $("#apellido").val();
                var direccion = $("#direccion").val();
                var telefono = $("#telefono").val();
                var correo = $("#correo").val();
                var contraseña = $("#contraseña2").val();
                var contraseña2 = $("#contraseña3").val();
                if (rut == "" || nombre == "" || apellido == "" || direccion == "" || telefono == "" ||
                        correo == "" || contraseña == "" || contraseña2 == "") {
                    Materialize.toast("Faltan Campos", 1000);
                } else if (contraseña != contraseña2) {
                    Materialize.toast("Contraseña no coincide", 1000);
                } else {
                    $.ajax({
                        url: '<?php echo site_url() ?>/addClient',
                        type: 'post',
                        dataType: 'json',
                        data: {"rutusuario": rut, "nombre": nombre, "apellido": apellido, "direccion": direccion,
                            "telefono": telefono, "correo": correo, "contraseña": contraseña, "idperfil": 1
                        }
                    }).success(function(o) {
                        Materialize.toast("Registro OK", 1000);
                        $('#formreg').each(function() {
                            this.reset();
                        });
                    }).fail(function() {
                        Materialize.toast("Error", 1000);
                    });
                }


            });
            //----------FIN REGISTRAR----------
        });
    </script>

</body>
</html>
