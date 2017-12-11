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

    <?php
    $cart = $this->session->userdata("carro");
    ?>
    <body>

        <div id="loader-wrapper">

            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>

        <ul id="dropdown1" class="dropdown-content" >
            <li><a class="waves-effect waves-light modal-trigger purple-text" href="#modal1">Iniciar</a></li>
            <li><a class="waves-effect waves-light modal-trigger purple-text" href="#modal2">Registrarse</a></li>
            <li class="divider"></li>

        </ul>
        <ul id="dropdown2" class="dropdown-content">

        </ul>
        <div class="navbar-fixed">
            <nav class="grey lighten-5" role="navigation">
                <div class="nav-wrapper container">
                    <a href="#" data-activates="nav-mobile" class="button-collapse purple-text"><i class="material-icons">menu</i></a>
                    <a id="logo-container" href="" class="brand-logo center-on-small-only"><img width="340" src="<?php echo base_url(); ?>/lib/img/logo3.png"></a>
                    <ul class="right hide-on-med-and-down ">
                        <li><a class="waves-effect  purple-text" href="#home">Home</a></li>
                        <li><a class="waves-effect  purple-text" href="#productos">Productos y Servicios</a></li>
                        <li><a class="waves-effect  purple-text" href="#about">Nosotros</a></li>  
                        <li><a class="dropdown-button waves-effect clearfix purple-text" data-beloworigin="true" data-activates="dropdown1">Clientes<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a href="#" class="dropdown-button waves-effect waves-light purple-text" data-beloworigin="true" data-activates="dropdown2"><i class="material-icons left">shopping_cart</i><span id="carro" class="badge purple white-text"></span></a></li>
                    </ul> 
                </div>    
            </nav>
        </div>
        <ul id="nav-mobile" class="side-nav">
            <li><a class="modal-trigger purple-text" href="#modal1">Iniciar Sesion</a></li>
            <li><a class="modal-trigger purple-text" href="#modal2">Registrarse</a></li>
            <div class="divider purple-text"></div>
            <li><a href="#home" class="purple-text"><i class="material-icons purple-text">home</i>Inicio</a></li>
            <li><a href="#productos" class="purple-text"><i class="material-icons purple-text">store_mall_directory</i>Productos y Servicios</a></li>
            <li><a href="#about" class="purple-text"><i class="material-icons purple-text">business</i>Nosotros</a></li>              
            <li><a href="#" class="purple-text"><i class="material-icons purple-text">shopping_cart</i></a></li>
        </ul>   
        <main>

            <!--Noticias-->
            <div class="">
                <div class="slider scrollspy" id="home">
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
                                <blockquote class="right-align">
                                    <h3>Tercera Noticia</h3>
                                    <h5 class="light grey-text text-lighten-3">Texto para tercera noticia</h5>
                                    <a class="btn waves-effect white grey-text darken-text-2">quiero saber más</a>
                                </blockquote>

                            </div>
                        </li>
                        <li>
                            <img width="100%" src="<?php echo base_url(); ?>/lib/img/img3.png"> 
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
                            <img class="responsive-img circle" width="25%" src="<?php echo base_url(); ?>lib/img/logo.png">
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
                            <div class="right">
                                <a href="#">¿Perdiste la contraseña?</a>
                                <input id="login" type="submit" class="btn" value="Ingresar" /> 
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- FIN Modal Iniciar sesion -->

            <!-- Modal Registrar -->
            <div id="modal2" class="modal modal-fixed-footer">
                <form action="" name="formreg" method="POST" id="formreg">
                    <div class="modal-content">
                        <h4>Datos de registro</h4>
                        <div class="divider purple"></div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="input-field">
                                    <i class="material-icons prefix">account_circle</i>
                                    <label for="rut">RUT: </label>                           
                                    <input type="text" name="rut" id="rutusuario2">
                                    <input id="rutok" value="rutok" hidden="true">
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
                            <div class="col s12 m6">
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

            <div class="container">
                <div class="section">
                    <div class="divider light-green darken-4"></div>
                    <div class="card light-green lighten-5">
                        <h4 class="center light-green-text darken-4" >PRODUCTOS DESTACADOS</h4>
                    </div>
                    <div class="divider light-green darken-4"></div>
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
            <!--            VISTA DE PRODUCTOS y SERVICIOS-->
            <div class="container scrollspy" id="productos">
                <div class="row">
                    <div class="divider light-green darken-4"></div>
                    <div class="card light-green lighten-5">
                        <h4 class="center light-green-text darken-4">PRODUCTOS Y SERVICIOS</h4>
                    </div>
                    <div class="divider light-green darken-4"></div>
                    <br>
                    <div id="moduloverprodpag" class="row card-panel scrollspy">
                        <?php include ('modulos/verprodpag.php'); ?>
                    </div>  

                    <nav class="row">
                        <div class="nav-wrapper light-green darken-4">
                            <div class="input-field">
                                <input id="search" type="search" required placeholder="Que buscas??">
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </div>
                    </nav>

                    <div class="col s12 m6">
                        <h5>Productos</h5>
                        <div class="col s6 m6">
                            <p>
                                <input type="checkbox" id="catpro1" />
                                <label for="catpro1">Categoria Prod 1</label>
                            </p> 
                            <p>
                                <input type="checkbox" id="catpro2" />
                                <label for="catpro2">Categoria Prod 2</label>
                            </p> 
                        </div>
                        <div class="col s6 m6">
                            <p>
                                <input type="checkbox" id="catpro3" />
                                <label for="catpro3">Categoria Prod 3</label>
                            </p> 
                            <p>
                                <input type="checkbox" id="catpro4" />
                                <label for="catpro4">categoria Prod 4</label>
                            </p> 
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <h5>Servicios</h5>
                        <div class="col s6 m6">
                            <p>
                                <input type="checkbox" id="catserv1" />
                                <label for="catserv1">Categoria Serv 1</label>
                            </p> 
                            <p>
                                <input type="checkbox" id="catserv2" />
                                <label for="catserv2">Categoria Serv 2</label>
                            </p> 
                        </div>
                        <div class="col s6 m6">
                            <p>
                                <input type="checkbox" id="catserv3" />
                                <label for="catserv3">Categoria Serv 3</label>
                            </p> 
                            <p>
                                <input type="checkbox" id="catserv4" />
                                <label for="catserv4">Categoria Serv 4</label>
                            </p> 
                        </div>
                    </div>


                    <!---------------------------MOSTRAR PRODUCTOS-------------------------------->
                    <div class="col s12">            

                        <ul class="row" id="list-product">
                        </ul>

                    </div>  

                </div>


            </div>

            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal hide-on-med-and-down amber darken-3">
                    <i class="large material-icons">menu</i>
                </a>
                <ul>
                    <li><a href="#home" class="btn-floating red"><i class="material-icons">home</i></a></li>
                    <li><a href="#productos" class="btn-floating yellow darken-1"><i class="material-icons">store_mall_directory</i></a></li>
                    <li><a href="#about" class="btn-floating green"><i class="material-icons">business</i></a></li>                  
                </ul>
            </div>

        </main>
        <footer class="page-footer amber">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12 scrollspy" id="about">
                        <h5 class="white-text">Acerca de Nosotros</h5>
                        <p class="purple-text">Nuestro objetivo, es acercar a un sin número de terapias Complementarias, y a los mejores terapeutas, para así aportar un granito de arena en el logro de un Equilibrio en tu salud y la de todos aquellos que trabajamos para ello.</p>

                        <p class="purple-text"><i class="material-icons">call</i> 73 - 2 46 21 28 / +569 - 9265 9369</p>

                        <p class="purple-text"><i class="material-icons">mail</i> vidaysalud@centrodemedicinacomplementaria.cl</p>

                        <p class="purple-text"> Lunes a Viernes 9:00 - 13:00, 15:00 - 19:00<br>
                            Sabados 9:00 - 13:00
                        </p>
                        <div>
                            <a href="https://www.facebook.com/vidaysaludparral/" class="btn-floating facebook center-align">
                                f
                            </a>
                        </div>
                    </div>
                    <div class="col l6 s12">
                        <div id="google-map-tab" class="col s12 center-align">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.4152998642435!2d-71.81904501372995!3d-36.140850900596774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3ec9bb85f0be6b2!2sVida+y+Salud%2C+Centro+de+Medicina+Complementaria%2C+Parral!5e0!3m2!1ses!2scl!4v1511405544855" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen class="responsive-img z-depth-5"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Desarrollado por <a class="white-text text-lighten-3" href="#">Yeison Opazo, Inacap Talca</a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/jquery.rut.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/init.js"></script>
        <script type="text/javascript">
            $(function () {
                //                Inicio de Materialize
                $('.modal').modal();
                $('.button-collapse').sideNav();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
                $('.carousel').carousel('next', 3);
                $('.slider').slider();
                $('ul.tabs').tabs();
                $(".dropdown-button").dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrainWidth: false, // Does not change width of dropdown to that of the activator
                    hover: true, // Activate on hover
                    gutter: 0, // Spacing from edge
                    belowOrigin: false, // Displays dropdown below the button
                    alignment: 'left', // Displays dropdown with edge aligned to the left of button
                    stopPropagation: false
                });
                //                Fin de inicio materialize

                //VALIDA RUT
                $("#rutusuario2").rut().on('rutValido', function (e, rut, dv) {
                    //  Materialize.toast("El rut " + rut + "-" + dv + " es correcto");
                    $("#rutok").val("rutok");
                }); //
                $("#rutusuario2").rut().on('rutInvalido', function (e) {
                    // Materialize.toast("El rut " + $(this).val() + " es inválido", "4000");
                    $("#rutok").val("invalido");
                });
                $("#rutusuario").rut({validateOn: 'change keyup'});
                $("#ircontacto").click(function () {
                    $("#contacto").focus();
                });
                verProductos();
                ocultar();
                carro();
                //Inicio de Sesion
                $("#login").click(function (e) {
                    e.preventDefault();
                    var rutusuario = $("#rutusuario").val();
                    var contraseña = $("#contraseña").val();
                    if (rutusuario === "" || contraseña === "") {
                        Materialize.toast("Faltan Campos", "1000");
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/iniciar',
                            type: 'post', dataType: 'json',
                            data: {"rutusuario": rutusuario, "contraseña": contraseña}
                        }).success(function (obj) {
                            if (obj[1] === "administrador") {
                                window.location.href = "<?PHP echo site_url() ?>/AdminController";
                                Materialize.toast("Administrador", 1000);
                            } else if (obj[1] === "cliente") {
                                window.location.href = "<?PHP echo site_url() ?>/ClientController";
                                Materialize.toast("Cliente", 1000);
                            } else {
                                Materialize.toast("Usuario no registrado", 1000);
                            }

                        }).fail(function () {
                            Materialize.toast("Usuario no registrado", 1000);
                        });
                    }

                });
                //------------------REGISTRAR-------------------
                $("#btnregistrar").click(function (e) {
                    e.preventDefault();
                    var rut = $("#rutusuario2").val();
                    var nombre = $("#nombre").val();
                    var apellido = $("#apellido").val();
                    var direccion = $("#direccion").val();
                    var telefono = $("#telefono").val();
                    var correo = $("#correo").val();
                    var contraseña = $("#contraseña1").val();
                    var contraseña2 = $("#contraseña2").val();
                    var rutok = $("#rutok").val();
                    if (rut === "" || nombre === "" || apellido === "" || direccion === "" || telefono === "" ||
                            correo === "" || contraseña === "" || contraseña2 === "") {
                        Materialize.toast("Faltan Campos", 1000);
                    } else if (contraseña != contraseña2) {
                        Materialize.toast("Contraseña no coincide", 1000);
                    } else if (rutok === "invalido") {
                        Materialize.toast("Ingrese un RUT valido", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/getUser',
                            type: "POST",
                            dataType: 'json',
                            data: {"rutusuario": rut}
                        }).success(function (user) {
                            if (user.length === 0) {
                                $.ajax({
                                    url: '<?php echo site_url() ?>/addClient',
                                    type: 'post',
                                    dataType: 'json',
                                    data: {"rutusuario": rut, "nombre": nombre, "apellido": apellido, "direccion": direccion,
                                        "telefono": telefono, "correo": correo, "contraseña": contraseña, "idperfil": 1
                                    }
                                }).success(function (o) {
                                    Materialize.toast("Registro OK", 1000);
                                    $('#formreg').each(function () {
                                        this.reset();
                                    });
                                }).fail(function () {
                                    Materialize.toast("Fallo registro", 1000);
                                });
                            } else {
                                Materialize.toast("Rut ya registrado", 1000);
                            }

                        });
                    }

                });
                //----------FIN REGISTRAR----------

                function verProductos() {
                    var url = "<?php echo site_url() ?>/getAllProd";
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<li class='col l4 s12 m4'>";
                            fila += "<div class='card hoverable'>";
                            fila += "<div class='card-image waves-effect waves-block waves-light'><a href='#' class='btn-floating btn-large btn-price waves-effect waves-light  pink darken-1'>$" + o.precio + "</a><img class='activator' src='<?php echo base_url(); ?>lib/img/aromaterapia1.png'></div>";
                            fila += "<div class='card-content'><span class='card-title activator grey-text text-darken-4'>" + o.nombre + "<i class='material-icons cyan-text right'>info</i></span><p><a href='#'>Ver mas detalle</a></p></div>";
                            fila += "<div class='card-action  right-align'><button id='addcarro' value='" + o.idproducto + '|' + o.nombre + '|'+ o.precio+"' class='btn-floating waves-effect waves-light  green accent-4'><i class='large material-icons'>add_shopping_cart</i></button>";
                                    fila += '<button id="btnverprod" value="'
                                    + o.idproducto + '|'
                                    + o.nombre + '|'
                                    + o.idsubcategoria + '|'
                                    + o.descripcion + '|'
                                    + o.precio + '|'
                                    + o.stock +
                                    '" class="btn-floating waves-effect waves-light" ><i class="material-icons">search</i></button>';
                            fila += "</div>";
                            fila += "<div class='card-reveal'><span class='card-title grey-text text-darken-4'>" + o.nombre + "<i class='material-icons right'>close</i></span><p>" + o.descripcion + "<br><br><p> Stock: " + o.stock + "</p></p></div>";
                            fila += "</div></li>";
                            $("#list-product").append(fila);
                        });
                    });
                    $("body").on("click", "#btnverprod", function (e) {
                        e.preventDefault();
                        $("#verid").empty();
                        $("#vernombre").empty();
                        $("#vercat").empty();
                        $("#verstock").empty();
                        $("#verprec").empty();
                        $("#verdescrip").empty();
                        var datos = $(this).val();
                        var fila = datos.split("|");
                        $("#verid").append("ID: " + fila[0]);
                        $("#vernombre").append(fila[1]);
                        $("#vercat").append("Categoria: " + fila[2]);
                        $("#verstock").append("Stock: " + fila[5]);
                        $("#verprec").append("Precio: $" + fila[4]);
                        $("#verdescrip").append(fila[3]);
                        $("#moduloverprodpag").show();
                        location.href = "#moduloverprodpag";
                    });
                }

                function  ocultar() {
                    $("#moduloverprodpag").hide();
                }
                $("#cerrarver").click(function (e) {
                    e.preventDefault();
                    ocultar();
                    location.href = "#list-product";
                });
///////////////////////carro
                $("body").on("click", "#addcarro", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    $.ajax({
                        url: '<?php echo site_url() ?>/addCarro',
                        type: 'post',
                        dataType: 'json',
                        data: {"idproducto": datos}
                    }).success(function (o) {
                        Materialize.toast("Se agrego" + datos, 1000);
                        carro();
                    }).fail(function (o) {
                        Materialize.toast("Error", 1000);
                    });
                });
                function carro() {
                    var url = "<?php echo site_url() ?>/getCarro";
                    var url2 = "<?php echo site_url() ?>/clearCarro";
                    $("#dropdown2").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<li><a>" + o.idproducto + "</a></li>";
                            $("#dropdown2").append(fila);
                        });
                        var fila = "<li><a id='clearcarro' href='" + url2 + "'><i class='material-icons red-text'>remove_shopping_cart</i></a></li>";
                        $("#dropdown2").append(fila);
                        var suma = result.length;
                        $("#carro").empty();
                        $("#carro").append(suma);
                    });
                }
            });
        </script>


    </body>
</html>
