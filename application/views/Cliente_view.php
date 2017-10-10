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
                    <li><a class="waves-effect waves-light" href="<?PHP echo site_url() ?>/welcome">Salir</a></li>

                    <li><a href="#"><i class="material-icons">shopping_cart</i> </a></li>
                    <li><a href="#"><i class="material-icons">notifications</i> </a></li>

                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a class="waves-effect waves-light" href="<?PHP echo site_url() ?>/welcome">Salir</a></li>

                    <li><a href="#"><i class="material-icons">shopping_cart</i> </a></li>
                    <li><a href="#"><i class="material-icons">notifications</i> </a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>

            <div class="nav-content container">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#home">Resumen</a></li>
                    <li class="tab"><a href="#gproductos">Mis Pedidos</a></li>
                    <li class="tab"><a href="#gservicios">Mi Cuenta</a></li>
                </ul>
            </div>

        </nav>


        <div class="container">
            <h1>Vista Cliente</h1>
            <br><br><br><br><br><br><br><br><br><br><br><br>
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
                $('.scrollspy').scrollSpy();
                //                Fin de inicio materialize


            });
        </script>

    </body>
</html>
