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
                        <li class="tab"><a class="waves-effect waves-light purple-text active" href="#gventas">Gestion Ventas</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminNotice">Noticias</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminOtros"><i class="material-icons left">build</i></a></li>
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

                    <div class="card light-green lighten-5">
                        <br>
                        <h5 class="center light-green-text darken-4" >Gestion Ventas</h5>
                        <br>
                    </div>
                    <div class="divider light-green darken-4"></div>
                    <div class="card-panel" id="verdetalle">
                        <div class="row">
                            <div class="col s3">                                  
                                <b><span id="nropedido"></span></b>

                            </div>

                            <table id="tabladetalle" class="bordered responsive-table" >
                                <thead>
                                    <tr>
                                        <th>ID Producto</th>
                                        <th>Nombre</th>                                        
                                        <th>Cantidad</th>
                                        <th>Precio Unidad</th>
                                        <th>Total</th>                                  
                                    </tr>
                                </thead>
                                <tbody id="tbodydetalle">
                                </tbody>
                            </table>                            
                            <div id="botones">   
                                <div class="right-align amber">
                                    <b><span>TOTAL: $</span><samp id="totalventa"></samp></b>
                                </div>
                                <div class="divider black"></div>
                                <div>
                                    <p><b>Observaciones: </b><p>
                                    <p id="observacionventa" ></p>
                                </div>
                                <div class="right">
                                    <a id="btncerrardetalle" href="#">Cerrar</a>                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-panel">
                        <nav class="row hoverable">
                            <div class="nav-wrapper">
                                <div class="input-field">
                                    <input id="searchventa" type="search" required placeholder="Buscar Venta">
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </div>
                        </nav>

                        <div id="gproveed" class=" col s12 ">
                            <table id="tablaventas" class="bordered responsive-table" >
                                <thead>
                                    <tr>
                                        <th>ID-Venta</th>
                                        <th>Rut Usuario</th>                                        
                                        <th>Fecha de Compra</th>
                                        <th>Total</th>
                                        <th>Comprovante</th>
                                        <th>Estado</th>
                                        <th>Ver detalle</th>
                                    </tr>
                                </thead>
                                <tbody id="tbodyventa">

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

                        <div id="modalestado" class="modal">
                            <div class="modal-content">
                                <h5>Cambiar estado de la venta</h5>
                                <form id="formventa">
                                    <div class="col s12 m6">
                                        <input type="text" id="idventa" hidden>
                                        <div class="col s12 m6">                                            
                                            <select class="browser-default" id="estadoventa"> 
                                                <option value="0">Seleccione un estado</option>
                                                <option value="Pagado">Pagado</option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="Cancelado">Cancelado</option>
                                            </select> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">                                      
                                <input type="submit" class="btn btn-primary" id="btnestado" value="Actualizar estado"/>
                            </div>
                        </div> 
                    </div>
                </div>
                <div id="noticias" class="col s12">
                </div>
                <div id="gotros" class="col s12">   
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
                //////////
                verVentas();
                getSesion();
                $("#verdetalle").hide();
                $("#btncerrardetalle").click(function (e) {
                    e.preventDefault();
                    $("#verdetalle").hide();
                });

                function verVentas() {
                    var url = "<?php echo site_url() ?>/getVent";
                    $("#tbodyventa").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<tr><td>" + o.idventa + "</td>";
                            fila += "<td>" + o.rutusuario + "</td>";
                            fila += "<td>" + o.fechaventa + "</td>";
                            fila += "<td>" + "$" + o.total + "</td>";
                            fila += '<td><button id="prodver" value="' + o.comprobante + '" class="btn-floating waves-effect waves-light" ><i class="material-icons">search</i></button></td>';

                            fila += "<td>" + o.estado + " " + "<button class='btn-floating modal-trigger' href='#modalestado' id='editestado' value='" + o.idventa + "'><i class='material-icons'>edit</i></button> </td>";
                            fila += "<td><button class='btn-floating secondary-content' id='verdetalleventa' value='" + o.idventa + '|' + o.observacion + "'><i class='material-icons'>search</i></button></td></tr>";
                            $("#tbodyventa").append(fila);
                        });
                    });
                }
                $("body").on("click", "#editestado", function (e) {
                    e.preventDefault();
                    $("#idventa").empty();
                    var datos = $(this).val();
                    var fila = datos.split("|");
                    $("#idventa").val(fila[0]);

                });

                $("#btnestado").click(function (e) {
                    e.preventDefault();
                    var estado = document.getElementById("estadoventa").value;
                    var idventa = $("#idventa").val();
                    if (estado == 0) {
                        Materialize.toast("Debe seleccionar un estado", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/cambEV',
                            type: 'post',
                            dataType: 'json',
                            data: {"idventa": idventa, "estado": estado}
                        }).success(function (o) {
                            Materialize.toast(o.msg, 1000);
                            verVentas();
                            $('#modalestado').modal('close');
                        }).fail(function () {
                            Materialize.toast("Error al cambiar estado", 1000);
                        });

                    }

                });

                $("body").on("click", "#verdetalleventa", function (e) {
                    e.preventDefault();
                    $("#observacionventa").empty();
                    $("#nropedido").empty();
                    $("#tbodydetalle").empty();
                    $("#totalventa").empty();
                    var datos = $(this).val();
                    var fila = datos.split("|");
                    var totalventa = 0;
                    $("#observacionventa").append(fila[1]);
                    $("#nropedido").append("Nro. de pedido: " + fila[0]);
                    $.ajax({
                        url: '<?php echo site_url() ?>/getDVenta',
                        type: "POST",
                        dataType: 'json',
                        data: {"idventa": fila[0]}
                    }).success(function (obj) {
                        $.each(obj, function (i, o) {
                            totalventa = parseInt(o.total) + parseInt(totalventa);
                            var fila = "<tr><td>" + o.idproducto + "</td>";
                            fila += "<td>" + o.nombre + "</td>";
                            fila += "<td>" + o.cantidad + "</td>";
                            fila += "<td>" + o.precio + "</td>";
                            fila += "<td>" + o.total + "</td></tr>";
                            $("#tbodydetalle").append(fila);
                        });
                        $("#totalventa").append(totalventa);
                        $("#verdetalle").show();
                    });
                });

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



//camputar de un radio var radio = $("input:radio[name=radio1]:checked").val();
            });
        </script>
    </body>
</html>
