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
    <body>

        <nav class="light-blue lighten-1 nav-extended" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Vida y Salud Parral</a>
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
            </div>

            <div class="nav-content container">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#home">Home</a></li>
                    <li class="tab"><a href="#productos">Productos</a></li>
                    <li class="tab"><a href="#servicios">Servicios</a></li>
                    <li class="tab"><a href="#about">Quienes Somos</a></li>
                    <li class="tab"><a href="#contacto">Contacto</a></li>
                </ul>
            </div>

        </nav>

        <!--        <div class="section no-pad-bot" id="index-banner">
                    <div class="container">
                        <h1 class="header center orange-text">Vida y Salud Parral</h1>
                        <br>
                    </div>
                </div>-->
        <!--Noticias-->
        <div class="slider">
            <ul class="slides">

                <li>
                    <img src="https://scontent.flim5-2.fna.fbcdn.net/v/t1.0-9/21369241_1803835819644512_7776369015379573794_n.jpg?oh=bfc4739d29a948c32e03279e1a04a096&oe=5A4236C8"> <!-- random image -->

                    <div class="caption center-align">
                        <h3>Primera Noticia</h3>
                        <h5 class="light grey-text text-lighten-3">Texto para primera noticia</h5>
                        <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>

                    </div>
                </li>
                <li>
                    <img src="https://scontent.flim5-2.fna.fbcdn.net/v/t1.0-9/20799548_1778967725464655_4185241513782583285_n.jpg?oh=d5841ef99d4dda7ce92ec5701f0cf0c4&oe=5A775A3C"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>Segunda Noticia</h3>
                        <h5 class="light grey-text text-lighten-3">Texto para segunda noticia</h5>
                        <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>
                    </div>
                </li>
                <li>
                    <img src="https://scontent.flim5-2.fna.fbcdn.net/v/t1.0-9/21317969_1803858419642252_6541559734910448412_n.jpg?oh=0e61186d1d8c975249ea381f8f4141ee&oe=5A845025"> <!-- random image -->
                    <div class="caption right-align">
                        <h3>Tercera Noticia</h3>
                        <h5 class="light grey-text text-lighten-3">Texto para tercera noticia</h5>
                        <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>
                    </div>
                </li>
                <li>
                    <img src="https://scontent.flim5-2.fna.fbcdn.net/v/t1.0-9/19894986_1742461079115320_5590465852407946132_n.jpg?oh=cf92dd3f2c162d2a04a004877cc006c9&oe=5A717342"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Cuarta Noticia</h3>
                        <h5 class="light grey-text text-lighten-3">Texto para cuarta noticia</h5>
                        <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>
                    </div>
                </li>
            </ul>
        </div>
        <!--        Noticia con Carousel-->
        <!--        <div class="container">
                    <div id="special" class="scrollspy section">
                        <div class="carousel carousel-slider center" data-indicators="true">
                            <div class="carousel-fixed-item center">
                                <a class="btn waves-effect white grey-text darken-text-2">button</a>
                            </div>
                            <div class="carousel-item red white-text" href="#one!">
                                <h2>Primera Noticia</h2>
                                <p class="white-text">Texto para primera Noticia</p>
                            </div>
                            <div class="carousel-item amber white-text" href="#two!">
                                <h2>Segunda Noticia</h2>
                                <p class="white-text">Texto para segunda Noticia</p>
                            </div>
                            <div class="carousel-item green white-text" href="#three!">
                                <h2>Tercera Noticia</h2>
                                <p class="white-text">Texto para tercera Noticia </p>
                            </div>
                            <div class="carousel-item blue white-text" href="#four!">
                                <h2>Cuarta Noticia</h2>
                                <p class="white-text">Texto para cuarta Noticia</p>
                            </div>
                        </div>
                    </div>
                </div>-->

        <!-- Modal Iniciar sesion -->
        <div id="modal1" class="modal">
            <div class="row">
                <div class="col s12">
                    <div class="center">
                        <img class="responsive-img circle" width="20%" src="<?php echo base_url(); ?>lib/img/logo.jpg">
                        <h4>Iniciar Sesión</h4>
                    </div>
                    <form>

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
                        <div>
                            <input id="login" type="submit" class="btn btn-primary right waves-effect" value="Ingresar" /> <a href="#" class="btn btn-default right waves-effect">¿Perdiste la contraseña?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FIN Modal Iniciar sesion -->

        <!-- Modal Registrar -->
        <div id="modal2" class="modal center">
            <div class="row">
                <div>
                </div>
                <div class="col s12">
                    <form action="" name="formreg" method="POST" id="formreg">
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
                            <div class="right">
                                <input type="submit" name="bt" id="btnregistrar" value="Registrarse" class="btn"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>            

        </div>
        <div class="container">
            <div class="section">
                <h4 class="center">Productos destacados</h4>
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">filter_1</i></h2>
                            <h5 class="center">Producto 1</h5>

                            <p class="light">Detalle producto, Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">filter_2</i></h2>
                            <h5 class="center">Producto 2</h5>

                            <p class="light">Detalle producto, Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons">filter_3</i></h2>
                            <h5 class="center">Producto 3</h5>

                            <p class="light">Detalle producto, Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,Detalle producto,.</p>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
        </div>

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
