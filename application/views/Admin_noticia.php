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
            <nav class="nav-extended  grey lighten-5" role="navigation">
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
                        <div class="card light-green lighten-5">
                            <br>
                            <h5 class="center light-green-text darken-4" >Gestion Noticias</h5><br>
                        </div>
                        <div class="divider light-green darken-4"></div>
                        <div class="card-panel">
                            <form id="formnoti" class="scrollspy">
                                <div class="row">
                                    <h5>Agregar una Noticia</h5>
                                    <div class="input-field col s12">

                                        <label for="titulonoti">Titulo de la noticia </label>
                                        <input type="text" id="titulonoti" name="titulo">
                                    </div>
                                    <div class="col s12 m6" id="imgnoti">
                                        <div class="dropify-preview" >
                                            <label for="input-file-now"></label>
                                            <input  type="file" id="file" name="file" class="dropify" data-max-file-size-preview="2M" data-allowed-file-extensions="jpg jpeg"/>
                                        </div>
                                        <br>
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
                        <nav class="row hoverable">
                            <div class="nav-wrapper">
                                <div class="input-field">
                                    <input id="busqueda" type="search" required placeholder="Buscar Noticia">
                                    <label class="label-icon" for="busqueda"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </div>
                        </nav>

                        <div id="gnoti" class="card-panel col s12 ">
                            <table id="tablanoti" class="bordered responsive-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titulo</th>
                                        <th>Fecha</th>

                                        <th>Imagen</th>
                                        <th>Autor</th>
                                        <th>Referencia</th>
                                        <th><a class="btn-floating waves-effect waves-light" href="#formnoti"  ><i class="material-icons">add</i></a></th>
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
                        <div id="modalpublicar" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h5>Publicar Noticia</h5>
                                <form id="formpublicnoti">
                                    <div class="col s12 m6">

                                        <p>Seleccione una posicion para la Noticia:</p><b><span id="notititulo"></span></b>
                                        <input type="text" id="idnoticia" hidden>
                                        <div class="input-field col s12 m6">                                            
                                            <select class="icons" id="notiposicion"> 

                                            </select> 

                                        </div>


                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer">                                      
                                <input type="submit" class="btn btn-primary" id="btnpublicar" value="Publicar Noticia"/>
                            </div>
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

                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Desarrollado por <a class="orange-text text-lighten-3" href="#">Yeison Opazo, Inacap Talca</a>
                </div>
            </div>
        </footer>
        <img height="" width="">

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <script src="<?php echo base_url(); ?>lib/js/materialize.min.js"></script>
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
                $('.materialboxed').materialbox();
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
                verPaginaPosicion();
                getSesion();
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


                $("#btnaddnoti").click(function (e) {
                    e.preventDefault();
                    var form = $("#formnoti")[0];
                    var data = new FormData(form);
                    var titulo = $("#titulonoti").val();
                    var descripcion = $("#descripnoti").val();
                    var fecha = $("#fechanoti").val();
                    var imagen = $("#file").val();
                    var autor = $("#autornoti").val();
                    var referencia = $("#refernoti").val();
                    if (titulo == "" || descripcion == "" || fecha == 0 ||
                            autor == "" || referencia == 0 || imagen == "") {
                        Materialize.toast("Faltan Campos", 1000);
                    } else {
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
                                Materialize.toast("Noticia agregada!!", 1000);
                                $('#formnoti').each(function () {
                                    this.reset();
                                });
                                verNoticias();
                            }, error: function () {
                                Materialize.toast("Error 500", 1000);
                            }

                        });
                    }
                });
                function verNoticias() {
                    var url = "<?php echo site_url() ?>/getNoti";
                    $("#tbodynoti").empty();
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var fila = "<tr><td>" + o.idnoticia + "</td>";
                            fila += "<td>" + o.titulo + "</td>";
                            fila += "<td>" + o.fecha + "</td>";
                            fila += "<td><img  src='data:image/jpeg;base64," + o.imagen + "'  width='100%'></td>";
                            fila += "<td>" + o.autor + "</td>";
                            fila += "<td>" + o.referencia + "</td>";
                            fila += "<td><button id='btnpubli' class='btn-floating amber modal-trigger' value='" + o.idnoticia + '|' + o.titulo + "' href='#modalpublicar'><i class='material-icons'>cloud_upload</i></button></td><tr>";
                            $("#tbodynoti").append(fila);
                        });
                    });
                }

                $("#busqueda").keyup(function (e) {
                    e.preventDefault();
                    var consulta = $("#busqueda").val();
                    if (consulta == "") {
                        $("#tbodynoti").empty();
                        verNoticias();
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/buscarNoti',
                            type: "POST",
                            dataType: 'json',
                            data: {"titulo": consulta}
                        }).success(function (obj) {
                            $("#tbodynoti").empty();
                            $.each(obj, function (i, o) {
                                var fila = "<tr><td>" + o.idnoticia + "</td>";
                                fila += "<td>" + o.titulo + "</td>";
                                fila += "<td>" + o.fecha + "</td>";
                                fila += "<td><img  src='data:image/jpeg;base64," + o.imagen + "'  width='100%'></td>";
                                fila += "<td>" + o.autor + "</td>";
                                fila += "<td>" + o.referencia + "</td>";
                                fila += "<td><button id='btnpubli' class='btn-floating amber modal-trigger' value='" + o.idnoticia + '|' + o.titulo + "' href='#modalpublicar'><i class='material-icons'>cloud_upload</i></button></td><tr>";
                                $("#tbodynoti").append(fila);
                            });
                        });
                    }
                });


                $("body").on("click", "#btnpubli", function (e) {
                    e.preventDefault();
                    $("#notititulo").empty();
                    var datos = $(this).val();
                    var fila = datos.split("|");
                    $("#idnoticia").val(fila[0]);
                    $("#notititulo").append(fila[1]);
                });
                $("#btnpublicar").click(function (e) {
                    e.preventDefault();
                    var pag = document.getElementById('notiposicion').value;
                    var idnoti = $("#idnoticia").val();
                    if (pag == 0) {
                        Materialize.toast("Debe seleccionar una posicion", 1000);
                    } else {
                        $.ajax({
                            url: '<?php echo site_url() ?>/publi',
                            type: 'post',
                            dataType: 'json',
                            data: {"idpagina": pag, "idnoticia": idnoti}
                        }).success(function (o) {
                            Materialize.toast(o.msg, 1000);
                            $('#modalpublicar').modal('close');
                        }).fail(function () {
                            Materialize.toast("Error al publicar", 1000);
                        });

                    }
                });
                function verPaginaPosicion() {
                    var url = "<?php echo site_url() ?>/getPag";
                    $("#notiposicion").empty();
                    $("#notiposicion").append("<option value='0' selected disabled>Elegir Posicion de noticia</option>");
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            var x = "<option value='" + o.idpagina + "'>" + o.nombre + "</option>";
                            $("#notiposicion").append(x);
                            $('select').material_select();
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
        <script>

            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"],
                    datasets: [{
                            label: "Pedidos",
                            data: [0, 1, 0, 0, 0, 0, 0],
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

