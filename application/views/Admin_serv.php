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
            <nav class="nav-extended grey lighten-5" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="<?PHP echo site_url() ?>/welcome" class="brand-logo center-on-small-only"><img width="340" src="<?php echo base_url(); ?>/lib/img/logo3.png"></a>
                    <input type="text" name="rut" id="rutusuario" hidden>
                    <ul class="right hide-on-med-and-down">
                        <li><a id="saludo1" class="purple-text" href=""></a></li>
                        <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
                        <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
                        <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>

                    </ul>

                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>

                <div class="nav-content container">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a  class="waves-effect waves-light purple-text" href="#home">Resumen</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminController">Gestion Productos</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text active" href="#gservicios">Gestion Servicios</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/VentasController">Gestion Ventas</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminNotice">Noticias</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminOtros"><i class="material-icons  left">build</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="nav-mobile" class="side-nav">    
            <li><a id="saludo2" class="purple-text" href=""></a></li>
            <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
            <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
            <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>
        </ul>
        <br>
        <br>
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
                        <div class="row">
                            <!--         -----------------MODAL ENCARGADO----------------------------->
                            <div id="modalprov" class="modal modal-fixed-footer">
                                <div class="modal-content">
                                    <h5>Agregar Encargado</h5>
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
                                                <i class="material-icons prefix">phone</i>
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
                                    <input type="submit" class="btn btn-primary" id="btnaddprov" value="Agregar Encargado"/>
                                </div>
                            </div>
                            <!-------------------------FIN MODAL AGREGAR ENCARGADO-------->

                        </div>

                    </div>
                    <div id="gservicios" class="col s12">                    
                        <div class="card light-green lighten-5">
                            <br>
                            <h5 class="center light-green-text darken-4" >Servicios</h5>
                            <br>
                        </div>
                        <div class="divider light-green darken-4"></div>

                        <div class="card-panel">

                            <div class="row"> 
                                <button type="submit" id="btnshowcat" class="btn btn-primary" ><i class="material-icons left">library_add</i>Agregar Categoria</button>
                                <button type="submit" id="btnshowserv" class="btn btn-primary" ><i class="material-icons left">library_add</i>Agregar Servicio</button>
                                <a href="#" class="btn-floating right" id="volver"><i class="material-icons">arrow_back</i></a>
                            </div>  


                            <div id="modulocat" class="row card-panel">
                                <?php include ('modulos/categorias.php'); ?>
                            </div>                            
                            <div id="moduloaddserv" class="row card-panel">
                                <?php include ('modulos/addservice.php'); ?>
                            </div>
                            <div id="moduloverservicio" class="row card-panel">
                                <?php include ('modulos/verservice.php'); ?>
                            </div>

                            <nav class="row hoverable">
                                <div class="nav-wrapper">
                                    <div class="input-field">
                                        <input id="busqueda" type="search" required placeholder="Buscar Servicio">
                                        <label class="label-icon" for="busqueda"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </div>
                            </nav>

                            <div class="col s12 ">
                                <table id="tablaserv" class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Imagen</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Disponibilidad</th>
                                            <th>Fecha</th>
                                            <th>Encargado</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodyserv">

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
                    </div>
                    <div id="gventas" class="col s12">

                    </div>
                    <div id="noticias" class="col s12">

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
        <script src="<?php echo base_url(); ?>lib/js/jquery.rut.js"></script>
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
                verTodasCategorias();
                getCategorias();
                verProveedores();
                verServicios();
                getSesion();



                $("#btnshowcat").click(function (e) {
                    e.preventDefault();
                    ocultar();
                    $("#modulocat").show();
                });

                $("#btnshowserv").click(function (e) {
                    e.preventDefault();
                    ocultar();
                    $("#moduloaddserv").show();
                });

                $("#volver").click(function () {
                    ocultar();
                });

                $("#rutprov").rut({validateOn: 'change keyup'});

                /////////AGREGAR CATEGORIA///////////
                $("#btnaddcat").click(function (e) {
                    e.preventDefault();
                    var nombre = $("#nombrecat").val();
                    if (nombre == "") {
                        Materialize.toast("Debe ingresar un nombre", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/addCat',
                            type: 'post',
                            dataType: 'json',
                            data: {"nombre": nombre}
                        }).success(function (o) {
                            Materialize.toast("Categoria agregada", 1000);
                            Materialize.toast(o.msg, 2000);
                            $('#formcat').each(function () {
                                this.reset();
                            });
                            verTodasCategorias();
                            getCategorias();
                        }).fail(function () {
                            Materialize.toast("Error", 1000);
                        });
                    }
                });

                //////////AGREGAR UBCATEGORIA//////
                $("#btnaddsubcat").click(function (e) {
                    e.preventDefault();
                    var nombre = $("#nombresubcat").val();
                    var categoria = document.getElementById("idcat").value;
                    if (nombre == "" || formsubcat.idcat.value == 0) {
                        Materialize.toast("Debe completar campos", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/addSubCat',
                            type: 'post',
                            dataType: 'json',
                            data: {"nombre": nombre, "idcategoria": categoria}
                        }).success(function (o) {
                            Materialize.toast("SubCategoria Agregada", 1000);
                            $('#formsubcat').each(function () {
                                this.reset();
                            });
                            verTodasCategorias();
                            getCategorias();
                        }).fail(function () {
                            Materialize.toast("Error", 1000);
                        });
                    }
                });

                //AGREGAR PRODUCTO///

                $("#btnaddserv1").click(function (e) {
                    e.preventDefault();
                    var form = $("#formserv")[0];
                    var data = new FormData(form);
                    var nombre = $("#nombreserv").val();
                    var categoria = document.getElementById("subcatserv").value;
                    var descripcion = $("#drescripcionserv").val();
                    var precio = $("#precioserv").val();
                    var stock = $("#stockserv").val();
                    var fecha = $("#fechaserv").val();
                    var rutEncarg = document.getElementById("selectencarg").value;
                    var img = $("#input-file-now").val();
                    if (nombre == "" || categoria == 0 || descripcion == "" ||
                            precio == "" || stock == "" || rutEncarg == 0 || img == 0) {
                        Materialize.toast("Faltan Campos", 1000);
                    } else if (parseInt(precio) < 0 || parseInt(stock) < 0) {
                        Materialize.toast("Stock  y precio deben ser numericos", 2000);

                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/addServ',
                            type: 'POST',
                            dataType: 'json',
                            data: data,
                            enctype: 'multipart/form-data',
                            processData: false,
                            contentType: false,
                            cache: false,
                            timeout: 600000,
                            success: function (o) {
                                Materialize.toast("Servicio agregado", 1000);
                                $('#formserv').each(function () {
                                    this.reset();
                                });
                                var drEvent = $('#input-file-now').dropify();
                                drEvent = drEvent.data('dropify');
                                drEvent.resetPreview();
                                drEvent.clearElement();

                                verServicios();
                                ocultar();
                            }, error: function () {
                                Materialize.toast("Error", 1000);
                            }

                        });
                    }

                });



                $("#btnupserv2").click(function (e) {
                    e.preventDefault();
                    var form = $("#formimgserv")[0];
                    var data = new FormData(form);
                    var imagen = $("#imagen").val();
                    var id = $("#idproducto").val();
                    if (imagen == "" || id == "") {
                        Materialize.toast("ingrese una imagen", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/upImg',
                            type: 'POST',
                            dataType: 'json',
                            data: data,
                            enctype: 'multipart/form-data',
                            processData: false,
                            contentType: false,
                            cache: false,
                            timeout: 600000,
                            success: function (o) {
                                Materialize.toast(o.msg, 1000);
                                verServicios();
                                $('#formimgserv').each(function () {
                                    this.reset();
                                });
                                var drEvent = $('#imagen').dropify();
                                drEvent = drEvent.data('dropify');
                                drEvent.resetPreview();
                                drEvent.clearElement();

                                ocultar();
                                $("#imagen").empty();


                            }, error: function () {
                                Materialize.toast("Error 500", 1000);
                                $('#formimgserv').each(function () {
                                    this.reset();
                                });
                            }

                        });
                    }
                });

                function verTodasCategorias() {
                    var url = "<?php echo site_url() ?>/getSubCat";
                    $("#tablacateg").empty();
                    $("#subcat").empty();
                    $("#upsubcat").empty();
                    $("#subcatserv").empty();
                    $("#subcatserv").append("<option value='0' disabled selected>Selecciona una categoria</option>");
                    $("#subcat").append("<option value='0' disabled selected>Selecciona una categoria</option>");
                    $("#upsubcat").append("<option value='0' disabled>Selecciona una categoria</option>");
                    $("#upsubcatserv").append("<option value='0' disabled>Selecciona una categoria</option>");
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            if (o.nombre != "Productos") {
                                var fila = "<tr><td>" + o.idcategoria + "</td>";
                                fila += "<td>" + o.nombre + "</td>";
                                fila += "<td>" + o.idsubcategoria + "</td>";
                                fila += "<td>" + o.subcategoria + "</td>";
                                $("#tablacateg").append(fila);
                                if (o.nombre == "Productos") {
                                    var subcat = "<option value='" + o.idsubcategoria + "'>" + o.subcategoria + "</option>";
                                    $("#subcat").append(subcat);
                                    $("#upsubcat").append(subcat);
                                    $('select').material_select();
                                } else {
                                    var subcat = "<option value='" + o.idsubcategoria + "'>" + o.subcategoria + "</option>";
                                    $("#subcatserv").append(subcat);
                                    $("#upsubcatserv").append(subcat);
                                    $('select').material_select();
                                }
                            }
                        });
                    });
                }
                function getCategorias() {
                    var url = "<?php echo site_url() ?>/getCat";
                    $("#idcat").empty();
                    $("#idcat").append("<option value='0' disabled selected>Selecciona una categoria</option>");
                    $.getJSON(url, function (datos) {
                        $.each(datos, function (i, o) {
                            if (o.nombre != "Productos") {
                                var x = "<option value='" + o.idcategoria + "'>" + o.nombre + "</option>";
                                $("#idcat").append(x);
                                $('select').material_select();
                            }
                        });
                    });
                }
                function verProveedores() {
                    var url = "<?php echo site_url() ?>/getProv";
                    $("#selectprov").empty();
                    $("#upselectprov").empty();
                    $("#selectencarg").empty();
                    $("#upselectprov").append("<option value='0' disabled>Seleccione Proveedor</option>");
                    $("#upselectencarg").append("<option value='0' disabled>Seleccione Encargado</option>");
                    $("#selectencarg").append("<option value='0' disabled selected>Seleccione Encargado</option>");
                    $("#selectprov").append("<option value='0' selected disabled>Seleccione Proveedor</option>");
                    $.getJSON(url, function (datos) {
                        $.each(datos, function (i, o) {
                            if (o.idperfil == 4) {
                                var x = "<option value='" + o.rutencargado + "'>" + o.nombre + "</option>";
                                $("#selectprov").append(x);
                                $("#upselectprov").append(x);
                                $('select').material_select();
                            } else {
                                var x = "<option value='" + o.rutencargado + "'>" + o.nombre + "</option>";
                                $("#selectencarg").append(x);
                                $("#upselectencarg").append(x);
                                $('select').material_select();
                            }
                        });
                    });
                }
                function verServicios() {
                    var url = "<?php echo site_url() ?>/getProd";
                    $("#tbodyserv").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            if (o.idcategoria != 1) {
                                var fila = "<tr><td>" + o.idproducto + "</td>";
                                fila += "<td>" + o.nombre + "</td>";
                                fila += "<td>" + o.nombresubcat + "</td>";
                                fila += "<td><img height='100' src='data:image/jpeg;base64," + o.imagen + "'/></td>";
                                fila += '<td><button id="servver" value="'
                                        + o.idproducto + '|'
                                        + o.nombre + '|'
                                        + o.categoria + '|'
                                        + o.descripcion + '|'
                                        + o.precio + '|'
                                        + o.stock + '|'
                                        + o.fecha + '|'
                                        + o.proveedor + '|'
                                        + o.imagen + '" class="btn-floating waves-effect waves-light" ><i class="material-icons">search</i></button></td>';
                                fila += "<td>" + o.precio + "</td>";
                                fila += "<td>" + o.stock + "</td>";
                                fila += "<td>" + o.fecha + "</td>";
                                fila += "<td>" + o.nombreprov + "</td>";
                                $("#tbodyserv").append(fila);
                            }
                        });
                    });
                }

                $("#busqueda").keyup(function (e) {
                    e.preventDefault();
                    var consulta = $("#busqueda").val();
                    if (consulta == "") {
                        $("#tbodyserv").empty();
                        verServicios();
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/buscarP',
                            type: "POST",
                            dataType: 'json',
                            data: {"nombre": consulta}
                        }).success(function (obj) {
                            $("#tbodyserv").empty();
                            $.each(obj, function (i, o) {
                                if (o.idcategoria != 1) {
                                    var fila = "<tr><td>" + o.idproducto + "</td>";
                                    fila += "<td>" + o.nombre + "</td>";
                                    fila += "<td>" + o.nombresubcat + "</td>";
                                    fila += "<td><img height='100' src='data:image/jpeg;base64," + o.imagen + "'/></td>";
                                    fila += '<td><button id="servver" value="'
                                            + o.idproducto + '|'
                                            + o.nombre + '|'
                                            + o.categoria + '|'
                                            + o.descripcion + '|'
                                            + o.precio + '|'
                                            + o.stock + '|'
                                            + o.fecha + '|'
                                            + o.proveedor + '|'
                                            + o.imagen + '" class="btn-floating waves-effect waves-light" ><i class="material-icons">search</i></button></td>';
                                    fila += "<td>" + o.precio + "</td>";
                                    fila += "<td>" + o.stock + "</td>";
                                    fila += "<td>" + o.fecha + "</td>";
                                    fila += "<td>" + o.nombreprov + "</td>";
                                    $("#tbodyserv").append(fila);
                                }
                            });

                        }).fail(function () {
                            Materialize.toast("Error", 1000);
                        });
                    }
                });
                ///VER Y EDITAR SERVICIOS///
                $("body").on("click", "#servver", function (e) {
                    e.preventDefault();
                    ocultar();
                    $('#formupdserv').each(function () {
                        this.reset();
                    });
                    var datos = $(this).val();
                    var fila = datos.split("|");
                    $("#upidserv").val(fila[0]);
                    $("#idproducto").val(fila[0]);
                    $("#upnombreserv").val(fila[1]);
                    $("#upsubcatserv").val(fila[2]);
                    $("#updescripcionserv").val(fila[3]);
                    $("#upprecioserv").val(fila[4]);
                    $("#upstockserv").val(fila[5]);
                    $("#upfechaserv").val(fila[6]);
                    $("#upselectencarg").val(fila[7]);
                    $("#verimagen").empty();
                    var fila = "<img  width='100%' src='data:image/jpeg;base64," + fila[8] + "'/>";
                    //  var img = "<label for='input-file-now'></label><input type='file' id='input-file-now' class='dropify' data-default-file='data:image/jpeg;base64," + fila[8] + "'/>";
                    $("#verimagen").append(fila);
                    //   $("#upselectencarg").show();
                    $("#moduloverservicio").show();
                    location.href = "#moduloverservicio";
                });

                $("#btnupserv1").click(function (e) {
                    e.preventDefault();
                    var idprod = $("#upidserv").val();
                    var nombre = $("#upnombreserv").val();
                    var categoria = document.getElementById("upsubcatserv").value;
                    var descripcion = $("#updescripcionserv").val();
                    var precio = $("#upprecioserv").val();
                    var stock = $("#upstockserv").val();
                    var fecha = $("#upfechaserv").val();
                    var rutEncarg = document.getElementById("upselectencarg").value;
                    if (nombre == "" || categoria == 0 || descripcion == "" ||
                            precio == "" || stock == "" || fecha == "" || rutEncarg == 0) {
                        Materialize.toast("Hay campos vacios o no seleccionados", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/upServ',
                            type: 'post',
                            dataType: 'json',
                            data: {"idproducto": idprod, "nombre": nombre, "idcategoria": categoria, "descripcion": descripcion,
                                "precio": precio, "stock": stock, "fecha": fecha, "rutencargado": rutEncarg}
                        }).success(function (o) {
                            Materialize.toast("Servicio Actualizado", 1000);
                            verServicios();
                            $("#uppserv2").show();
                        }).fail(function () {
                            Materialize.toast("Error al actualizar", 1000);
                        });
                    }
                });

                function ocultar() {
                    $("#moduloaddprod").hide();
                    $("#modulocat").hide();
                    $("#addproduct2").hide();
                    $("#moduloverproducto").hide();
                    $("#moduloaddserv").hide();
                    $("#moduloverservicio").hide();
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
