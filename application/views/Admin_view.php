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
        <!-- NAV-->

        <nav class="light-blue lighten-1 nav-extended " role="navigation">
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
                    <li class="tab"><a href="#gproductos">Gestion Productos</a></li>
                    <li class="tab"><a href="#gservicios">Gestion Servicios</a></li>
                    <li class="tab"><a href="#gventas">Gestion Ventas</a></li>
                    <li class="tab"><a href="#noticias">Noticias</a></li>
                </ul>
            </div>
        </nav>

    <main>
        <div class="container">
            <div>
                <div id="home" class="col s12">
                    <h3>Resumen</h3>
                </div>
                <div id="gproductos" class="col s12">
                    <div class="card-panel orange text-primary">
                        <h4> Productos</h4>
                    </div>
                    <div class="card-panel">
                        <div class="row">
                            <div class="row"> 
                                <input type="submit" id="btnaddcat" class="btn btn-primary" value="Agregar Categoria"/>
                                <input type="submit" id="btnaddprodut" class="btn btn-primary" value="Agregar Producto/Servicio"/>
                                <a href="#" class="right" id="voler">volver</a>
                            </div>  
                            <div id="modulocat" class="row card-panel">
                                <?php include ('modulos/categorias.php'); ?>
                            </div>
                            <div id="moduloaddprod" class="row card-panel">
                                <?php include ('modulos/addproduct.php'); ?>
                            </div>
                            <!--         -----------------MODAL PROVEEDOR----------------------------->
                            <div id="modalprov" class="modal modal-fixed-footer">
                                <div class="container">
                                    <br>
                                    <h5>Agregar Proveedor</h5>
                                    <form>
                                        <div class="col s12">
                                            <div class="input-field">
                                                <i class="material-icons prefix">account_circle</i>
                                                <label for="rut">RUT: </label>                           
                                                <input type="text" name="rut" id="rutprov">
                                            </div>

                                            <div class="input-field">
                                                <i class="material-icons prefix">face</i>
                                                <label for="nombre">Nombre: </label>
                                                <input type="text" name="nombre" id="nombreprov"/>
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">location_on</i>
                                                <label for="direccion">Direccion: </label>
                                                <input type="text" name="direccion"  id="direccionprov"/>
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">mail</i>
                                                <label for="email">Direccion: </label>
                                                <input type="text" name="email" id="emailprov"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">                                      
                                    <input type="submit" class="btn btn-primary" value="Agregar Proveedor"/>
                                </div>
                            </div>
                            <!-------------------------FIN MODAL AGREGAR PROVEEDOR-------->


                            <nav class="row">
                                <div class="nav-wrapper">
                                    <div class="input-field">
                                        <input id="search" type="search" required placeholder="Buscar Producto">
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </div>
                            </nav>

                            <div class="col s12">
                                <table class="bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Categoria</th>
                                            <th>Precio</th>
                                            <th>Stock</th>
                                            <th>Proveedor</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Alvin</td>
                                            <td>Eclair</td>
                                            <td>$0.87</td>
                                            <td> 5</td>
                                            <td>Proveedor 1</td>
                                            <td><button id="edit" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button></td>
                                        </tr>
                                        <tr>
                                            <td>Alan</td>
                                            <td>Jellybean</td>
                                            <td>$3.76</td>
                                            <td> 5</td>
                                            <td>Proveedor 2</td>
                                            <td><button id="edit" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button></td>

                                        </tr>
                                        <tr>
                                            <td>Jonathan</td>
                                            <td>Lollipop</td>
                                            <td>$7.00</td>
                                            <td> 7</td>
                                            <td>Proveedor 3</td>
                                            <td><button id="edit" class="btn-floating btn-large waves-effect waves-light blue"><i class="material-icons">edit</i></button></td>

                                        </tr>
                                    </tbody>
                                </table>
                                <ul class="pagination">
                                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="gservicios" class="col s12">
                    <h3>Servicios</h3>
                </div>
                <div id="gventas" class="col s12">
                    <h3>Gestion de ventas</h3>
                </div>
                <div id="noticias" class="col s12">
                    <h3>Noticias</h3>
                    <ul id="tabs-swipe-demo" class="tabs swipeable">
                        <li class="tab col s3"><a href="#test-swipe-1">Test 1</a></li>
                        <li class="tab col s3"><a class="active" href="#test-swipe-2">Test 2</a></li>
                        <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li>
                    </ul>

                    <div id="test-swipe-1" class="col s12 blue">Test 1</div>
                    <div id="test-swipe-2" class="col s12 red">Test 2</div>
                    <div id="test-swipe-3" class="col s12 green">Test 3</div>


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
            $('.scrollspy').scrollSpy();
            $('select').material_select();
            $('ul.tabs').tabs();

            //                Fin de inicio materialize
            ocultar();

            $("#btnaddcat").click(function(e) {
                e.preventDefault();
                ocultar();
                $("#modulocat").show();
            });
            $("#btnaddprodut").click(function(e) {
                e.preventDefault();
                ocultar();
                $("#moduloaddprod").show();
            });
            $("#voler").click(function() {
                ocultar();
            });
            function ocultar() {
                $("#moduloaddprod").hide();
                $("#modulocat").hide();
            }

        });
    </script>

</body>
</html>

