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

        <nav class="teal nav-extended " role="navigation">
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
                    <li class="tab"><a class="waves-effect waves-light" target="_self" href="<?PHP echo site_url() ?>/AdminServ">Gestion Servicios</a></li>
                    <li class="tab"><a class="waves-effect waves-light" href="#gventas">Gestion Ventas</a></li>
                    <li class="tab"><a class="waves-effect waves-light  active" href="#noticias">Noticias</a></li>
                    <li class="tab"><a class="waves-effect waves-light" target="_self" href="<?PHP echo site_url() ?>/AdminOtros"><i class="material-icons left">build</i></a></li>
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

                    </div>
                    <div id="gservicios" class="col s12">
                    </div>
                    <div id="gventas" class="col s12">
                        <h3>Gestion de ventas</h3>

                    </div>
                    <div id="noticias" class="col s12">
                        <div class="card-panel teal darken-3 text-primary">
                            <h3>Noticias <i class="material-icons medium left">public</i></h3>
                        </div>
                        <div class="card-panel">
                            <form></form>
                            <div class="row">
                                <h5>Agregar una Noticia</h5>
                                <div class="input-field col s12">

                                    <label for="titulonoti">Titulo de la noticia </label>
                                    <input type="text" id="titulonoti">
                                </div>
                                <div class="col s12 m6" id="imgnoti">
                                    <div class="dropify-preview" >
                                        <label for="input-file-now"></label>
                                        <input  type="file" id="input-file-now" class="dropify" />
                                    </div>
                                    <br>
                                    <div id="otraimg" class="dropify-preview" >
                                        <label for="input-file-now"></label>
                                        <input  type="file" id="input-file-now" class="dropify" />
                                    </div>
                                    <button type="submit" id="addimg" class="btn-floating waves-effect waves-light green"><i class="material-icons">add</i></button>
                                </div>
                                <div class="input-field col s12 m6">
                                    <label for="descripnoti">Descripcion </label>
                                    <textarea class="materialize-textarea" id="descripnoti" placeholder="
                                              Texto descriptivo de la noticia, Texto descriptivo de la noticia, Texto descriptivo de la noticia, Texto descriptivo de la noticiaTexto descriptivo de la noticia"></textarea>
                                </div>


                            </div>
                            <div class="row">
                                <div class=" col s12 m2">
                                    <div class="input-field">
                                        <label for="fecha">Fecha:</label>
                                        <input type="text" id="fechaserv" class="datepicker">
                                    </div>
                                </div>
                                <div class=" col s12 m5">
                                    <div class="input-field">
                                        <label for="autornoti">Autor:</label>
                                        <input type="text" id="autornoti">
                                    </div>
                                </div>
                                <div class=" col s12 m5">
                                    <div class="input-field">
                                        <label for="refernoti">Referencia:</label>
                                        <input type="text" id="refernoti" >
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                 <input type="submit" class="btn btn-primary right" id="btnaddnoti" value="Agregar Noticia"/>
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
        <script src="<?php echo base_url(); ?>js/init.js"></script>
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
                        'default': 'Arrastre y suelte una Imagen aquí o haga clic',
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
                         

                $("#volver").click(function () {
                    ocultar();
                });
                
                $("#addimg").click(function (e) {
                    e.preventDefault();
                    
                   $("#otraimg").show();
                    $("#addimg").hide();
                });


                //AGREGAR PRODUCTO///
                $("#btnaddserv1").click(function (e) {
                    e.preventDefault();
                    var nombre = $("#nombreserv").val();
                    var categoria = document.getElementById("subcatserv").value;
                    var descripcion = $("#drescripcionserv").val();
                    var precio = $("#precioserv").val();
                    var stock = $("#stockserv").val();
                    var fecha = $("#fechaserv").val();
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
                        }).success(function (o) {
                            Materialize.toast("Registro OK", 1000);
                            $('#formserv').each(function () {
                                this.reset();
                            });
                            verServicios();
                            $("#addproduct2").show();
                        }).fail(function () {
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
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
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
             


                function ocultar() {
                    $("#moduloaddprod").hide();
                    $("#modulocat").hide();
                    $("#addproduct2").hide();
                    $("#moduloverproducto").hide();
                    $("#moduloaddserv").hide();
                    $("#otraimg").hide();
                }
            });
        </script>
    </body>
</html>

