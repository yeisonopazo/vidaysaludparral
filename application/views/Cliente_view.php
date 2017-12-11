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
        <nav class="nav-extended grey lighten-5" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="<?PHP echo site_url() ?>/welcome" class="brand-logo center-on-small-only"><img width="340" src="<?php echo base_url(); ?>/lib/img/logo3.png"></a>                
                <ul class="right hide-on-med-and-down">                    
                    <li><a id="saludo1" class="purple-text" href=""></a></li>
                    <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
                    <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
                    <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>

                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a id="saludo2" class="purple-text" href=""></a></li>
                    <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
                    <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
                    <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse purple-text"><i class="material-icons">menu</i></a>
            </div>

            <div class="nav-content container">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="waves-effect waves-light purple-text active"  href="#home">Resumen</a></li>
                    <li class="tab"><a class="waves-effect waves-light purple-text" href="#mispedidos">Mis Pedidos</a></li>
                    <li class="tab"><a class="waves-effect waves-light purple-text" href="#misservicios">Mis Servicios</a></li>
                    <li class="tab"><a class="waves-effect waves-light purple-text" href="#misdatos">Mis Datos</a></li>
                </ul>
            </div>

        </nav>
        <main>
            <div class="container">
                <div id="home" class="col s12">
                       <div class="card light-green lighten-5">
                            <h4 class="center light-green-text darken-4" >Resumen</h4>
                        </div>
                        <div class="divider light-green darken-4"></div>
                </div>
                <div id="mispedidos" class="col s12">
                    <div class="card light-green lighten-5">
                        <h4 class="center light-green-text darken-4" >Mis Productos</h4>
                    </div>
                    <div class="divider light-green darken-4"></div>
                </div>
                <div id="misservicios" class="col s12">
                    <div class="card light-green lighten-5">
                        <h4 class="center light-green-text darken-4">Mis Servicios</h4>
                    </div>
                    <div class="divider light-green darken-4"></div>
                </div>
                <!--            -------------MOSTRAR Y ACTUALIZAR DATOS CLIENTE-------->
                <div id="misdatos" class="col s12">
                       <div class="card light-green lighten-5">
                            <h4 class="center light-green-text darken-4" >Mis datos</h4>
                        </div>
                        <div class="divider light-green darken-4"></div>

                    <div class="card-panel"> 
                        <div class="row">
                            <form >
                                <div class="col s12 m5">
                                    <div class="input-field">
                                        <i class="material-icons prefix">account_circle</i>
                                        <label class="active" for="rut">RUT: </label>                           
                                        <input type="text" value=" " name="rut" id="rutusuario" disabled>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">face</i>
                                        <label for="nombre">Nombre: </label>
                                        <input type="text" value=" " name="nombre" id="nombre"/>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">face</i>
                                        <label for="apellido">Apellido: </label>
                                        <input type="text" value=" " name="apellido"  id="apellido"/>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">location_on</i>
                                        <label for="direccion">Direccion: </label>
                                        <input type="text" value=" " name="direccion" id="direccion"/>
                                    </div>
                                </div>
                                <div class="col s12 m5">
                                    <div class="input-field">
                                        <i class="material-icons prefix">call</i>
                                        <label for="telefono">Telefono: </label>
                                        <input type="text" value=" " name="telefono" id="telefono"/>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">mail</i>
                                        <label for="correo">Correo: </label>
                                        <input type="text" value=" " name="correo" id="correo"/>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">vpn_key</i>
                                        <label for="contraseña">Clave: </label>
                                        <input type="password" value=" " name="clave" id="contraseña"/>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">vpn_key</i>
                                        <label for="confirContraseña">Confirmar Clave: </label>
                                        <input type="password" value=" " name="confirContraseña" id="confirContraseña"/>
                                    </div>
                                    <div class="right">                                    
                                        <button type="submit" name="bt" id="btupdate" class="waves-effect btn"><i class="material-icons left"> system_update_alt</i>Actualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
                    Desarrollado por <a class="orange-text text-lighten-3" href="#">Yeison Opazo, Inacap Talca</a>
                </div>
            </div>
        </footer>


        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/materialize.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/init.js"></script>
        <script type="text/javascript">
            $(function () {
                //                Inicio de Materialize
                $('.modal').modal();
                $('.button-collapse').sideNav();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
                $('.carousel').carousel('next', 3);
                $('.slider').slider();
                $('.scrollspy').scrollSpy();
                //                Fin de inicio materialize

                getSesion();
                
                
                function getSesion() {
                    var url = "<?php echo site_url() ?>/getSesion";
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            $("#rutusuario").val(o.rutusuario);
                            getUser();
                        });
                    });
                }
                function getUser() {
                    var rut = $("#rutusuario").val();
                    $("#saludo1").empty();
                    $("#saludo2").empty();
                    $.ajax({
                        url: '<?php echo site_url() ?>/getUser',
                        type: "POST",
                        dataType: 'json',
                        data: {"rutusuario": rut}
                    }).success(function (obj) {
                        $("#saludo1").empty();
                        $("#saludo2").empty();
                        $.each(obj, function (i, u) {
                            $("#saludo1").append("Bienvenido " + u.nombre + " " + u.apellido + "!");
                            $("#saludo2").append("Bienvenido " + u.nombre + " " + u.apellido + "!");
                            $("#nombre").val(u.nombre);
                            $("#apellido").val(u.apellido);
                            $("#direccion").val(u.direccion);
                            $("#telefono").val(u.telefono);
                            $("#correo").val(u.correo);
                            $("#contraseña").val(u.contraseña);
                            $("#confirContraseña").val(u.contraseña);
                        });
                    });

                }
                //                ----------ACTUALIZAR CUENTA--------
                $("#btupdate").click(function (e) {
                    e.preventDefault();
                    var rut = $("#rutusuario").val();
                    var nombre = $("#nombre").val();
                    var apellido = $("#apellido").val();
                    var direccion = $("#direccion").val();
                    var telefono = $("#telefono").val();
                    var correo = $("#correo").val();
                    var contraseña = $("#contraseña").val();
                    var confirContraseña = $("#confirContraseña").val();
                    if (rut == "" || nombre == "" || apellido == "" || direccion == "" || telefono == "" || correo == "" || contraseña == "" || confirContraseña == "") {
                        Materialize.toast("faltan campos", "1000");
                    } else if (contraseña != confirContraseña) {
                        Materialize.toast("Contraseña no coincide", "1000");
                    } else {
                        $.ajax({
                            url: "<?php echo site_url() ?>/updateClient",
                            type: "post",
                            dataType: "json",
                            data: {"rutusuario": rut, "nombre": nombre, "apellido": apellido, "direccion": direccion,
                                "telefono": telefono, "correo": correo, "contraseña": contraseña
                            }
                        }).success(function (obj) {
                            getUser();
                            Materialize.toast("Cuenta Actualizada", "1000");
                        }).fail(function () {
                            Materialize.toast("error");
                        });
                    }
                });
            });
        </script>

    </body>
</html>
