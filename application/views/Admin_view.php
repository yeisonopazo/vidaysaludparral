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
        <div class="navbar-fixed">
            <nav class="nav-extended grey lighten-5" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="<?PHP echo site_url() ?>/welcome" class="brand-logo center-on-small-only"><img width="340" src="<?php echo base_url(); ?>/lib/img/logo3.png"></a>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                    <input type="text" name="rut" id="rutusuario" hidden>
                    <ul class="right hide-on-med-and-down">
                        <li><a id="saludo1" class="purple-text" href=""></a></li>
                        <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
                        <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
                        <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>
                    </ul>
                </div>
                <div class="nav-content container">                
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a class="waves-effect waves-light purple-text" href="#home">Resumen</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text active"  href="#gproductos">Gestion Productos</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminServ">Gestion Servicios</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text"  target="_self" href="<?PHP echo site_url() ?>/VentasController">Gestion Ventas</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text"  target="_self" href="<?PHP echo site_url() ?>/AdminNotice">Noticias</a></li>
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
        <br>
        <br>

        <main>
            <div class="container">
                <div>
                    <div id="home" class="col s12">
                        <div class="card light-green lighten-5">
                            <h4 class="center light-green-text darken-4" >Resumen</h4>
                        </div>
                        <div class="divider light-green darken-4"></div>
                    </div>
                    <div id="gproductos" class="col s12">
                        <div class="card light-green lighten-5">
                            <h4 class="center light-green-text darken-4" >Productos</h4>
                        </div>
                        <div class="divider light-green darken-4"></div>
                        <div class="card-panel">

                            <div class="row"> 
                                <button type="submit" id="btnshowcat" class="btn btn-primary" ><i class="material-icons left">library_add</i>Agregar Categoria</button>
                                <button type="submit" id="btnshowprod" class="btn btn-primary"> <i class="material-icons left">library_add</i>Agregar Producto</button>
                                <a href="#" class="btn-floating right" id="volver"><i class="material-icons">arrow_back</i></a>
                            </div>  
                            <div id="modulocat" class="row card-panel">
                                <?php include ('modulos/categorias.php'); ?>
                            </div>
                            <div id="moduloaddprod" class="row card-panel">
                                <?php include ('modulos/addproduct.php'); ?>
                            </div>                            
                            <div id="moduloverproducto" class="row card-panel">
                                <?php include ('modulos/verproducto.php'); ?>
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


                            <nav class="row hoverable">
                                <div class="nav-wrapper">
                                    <div class="input-field">
                                        <input id="search" type="search" required placeholder="Buscar Producto">
                                        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                        <i class="material-icons">close</i>
                                    </div>
                                </div>
                            </nav>

                            <div class="col s12 ">
                                <table id="tablaproduct" class="responsive-table bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Stock</th>
                                            <th>Proveedor</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodyproduct">

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
                    closeOnSelect: false // Close upon selecting a date,

                });
                //                Fin de inicio materialize

                // $("#tablaproduct").editableTableWidget();
                ocultar();
                verTodasCategorias();
                getCategorias();
                verProveedores();
                verProductos();
                getSesion();

                $("#btnshowcat").click(function (e) {
                    e.preventDefault();
                    ocultar();
                    $("#modulocat").show();
                });
                $("#btnshowprod").click(function (e) {
                    e.preventDefault();
                    ocultar();
                    $("#moduloaddprod").show();
                });
                $("#btnshowserv").click(function (e) {
                    e.preventDefault();
                    ocultar();
                    $("#moduloaddserv").show();
                });

                $("#rutprov").rut({validateOn: 'change keyup'});

                //////AGREGAR SUB-CATEGORIA//////////
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
                $("#btnaddprov").click(function (e) {
                    e.preventDefault();
                    var rut = $("#rutprov").val();
                    var nombre = $("#nombreprov").val();
                    var telefono = $("#telefonoprov").val();
                    var direccion = $("#direccionprov").val();
                    var correo = $("#emailprov").val();
                    if (rut == "" || nombre == "" || telefono == "" || direccion == "" || correo == "") {
                        Materialize.toast("Faltan Campos", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/addProv',
                            type: 'post',
                            dataType: 'json',
                            data: {"rutproveedor": rut, "nombre": nombre, "telefono": telefono,
                                "direccion": direccion, "correo": correo, "idperfil": 4}
                        }).success(function (o) {
                            Materialize.toast("Proveedor registrado", 1000);
                            $('#formprov').each(function () {
                                this.reset();
                            });
                            verProveedores();
                        }).fail(function () {
                            Materialize.toast("Error", 1000);
                        });
                    }
                });
                //AGREGAR PRODUCTO///
                $("#btnaddprodut1").click(function (e) {
                    e.preventDefault();
                    var nombre = $("#nombreprod").val();
                    var categoria = document.getElementById("subcat").value;
                    var descripcion = $("#drescripcionprod").val();
                    var precio = $("#precioprod").val();
                    var stock = $("#stockprod").val();
                    var rutProv = document.getElementById("selectprov").value;
                    if (nombre == "" || categoria == 0 || descripcion == "" ||
                            precio == "" || stock == "" || rutProv == 0) {
                        Materialize.toast("Faltan Campos", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/addProd',
                            type: 'post',
                            dataType: 'json',
                            data: {"nombre": nombre, "idcategoria": categoria, "descripcion": descripcion,
                                "precio": precio, "stock": stock, "fecha": "17-11-2017", "rutencargado": rutProv}
                        }).success(function (o) {
                            Materialize.toast("Registro OK", 1000);
                            $('#formprod').each(function () {
                                this.reset();
                            });
                            verProductos();
                            $("#addproduct2").show();
                        }).fail(function () {
                            Materialize.toast("Error", 1000);
                        });
                    }

                });
                $("#volver").click(function () {
                    ocultar();
                });
                function ocultar() {
                    $("#moduloaddprod").hide();
                    $("#modulocat").hide();
                    //                $("#addproduct2").hide();
                    $("#moduloverproducto").hide();
                    $("#moduloaddserv").hide();
                    $("#divcat").hide();
                }
                //ver//
                function verTodasCategorias() {
                    var url = "<?php echo site_url() ?>/getSubCat";
                    $("#tablacateg").empty();
                    $("#subcat").empty();
                    $("#upsubcat").empty();
                    $("#subcatserv").empty();
                    $("#subcatserv").append("<option value='0' disabled selected>Selecciona una categoria</option>");
                    $("#upsubcat").append("<option value='0' disabled>Selecciona una categoria</option>");
                    $("#subcat").append("<option value='0' disabled selected>Selecciona una categoria</option>");
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            if (o.nombre === "Productos") {
                                var fila = "<tr><td>" + o.idcategoria + "</td>";
                                fila += "<td>" + o.nombre + "</td>";
                                fila += "<td>" + o.idsubcategoria + "</td>";
                                fila += "<td>" + o.subcategoria + "</td>";
                                fila += '<td><button id="editprov" class="btn-floating waves-effect waves-light" ><i class="material-icons">edit</i></button></td></tr>';
                                $("#tablacateg").append(fila);

                                if (o.nombre === "Productos") {
                                    var subcat = "<option value='" + o.idsubcategoria + "'>" + o.subcategoria + "</option>";
                                    $("#subcat").append(subcat);
                                    $("#upsubcat").append(subcat);
                                    $('select').material_select();
                                } else {
                                    var subcat = "<option value='" + o.idsubcategoria + "'>" + o.subcategoria + "</option>";
                                    $("#subcatserv").append(subcat);
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
                            if (o.nombre === "Productos") {
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
                    $("#selectencarg").append("<option value='0' disabled selected>Seleccione Encargado</option>");
                    $("#selectprov").append("<option value='0' selected disabled>Seleccione Proveedor</option>");
                    $.getJSON(url, function (datos) {
                        $.each(datos, function (i, o) {
                            if (o.idperfil === 4) {
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
                function verProductos() {
                    var url = "<?php echo site_url() ?>/getProd";
                    $("#tbodyproduct").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {

                            if (o.nombcateg === "Productos") {
                                var fila = "<tr><td>" + o.idproducto + "</td>";
                                fila += "<td>" + o.nombre + "</td>";
                                fila += "<td>" + o.nombresubcat + "</td>";
                                fila += '<td><button id="prodver" value="'
                                        + o.idproducto + '|'
                                        + o.nombre + '|'
                                        + o.idsubcategoria + '|'
                                        + o.descripcion + '|'
                                        + o.precio + '|'
                                        + o.stock + '|'
                                        + o.rutproveedor +
                                        '" class="btn-floating waves-effect waves-light" ><i class="material-icons">search</i></button></td>';
                                fila += "<td>" + o.precio + "</td>";
                                fila += "<td>" + o.stock + "</td>";
                                fila += "<td>" + o.nombreprov + "</td>";
                                $("#tbodyproduct").append(fila);
                            }
                        });
                    });
                }
                ///VER Y EDITAR PRODUCTOS///
                $("body").on("click", "#prodver", function (e) {
                    e.preventDefault();
                    ocultar();
                    $('#formupdate').each(function () {
                        this.reset();
                    });
                    var datos = $(this).val();
                    var fila = datos.split("|");
                    $("#upidprod").val(fila[0]);
                    $("#upnombreprod").val(fila[1]);
                    $("#upsubcat").val(fila[2]);
                    $("#updescripcionprod").val(fila[3]);
                    $("#upprecioprod").val(fila[4]);
                    $("#upstockprod").val(fila[5]);
                    $("#upselectprov").val(fila[6]);
                    $("#moduloverproducto").show();
                    location.href = "#moduloverproducto";

                });

                $("#btnupprodut1").click(function (e) {
                    e.preventDefault();
                    var idprod = $("#upidprod").val();
                    var nombre = $("#upnombreprod").val();
                    var categoria = document.getElementById("upsubcat").value;
                    var descripcion = $("#updescripcionprod").val();
                    var precio = $("#upprecioprod").val();
                    var stock = $("#upstockprod").val();
                    var rutProv = document.getElementById("upselectprov").value;
                    if (nombre == "" || categoria == 0 || descripcion == "" ||
                            precio == "" || stock == "" || rutProv == 0) {
                        Materialize.toast("Hay campos vacios o no seleccionados", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/upProd',
                            type: 'post',
                            dataType: 'json',
                            data: {"idproducto": idprod, "nombre": nombre, "idcategoria": categoria, "descripcion": descripcion,
                                "precio": precio, "stock": stock, "rutencargado": rutProv}
                        }).success(function (o) {
                            Materialize.toast("Producto Actualizado", 1000);
                            verProductos();
                            $("#addproduct2").show();
                        }).fail(function () {
                            Materialize.toast("Error al actualizar", 1000);
                        });
                    }
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
            });
        </script>

    </body>
</html>

