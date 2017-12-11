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
            <nav class="nav-extended  grey lighten-5" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" href="<?PHP echo site_url() ?>/welcome" class="brand-logo center-on-small-only"><img width="340" src="<?php echo base_url(); ?>/lib/img/logo3.png"></a>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
                        <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
                        <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>

                    </ul>
                </div>

                <div class="nav-content container">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a class="waves-effect waves-light purple-text" href="#home">Resumen</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminController">Gestion Productos</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/AdminServ">Gestion Servicios</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text" target="_self" href="<?PHP echo site_url() ?>/VentasController">Gestion Ventas</a></li>
                        <li class="tab"><a class="waves-effect waves-light purple-text active" href="#noticias">Noticias</a></li>
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

                        <div class="card-panel">
                            <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                    <div id="gproductos" class="col s12">
                    </div>
                    <div id="gservicios" class="col s12">
                    </div>
                    <div id="gventas" class="col s12">
                    </div>
                    <div id="noticias" class="col s12">
                        <div class="card light-green lighten-5">
                            <h4 class="center light-green-text darken-4" >Gestion Noticias</h4>
                        </div>
                        <div class="divider light-green darken-4"></div>
                        <div class="card-panel">
                            <form id="formnoti">
                                <div class="row">
                                    <h5>Agregar una Noticia</h5>
                                    <div class="input-field col s12">

                                        <label for="titulonoti">Titulo de la noticia </label>
                                        <input type="text" id="titulonoti" name="titulo">
                                    </div>
                                    <div class="col s12 m6" id="imgnoti">
                                        <div class="dropify-preview" >
                                            <label for="input-file-now"></label>
                                            <input  type="file" id="input-file-now" name="file" class="dropify" />
                                        </div>
                                        <br>
                                        <!--                                        <div id="otraimg" class="dropify-preview" >
                                                                                    <label for="input-file-now"></label>
                                                                                    <input  type="file" id="input-file-now" class="dropify" />
                                                                                </div>
                                                                                <button type="submit" id="addimg" class="btn-floating waves-effect waves-light green"><i class="material-icons">add</i></button>-->



                                    </div>
                                    <div class="input-field col s12 m6">
                                        <label for="descripnoti">Descripcion </label>
                                        <textarea class="materialize-textarea" id="descripnoti" name="descripcion" placeholder="
                                                  Texto descriptivo de la noticia, Texto descriptivo de la noticia, Texto descriptivo de la noticia, Texto descriptivo de la noticiaTexto descriptivo de la noticia"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col s12 m2">
                                        <div class="input-field">
                                            <label for="fecha">Fecha:</label>
                                            <input type="datetime-local" id="fechanoti" name="fecha" class="datepicker">
                                        </div>
                                    </div>
                                    <div class=" col s12 m5">
                                        <div class="input-field">
                                            <label for="autornoti">Autor:</label>
                                            <input type="text" id="autornoti" name="autor">
                                        </div>
                                    </div>
                                    <div class=" col s12 m5">
                                        <div class="input-field">
                                            <label for="refernoti">Referencia:</label>
                                            <input type="text" id="refernoti" name="referencia">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <input type="submit" class="btn btn-primary right" id="btnaddnoti" value="Agregar Noticia"/>
                                </div>
                            </form>
                        </div>  
                        <div id="gnoti" class="card-panel col s12 ">
                            <table id="tablanoti" class="bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Fecha</th>
                                        <th>Imagen</th>
                                        <th>Autor</th>
                                        <th>Referencia</th>
                                        <th><button class="btn-floating waves-effect waves-light" ><i class="material-icons">add</i></button></th>
                                    </tr>
                                </thead>
                                <tbody id="tbodynoti">


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
        <!-- tabla editable--->
    <!--<script src="<?php echo base_url(); ?>lib/js/mindmup-editabletable.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/numeric-input-example.js"></script>
        Subir fotos chevere-->
        <script src="<?php echo base_url(); ?>lib/js/dropify.min.js"></script> 
        <!--        JS para graficos-->
        <script src="<?php echo base_url(); ?>lib/js/Chart.js"></script>
        <script src="<?php echo base_url(); ?>lib/js/Chart.min.js"></script>
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
                    format: "yyyy-mm-dd",
                    closeOnSelect: false // Close upon selecting a date,

                });
                ocultar();
                verNoticias();

                $("#volver").click(function () {
                    ocultar();
                });
                $("#addimg").click(function (e) {
                    e.preventDefault();
                    $("#otraimg").show();
                    $("#addimg").hide();
                });
                $('texarea').trigger('autoresize');
                //AGREGAR NOTICIA///
//                $("#btnaddnoti").click(function (e) {
//                    e.preventDefault();
//                    var titulo = $("#titulonoti").val();
//                    var descripcion = $("#descripnoti").val();
//                    var fecha = $("#fechanoti").val();
//                    var imagen = "";
//                    var autor = $("#autornoti").val();
//                    var referencia = $("#refernoti").val();
//                    if (titulo == "" || descripcion == "" || fecha == 0 ||
//                             autor == "" || referencia == 0) {
//                        Materialize.toast("Faltan Campos", 1000);
//                    } else {
//                        $.ajax({
//                            url: '/addNoti',
//                            type: 'post',
//                            dataType: 'json',
//                            data: {"titulo": titulo, "descripcion": descripcion, "fecha": fecha,
//                                "imagen": imagen, "autor": autor, "referencia": referencia}
//                        }).success(function (o) {
//                            Materialize.toast("Noticia agregada!!", 1000);
//                            $('#formnoti').each(function () {
//                                this.reset();
//                            });
//                           
//                        }).fail(function () {
//                            Materialize.toast("Error al agregar noticia", 1000);
//                        });
//                    }
//                });


                $("#btnaddnoti").click(function (e) {
                    e.preventDefault();
                    var form = $("#formnoti")[0];
                    var data = new FormData(form);
                    $.ajax({
                        url: '<?php echo site_url() ?>/addNoti',
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
                            verNoticias();
                        }, error: function () {
                            Materialize.toast(o.msg, 1000);
                        }

                    });
                });
                function verNoticias() {
                    var url = "<?php echo site_url() ?>/getNoti";
                    $("#tbodynoti").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var img = btoa(o.imagen);
                            var fila = "<tr><td>" + o.idnoticia + "</td>";
                            fila += "<td>" + o.descripcion + "</td>";
                            fila += "<td>" + o.descripcion + "</td>";
                            fila += "<td>" + o.fecha + "</td>";
                            fila += "<td><img src='data:image/jpeg;base64," + img + "' alt=''></td>";
                            fila += "<td>" + o.autor + "</td>";
                            fila += "<td>" + o.referencia + "</td>";
                            $("#tbodynoti").append(fila);
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
        <script>

            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"],
                    datasets: [{
                            label: "Pedidos",
                            data: [12, 19, 3, 5, 2, 3, 0],

                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>

    </body>
</html>

