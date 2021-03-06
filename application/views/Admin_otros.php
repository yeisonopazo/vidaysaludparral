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
        <!--SUBIR FOTOS CHEVERE-->
        <link href="<?php echo base_url(); ?>lib/css/dropify.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>lib/css/dropify.min.css" type="text/css" rel="stylesheet"/>
    </head>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-image: url("<?php echo base_url(); ?>/lib/img/flores.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        main {
            flex: 1 0 auto;
        }
    </style>

    <body>
        <!-- NAV-->
        <div class="navbar-fixed">
            <nav class="teal nav-extended grey lighten-5" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="<?PHP echo site_url() ?>/welcome" class="brand-logo center-on-small-only"><img width="340" src="<?php echo base_url(); ?>/lib/img/logo3.png"></a>
                    <input type="text" name="rut" id="rutusuario" hidden>
                    <ul class="right hide-on-med-and-down">
                        <li><a id="saludo1" class="purple-text" href=""></a></li>
                        <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
                        <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
                        <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>
                    </ul>              
                    <a href="#" data-activates="nav-mobile" class="button-collapse purple-text"><i class="material-icons">menu</i></a>
                </div>
                <div class="nav-content container">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a class="waves-effect waves-light purple-text" href="#home">Resumen</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminController">Gestion Productos</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminServ">Gestion Servicios</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/VentasController">Gestion Ventas</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminNotice">Noticias</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text active" href="#gotros"><i class="material-icons left">build</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="nav-mobile" class="side-nav">
            <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>

            <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
            <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>
        </ul>
        <br><br>


        <main>
            <div class="container">
                <div>
                    <div id="home" class="col s12">
                             <div class="card light-green lighten-5">
                            <br>
                            <h5 class="center light-green-text darken-4" >Resumen</h5><br>
                        </div>
                        <div class="divider light-green darken-4"></div>
                        <div class="card-panel">
                            <div id="card-stats">
                                <div class="row">
                                    <div class="card-panel hoverable blue white-text col s12 m6 l3">
                                        <div class="card">                                          
                                                <div class="col s7 m7">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                    <p>Pedidos</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0">690</h5>
                                                    <p class="no-margin">Esta semana</p>
                                                    <p>23</p>
                                                </div>                                          
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 card-panel hoverable red  white-text">
                                        <div class="card">
                                            <div class="padding-4">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">perm_identity</i>
                                                    <p>Clientes</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0">23</h5>
                                                    <p class="no-margin">Esta semana</p>
                                                    <p>2</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 card-panel hoverable amber  white-text">
                                        <div class="card">
                                            <div class="padding-4">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">timeline</i>
                                                    <p>Ventas</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0">40</h5>
                                                    <p class="no-margin">Esta semana</p>
                                                    <p>5</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 card-panel hoverable green white-text">
                                        <div class="card">
                                            <div class="padding-4">
                                                <div class="col s7 m7">
                                                    <i class="material-icons background-round mt-5">attach_money</i>
                                                    <p>Ingresos</p>
                                                </div>
                                                <div class="col s5 m5 right-align">
                                                    <h5 class="mb-0">$890,679</h5>
                                                    <p class="no-margin">Esta semana</p>
                                                  <p>$128,590</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="gproductos" class="col s12">

                    </div>
                    <div id="gservicios" class="col s12">                   


                    </div>
                    <div id="gventas" class="col s12">

                    </div>
                    <div id="noticias" class="col s12">

                    </div>

                    <div id="gotros" class="col s12">   
                        <div class="divider light-green darken-4"></div>
                        <div class="card light-green lighten-5">   
                            <br>
                            <h5 class="center light-green-text darken-4" >Administrar</h5><br>
                        </div>
                        <div class="divider light-green darken-4"></div>



                        <div class="card-panel">
                            <div class="row"> 
                                <button type="submit" id="btnshowclient" class="btn btn-primary" ><i class="material-icons left">build</i>Adim Clientes</button>
                                <button type="submit" id="btnshowencargados" class="btn btn-primary" ><i class="material-icons left">build</i>Admin Encargados</button>
                                <button type="submit" id="btnshowproveed" class="btn btn-primary" ><i class="material-icons left">build</i>Admin Proveedores</button>
                                <a href="#" class="btn-floating right" id="volver"><i class="material-icons">arrow_back</i></a>
                            </div>  


                            <div id="modulocat" class="row card-panel">
                                <?php include ('modulos/categorias.php'); ?>
                            </div>                            
                            <div id="moduloaddserv" class="row card-panel">
                                <?php include ('modulos/addservice.php'); ?>
                            </div>
                            <div id="clientes" class="row card-panel">
                                <nav class="row hoverable">
                                    <div class="nav-wrapper">
                                        <div class="input-field">
                                            <input id="search" type="search" required placeholder="Buscar Cliente">
                                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                            <i class="material-icons">close</i>
                                        </div>
                                    </div>
                                </nav>
                                <!---------------------------------CLIENTES--------------------------------->
                                <div id="gclient" class=" col s12 ">
                                    <table id="tablaclient" class="bordered responsive-table">
                                        <thead>
                                            <tr>
                                                <th>RUT</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Direccion</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>Contraseña</th>
                                                <th><button class="btn-floating waves-effect waves-light" ><i class="material-icons">add</i></button></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyclient">

                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                        <li class="active grey darken-4"><a href="#!">1</a></li>
                                        <li class="waves-effect"><a href="#!">2</a></li>
                                        <li class="waves-effect"><a href="#!">3</a></li>
                                        <li class="waves-effect"><a href="#!">4</a></li>
                                        <li class="waves-effect"><a href="#!">5</a></li>
                                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!---------------------------------ENCARGADOS--------------------------------->
                            <div id="encargados" class="row card-panel">
                                <nav class="row hoverable">
                                    <div class="nav-wrapper">
                                        <div class="input-field">
                                            <input id="search" type="search" required placeholder="Buscar Encargados">
                                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                            <i class="material-icons">close</i>
                                        </div>
                                    </div>
                                </nav>

                                <div id="gencargados" class=" col s12 ">
                                    <table id="tablaencarg" class=" bordered responsive-table">
                                        <thead>
                                            <tr>
                                                <th>RUT</th>
                                                <th>Nombre</th>
                                                <th>Direccion</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th><button class="btn-floating waves-effect waves-light" ><i class="material-icons">add</i></button></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyencarg">

                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                        <li class="active grey darken-4"><a href="#!">1</a></li>
                                        <li class="waves-effect"><a href="#!">2</a></li>
                                        <li class="waves-effect"><a href="#!">3</a></li>
                                        <li class="waves-effect"><a href="#!">4</a></li>
                                        <li class="waves-effect"><a href="#!">5</a></li>
                                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!---------------------------------PROVEEDORES--------------------------------->
                            <div id="proveedores" class="row card-panel">
                                <nav class="row hoverable">
                                    <div class="nav-wrapper">
                                        <div class="input-field">
                                            <input id="search" type="search" required placeholder="Buscar Proveedores">
                                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                            <i class="material-icons">close</i>
                                        </div>
                                    </div>
                                </nav>

                                <div id="gproveed" class=" col s12 ">
                                    <table id="tablaprov" class="bordered responsive-table">
                                        <thead>
                                            <tr>
                                                <th>RUT</th>
                                                <th>Nombre</th>                                        
                                                <th>Direccion</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th><button class="btn-floating waves-effect waves-light" ><i class="material-icons">add</i></button></th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyprov">

                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                                        <li class="active grey darken-4"><a href="#!">1</a></li>
                                        <li class="waves-effect"><a href="#!">2</a></li>
                                        <li class="waves-effect"><a href="#!">3</a></li>
                                        <li class="waves-effect"><a href="#!">4</a></li>
                                        <li class="waves-effect"><a href="#!">5</a></li>
                                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                                    </ul>
                                </div>

                                <!--         -----------------MODAL PROVEEDOR----------------------------->
                                <div id="modalprov" class="modal modal-fixed-footer">
                                    <div class="modal-content">

                                        <h5>Agregar Proveedor</h5>
                                        <form id="formprov">
                                            <div class="col s12">
                                                <div class="input-field">
                                                    <i class="material-icons prefix">account_circle</i>
                                                    <label for="rutprov">RUT: </label>                           
                                                    <input type="text" name="rutprov" required id="rutprov">
                                                </div>

                                                <div class="input-field">
                                                    <i class="material-icons prefix">face</i>
                                                    <label for="nombreprov">Nombre: </label>
                                                    <input type="text" name="nombreprov" required id="nombreprov"/>
                                                </div>
                                                <div class="input-field">
                                                    <i class="material-icons prefix">location_on</i>
                                                    <label for="direccionprov">Direccion: </label>
                                                    <input type="text" name="direccionprov" required id="direccionprov"/>
                                                </div>
                                                <div class="input-field col s12 m4">
                                                    <i class="material-icons prefix">location_on</i>
                                                    <label for="telefonoprov">Telefono: </label>
                                                    <input type="text" name="telefonoprov" required id="telefonoprov"/>
                                                </div>
                                                <div class="input-field col s12 m8">
                                                    <i class="material-icons prefix">mail</i>
                                                    <label for="emailprov">Email: </label>
                                                    <input type="text" name="emailprov" required id="emailprov"/>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="modal-footer">                                      
                                        <input type="submit" class="btn btn-primary" id="btnaddprov" value="Agregar Proveedor"/>
                                    </div>
                                </div>
                                <!-------------------------FIN MODAL AGREGAR PROVEEDOR-------->

                            </div>                       

                        </div>
                    </div>
                </div>

                <div id="modalprodver" class="modal">
                    <div class="modal-content">
                        <h4 id="txtnombreprod"></h4>
                        <p id="txtdescrip"></p>
                        <p id="txtprecio"></p>
                        <p id="txtprovedor"></p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="page-footer amber">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Acerca De</h5>
                        <p class="purple-text">Nuestro objetivo, es acercar a un sin número de terapias Complementarias, y a los mejores terapeutas, para así aportar un granito de arena en el logro de un Equilibrio en tu salud y la de todos aquellos que trabajamos para ello.</p>


                    </div>
                    <div class="col l3 s12">

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

        <script src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/init.js"></script>
        <!-- tabla editable--->
    <!--<script src="<?php echo base_url(); ?>lib/js/mindmup-editabletable.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/numeric-input-example.js"></script>
        Subir fotos chevere-->
        <script src="<?php echo base_url(); ?>lib/js/dropify.min.js"></script> 
        <script type="text/javascript">
            $(function () {
                //                Inicio de Materialize y Otros
                $('.modal').modal();
                $('.button-collapse').sideNav();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
                $('.carousel').carousel('next', 3);
                $('.slider').slider();
                $('.scrollspy').scrollSpy();
                $('select').material_select();
                $('ul.tabs').tabs();
                $('.dropify').dropify({
                    messages: {
                        'default': 'Arrastre y suelte un archivo aquí o haga clic',
                        'replace': 'Arrastrar y soltar o hacer clic para reemplazar',
                        'remove': 'Eliminar',
                        'error': 'Ooops, sucedió algo mal.'
                    }
                });
                $('.tooltipped').tooltip({delay: 50});
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 10, // Creates a dropdown of 15 years to control year,
                    today: 'Hoy',
                    clear: 'Limpiar',
                    close: 'Ok',
                    format: "dd-mm-yyyy",
                    closeOnSelect: false // Close upon selecting a date,

                });

                ocultar();
                verClientes();
                verProveedores();
                getSesion();
                //////////

                $("#btnshowclient").click(function (e) {
                    ocultar();
                    $("#clientes").show();
                });

                $("#btnshowproveed").click(function (e) {
                    ocultar();
                    $("#proveedores").show();

                });

                $("#btnshowencargados").click(function (e) {
                    ocultar();
                    $("#encargados").show();
                });

                $("#volver").click(function () {
                    ocultar();
                });



                function verProveedores() {
                    var url = "<?php echo site_url() ?>/getProv";
                    $("#tbodyprov").empty();
                    $("#tbodyencarg").empty();
                    $.getJSON(url, function (datos) {
                        $.each(datos, function (i, o) {
                            if (o.idperfil == 4) {
                                var fila = "<tr><td>" + o.rutencargado + "</td>";
                                fila += "<td>" + o.nombre + "</td>";
                                fila += "<td>" + o.direccion + "</td>";
                                fila += "<td>" + o.telefono + "</td>";
                                fila += "<td>" + o.correo + "</td>";
                                fila += '<td><button id="editprov" value="'
                                        + o.rutusuario + '|'
                                        + o.nombre + '|'
                                        + o.direccion + '|'
                                        + o.telefono + '|'
                                        + o.correo + '|'
                                        + '" class="btn-floating waves-effect waves-light" ><i class="material-icons">edit</i></button></td></tr>';
                                $("#tbodyprov").append(fila);
                            } else {
                                var fila = "<tr><td>" + o.rutencargado + "</td>";
                                fila += "<td>" + o.nombre + "</td>";
                                fila += "<td>" + o.direccion + "</td>";
                                fila += "<td>" + o.telefono + "</td>";
                                fila += "<td>" + o.correo + "</td>";
                                fila += '<td><button id="editprov" value="'
                                        + o.rutusuario + '|'
                                        + o.nombre + '|'
                                        + o.direccion + '|'
                                        + o.telefono + '|'
                                        + o.correo + '|'
                                        + '" class="btn-floating waves-effect waves-light" ><i class="material-icons">edit</i></button></td></tr>';
                                $("#tbodyencarg").append(fila);
                            }
                        });
                    });
                }
                function verClientes() {
                    var url = "<?php echo site_url() ?>/getClient";
                    $("#tbodyclient").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<tr><td>" + o.rutusuario + "</td>";
                            fila += "<td>" + o.nombre + "</td>";
                            fila += "<td>" + o.apellido + "</td>";
                            fila += "<td>" + o.direccion + "</td>";
                            fila += "<td>" + o.telefono + "</td>";
                            fila += "<td>" + o.correo + "</td>";
                            fila += "<td>" + o.contraseña + "</td>";
                            fila += '<td><button id="editclient" value="'
                                    + o.rutusuario + '|'
                                    + o.nombre + '|'
                                    + o.apellido + '|'
                                    + o.direccion + '|'
                                    + o.telefono + '|'
                                    + o.correo + '|'
                                    + o.fecha + '|'
                                    + o.contraseña +
                                    '" class="btn-floating waves-effect waves-light" ><i class="material-icons">edit</i></button></td></tr>';
                            $("#tbodyclient").append(fila);

                        });
                    });
                }


                function ocultar() {
                    $("#moduloaddprod").hide();
                    $("#modulocat").hide();
                    $("#addproduct2").hide();
                    $("#moduloverproducto").hide();
                    $("#moduloaddserv").hide();
                    $("#clientes").hide();
                    $("#proveedores").hide();
                    $("#encargados").hide();

                }

                function getSesion() {
                    var url = "<?php echo site_url() ?>/getAdmin";
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
                            $("#saludo1").append("Bienvenida " + u.nombre + " " + u.apellido + "!");
                            $("#saludo2").append("Bienvenida " + u.nombre + " " + u.apellido + "!");

                        });
                    });

                }

            });
        </script>
    </body>
</html>
