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
        <nav class="teal nav-extended" role="navigation">
            <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Vida y Salud Parral</a>
                <ul class="right hide-on-med-and-down">
                    <li><a id="saludo1" href=""></a></li>
                    <li><a class="waves-effect waves-light" href="<?PHP echo site_url() ?>/welcome">Salir</a></li>
                    <li><a href="#"><i class="material-icons">shopping_cart</i> </a></li>
                    <li><a href="#"><i class="material-icons">notifications</i> </a></li>

                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a id="saludo2" href=""></a></li>
                    <li><a class="waves-effect waves-light" href="<?PHP echo site_url() ?>/welcome">Salir</a></li>
                    <li><a href="#"><i class="material-icons">shopping_cart</i> </a></li>
                    <li><a href="#"><i class="material-icons">notifications</i> </a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>

            <div class="nav-content container">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#home">Resumen</a></li>
                    <li class="tab"><a href="#mispedidos">Mis Pedidos</a></li>
                    <li class="tab"><a href="#misservicios">Mis Servicios</a></li>
                    <li class="tab"><a href="#misdatos">Mis Datos</a></li>
                </ul>
            </div>

        </nav>
    <main>
        <div class="container">

            <div id="home" class="col s12">
                <h3>Resumen</h3>


            </div>
            <div id="mispedidos" class="col s12">
                <h3> Mis Pedidos</h3>
            </div>
            <div id="misservicios" class="col s12">
                <h3>  Mis Servicios</h3>
            </div>
            <!--            -------------MOSTRAR Y ACTUALIZAR DATOS CLIENTE-------->
            <div id="misdatos" class="col s12">
                <div class="card-panel teal darken-4 text-primary">
                    <h3><i class="material-icons medium left">account_box</i> Mis Datos</h3>   
                </div>

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
    <footer class="page-footer teal">
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
    <script src="<?php echo base_url(); ?>lib/js/init.js"></script>
    <script type="text/javascript">
        $(function() {
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
                $.getJSON(url, function(result) {
                    $.each(result, function(i, o) {
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
                }).success(function(obj) {
                    $("#saludo1").empty();
                    $("#saludo2").empty();
                    $.each(obj, function(i, u) {
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
            $("#btupdate").click(function(e) {
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
                    }).success(function(obj) {
                        getUser();
                        Materialize.toast("Cuenta Actualizada", "1000");
                    }).fail(function() {
                        Materialize.toast("error");
                    });
                }
            });
        });
    </script>

</body>
</html>
