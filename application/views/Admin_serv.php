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
                    <li class="tab"><a  href="#home">Resumen</a></li>
                    <li class="tab"><a class="waves-effect waves-light" target="_self" href="<?PHP echo site_url() ?>/AdminController">Gestion Productos</a></li>
                    <li class="tab"><a class="active" href="#gservicios">Gestion Servicios</a></li>
                    <li class="tab"><a class="waves-effect waves-light" href="#gventas">Gestion Ventas</a></li>
                    <li class="tab"><a class="waves-effect waves-light" href="#noticias">Noticias</a></li>
                    <li class="tab"><a class="waves-effect waves-light" target="_self" href="<?PHP echo site_url() ?>/AdminOtros"><i class="material-icons  left">build</i></a></li>
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

                    <div class="">
                        <div class="row">

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
                <div id="gservicios" class="col s12">                    
                    <div class="card-panel orange text-primary">
                        <h3>Servicios</h3>
                    </div>

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

                        <nav class="row hoverable">
                            <div class="nav-wrapper">
                                <div class="input-field">
                                    <input id="search" type="search" required placeholder="Buscar Servicio">
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
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
                <div id="gventas" class="col s12">
                    <h3>Gestion de ventas</h3>
                    <nav>
                        <div class="nav-wrapper">
                            <div class="col s12">
                                <a href="#!" class="breadcrumb">First</a>
                                <a href="#!" class="breadcrumb">Second</a>
                                <a href="#!" class="breadcrumb">Third</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div id="noticias" class="col s12">
                    <h3>Noticias</h3>  
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
    <script src="<?php echo base_url(); ?>js/init.js"></script>
    <!-- tabla editable--->
<!--<script src="<?php echo base_url(); ?>lib/js/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url(); ?>lib/js/numeric-input-example.js"></script>
    Subir fotos chevere-->
    <script src="<?php echo base_url(); ?>lib/js/dropify.min.js"></script> 
    <script type="text/javascript">
        $(function() {
            //                Inicio de Materialize y Otros
            $('.modal').modal();
            $('.button-collapse').sideNav();
            $('.carousel.carousel-slider').carousel({fullWidth: true});
            $('.carousel').carousel('next', 3);
            $('.slider').slider();
            $('.scrollspy').scrollSpy();
            $('select').material_select();
            $('ul.tabs').tabs();
            $('.dropify').dropify();
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

            $("#btnshowcat").click(function(e) {
                e.preventDefault();
                ocultar();
                $("#modulocat").show();
            });

            $("#btnshowserv").click(function(e) {
                e.preventDefault();
                ocultar();
                $("#moduloaddserv").show();
            });

            $("#volver").click(function() {
                ocultar();
            });

            //AGREGAR PRODUCTO///
            $("#btnaddserv1").click(function(e) {
                e.preventDefault();
                var nombre = $("#nombreserv").val();
                var categoria = document.getElementById("subcatserv").value;
                var descripcion = $("#drescripcionserv").val();
                var precio = $("#precioserv").val();
                var stock = $("#stockserv").val();
                var fecha =$("#fechaserv").val();
                var rutEncarg = document.getElementById("selectencarg").value;
                if (nombre == "" || categoria == 0 || descripcion == "" ||
                        precio == "" || stock == "" || rutEncarg == 0) {
                    Materialize.toast("Faltan Campos", 1000);
                } else {
                    $.ajax({
                        url: '<?php echo site_url() ?>/addServ',
                        type: 'post',
                        dataType: 'json',
                        data: {"nombre": nombre, "idcategoria": categoria, "descripcion": descripcion,
                            "precio": precio, "stock": stock, "fecha": fecha, "rutencargado": rutEncarg}
                    }).success(function(o) {
                        Materialize.toast("Registro OK", 1000);
                        $('#formserv').each(function() {
                            this.reset();
                        });
                        verServicios();
                        $("#addproduct2").show();
                    }).fail(function() {
                        Materialize.toast("Error", 1000);
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
                $("#upsubcat").append("<option value='0' disabled>Selecciona una categoria</option>");
                $("#subcat").append("<option value='0' disabled selected>Selecciona una categoria</option>");
                $.getJSON(url, function(result) {
                    $.each(result, function(i, o) {
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
                            $('select').material_select();
                        }
                    });
                });
            }
            function getCategorias() {
                var url = "<?php echo site_url() ?>/getCat";
                $("#idcat").empty();
                $("#idcat").append("<option value='0' disabled selected>Selecciona una categoria</option>");
                $.getJSON(url, function(datos) {
                    $.each(datos, function(i, o) {
                        var x = "<option value='" + o.idcategoria + "'>" + o.nombre + "</option>";
                        $("#idcat").append(x);
                        $('select').material_select();
                    });
                });
            }
            function verProveedores() {
                var url = "<?php echo site_url() ?>/getProv";
                $("#selectprov").empty();
                $("#upselectprov").empty();
                $("#selectencarg").empty();
                $("#upselectprov").append("<option value='0' disabled>Seleccione Proveedor</option>");
                $("#selectencarg").append("<option value='0' disabled selected>Seleccione Encargado</option>");
                $("#selectprov").append("<option value='0' selected disabled>Seleccione Proveedor</option>");
                $.getJSON(url, function(datos) {
                    $.each(datos, function(i, o) {
                        if (o.idperfil == 4) {
                            var x = "<option value='" + o.rutencargado + "'>" + o.nombre + "</option>";
                            $("#selectprov").append(x);
                            $("#upselectprov").append(x);
                            $('select').material_select();
                        } else {
                            var x = "<option value='" + o.rutencargado + "'>" + o.nombre + "</option>";
                            $("#selectencarg").append(x);
                            $('select').material_select();
                        }
                    });
                });
            }
            function verServicios() {
                var url = "<?php echo site_url() ?>/getProd";
                $("#tbodyserv").empty();
                $.getJSON(url, function(result) {
                    $.each(result, function(i, o) {
                        if (o.idcategoria != 1) {
                            var fila = "<tr><td>" + o.idproducto + "</td>";
                            fila += "<td>" + o.nombre + "</td>";
                            fila += "<td>" + o.categoria + "</td>";
                            fila += '<td><button id="servver" value="'
                                    + o.idproducto + '|'
                                    + o.nombre + '|'
                                    + o.categoria + '|'
                                    + o.descripcion + '|'
                                    + o.precio + '|'
                                    + o.stock + '|'
                                    + o.fecha + '|'
                                    + o.proveedor +
                                    '" class="btn-floating waves-effect waves-light" ><i class="material-icons">search</i></button></td>';
                            fila += "<td>" + o.precio + "</td>";
                            fila += "<td>" + o.stock + "</td>";
                            fila += "<td>" + o.fecha + "</td>";
                            fila += "<td>" + o.proveedor + "</td>";
                            $("#tbodyserv").append(fila);
                        }
                    });
                });
            }


            function ocultar() {
                $("#moduloaddprod").hide();
                $("#modulocat").hide();
                $("#addproduct2").hide();
                $("#moduloverproducto").hide();
                $("#moduloaddserv").hide();
            }
        });
    </script>
</body>
</html>
