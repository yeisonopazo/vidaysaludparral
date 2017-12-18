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
            background-image: url("<?php echo base_url(); ?>/lib/img/flores.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
    <body>
        <nav class="nav-extended grey lighten-5" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="<?PHP echo site_url() ?>/welcome" class="brand-logo center-on-small-only"><img width="340" src="<?php echo base_url(); ?>/lib/img/logo3.png"></a>                
                <ul class="right hide-on-med-and-down">                    
                    <li><a id="saludo1" class="purple-text" href=""></a></li>
                    <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
                    <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
                    <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>

                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a id="saludo2" class="purple-text" href=""></a></li>
                    <li><a class="waves-effect waves-light purple-text" href="<?PHP echo site_url() ?>/logout">Salir</a></li>
                    <li><a href="#"><i class="material-icons purple-text">shopping_cart</i> </a></li>
                    <li><a href="#"><i class="material-icons purple-text">notifications</i> </a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse purple-text"><i class="material-icons">menu</i></a>
            </div>

            <div class="nav-content container">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="waves-effect waves-light purple-text active" href="#micanasta">Mi Canasta</a></li>
                    <li class="tab"><a class="waves-effect waves-light purple-text" href="#misservicios">Mis Pedidos</a></li>
                    <li class="tab"><a class="waves-effect waves-light purple-text" href="#misdatos">Mis Datos</a></li>
                </ul>
            </div>

        </nav>
        <main>
            <div class="container">

                <div id="micanasta" class="col s12">
                    <div class="card light-green lighten-5"  >
                        <br>
                        <h5 class="center light-green-text darken-4">Mi Canasta</h5>
                        <br>
                    </div>
                    <div class="divider light-green darken-4"></div>
                    <div class="card">
                        <div class="card-panel">
                            <div class="row">
                                <button id="getfecha" class="btn">fecha</button>
                                <div class="input-field col s3" id="divrutcompra">                                  
                                    <label class="active" for="rut">Pedido a RUT: </label>                           
                                    <input type="text" value=" " name="rut" id="rutcompra" disabled>
                                </div>

                                <table id="tablacarro" class="bordered responsive-table" >
                                    <thead>
                                        <tr>
                                            <th>ID Producto</th>
                                            <th>Nombre</th>                                        
                                            <th>Cantidad</th>
                                            <th>Precio Unidad</th>
                                            <th>Total</th>                                  
                                        </tr>
                                    </thead>
                                    <tbody id="tbodycarro">

                                    </tbody>
                                </table>
                                <p class="center" id="estadocarro"></p>
                                <div id="botones">   
                                    <div class="right-align amber row">
                                        <div class="col s7"></div>
                                        <div class="col s3"> <span class=""><b>TOTAL A PAGAR:</b></span></div>
                                        <div class="col s2"><b> <input type="text" class="black-text" id="totalt" disabled></b></div>
                                    </div>
                                    <div class="row"><div class="divider black"></div></div> 
                                    <div class="input-field col s12">
                                        <label for="observacion" class="active">Observacion:</label>
                                        <textarea class="materialize-textarea" required  id="observacion" placeholder="Coloca la direccion donde sera enviado el producto" ></textarea>
                                    </div>
                                    <div class="right">
                                        <a id="btnclearcarro" href="" class="red-text"><i class="material-icons left red-text"> remove_shopping_cart</i>Limpiar canasta</a>
                                        <button type="submit" name="btcomprar" id="btcomprar" class="waves-effect btn"><i class="material-icons left"> system_update_alt</i>Solicitar Pedido</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="misservicios" class="col s12">
                    <div class="card light-green lighten-5">
                        <br>
                        <h5 class="center light-green-text darken-4">Mis Pedidos</h5>
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
                                <div class="right-align blue lighten-5">
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
                        <ul class="collection" id="list-pedidos">                            
                        </ul>

                    </div>
                </div>
                <!--            -------------MOSTRAR Y ACTUALIZAR DATOS CLIENTE-------->
                <div id="misdatos" class="col s12">
                    <div class="card light-green lighten-5">
                        <br>
                        <h5 class="center light-green-text darken-4" >Mis datos</h5>
                        <br>
                    </div>
                    <div class="divider light-green darken-4"></div>

                    <div class="card-panel"> 
                        <div class="row">
                            <form >
                                <div class="col s12 m5">
                                    <div class="input-field">
                                        <i class="material-icons prefix">account_circle</i>
                                        <label class="active" for="rut">RUT: </label>                           
                                        <input type="text" value=" " name="rut" id="rutusuario" disabled>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">face</i>
                                        <label for="nombre">Nombre: </label>
                                        <input type="text" value=" " name="nombre" id="nombre"/>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">face</i>
                                        <label for="apellido">Apellido: </label>
                                        <input type="text" value=" " name="apellido"  id="apellido"/>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">location_on</i>
                                        <label for="direccion">Direccion: </label>
                                        <input type="text" value=" " name="direccion" id="direccion"/>
                                    </div>
                                </div>
                                <div class="col s12 m5">
                                    <div class="input-field">
                                        <i class="material-icons prefix">call</i>
                                        <label for="telefono">Telefono: </label>
                                        <input type="number" value="0" name="telefono" id="telefono"/>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">mail</i>
                                        <label for="correo">Correo: </label>
                                        <input type="text" value=" " name="correo" id="correo"/>
                                    </div>

                                    <div class="input-field">
                                        <i class="material-icons prefix">vpn_key</i>
                                        <label for="contraseña">Clave: </label>
                                        <input type="password" value=" " name="clave" id="contraseña"/>
                                    </div>
                                    <div class="input-field">
                                        <i class="material-icons prefix">vpn_key</i>
                                        <label for="confirContraseña">Confirmar Clave: </label>
                                        <input type="password" value=" " name="confirContraseña" id="confirContraseña"/>
                                    </div>
                                    <div class="right">                                    
                                        <button type="submit" name="bt" id="btupdate" class="waves-effect btn"><i class="material-icons left"> system_update_alt</i>Actualizar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </main>
        <footer class="page-footer amber">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12 scrollspy" id="about">
                        <h5 class="white-text">Acerca de Nosotros</h5>
                        <p class="purple-text">Nuestro objetivo, es acercar a un sin número de terapias Complementarias, y a los mejores terapeutas, para así aportar un granito de arena en el logro de un Equilibrio en tu salud y la de todos aquellos que trabajamos para ello.</p>

                        <p class="purple-text"><i class="material-icons">call</i> 73 - 2 46 21 28 / +569 - 9265 9369</p>

                        <p class="purple-text"><i class="material-icons">mail</i> vidaysalud@centrodemedicinacomplementaria.cl</p>

                        <p class="purple-text"> Lunes a Viernes 9:00 - 13:00, 15:00 - 19:00<br>
                            Sabados 9:00 - 13:00
                        </p>
                        <div>
                            <a href="https://www.facebook.com/vidaysaludparral/" class="btn-floating facebook  center-align">
                                f
                            </a>

                        </div>

                    </div>
                    <div class="col l6 s12">
                        <div id="google-map-tab" class="col s12 center-align">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.4152998642435!2d-71.81904501372995!3d-36.140850900596774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3ec9bb85f0be6b2!2sVida+y+Salud%2C+Centro+de+Medicina+Complementaria%2C+Parral!5e0!3m2!1ses!2scl!4v1511405544855" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen class="responsive-img z-depth-5"></iframe>
                        </div>
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
        <script type="text/javascript">
            $(function () {
                //                Inicio de Materialize
                $('select').material_select();
                $('.modal').modal();
                $('ul.tabs').tabs();
                $('.button-collapse').sideNav();
                $('.carousel.carousel-slider').carousel({fullWidth: true});
                $('.scrollspy').scrollSpy();
                //                Fin de inicio materialize
                $("#botones").hide();
                $("#divrutcompra").hide();
                $("#verdetalle").hide();
                getSesion();
                carro();
                $("#btncerrardetalle").click(function (e) {
                    e.preventDefault();
                    $("#verdetalle").hide();
                });
                function getSesion() {
                    var url = "<?php echo site_url() ?>/getSesion";
                    $.getJSON(url, function (result) {
                        $.each(result, function (i, o) {
                            $("#rutusuario").val(o.rutusuario);
                            $("#rutcompra").val(o.rutusuario);
                            getUser();
                            ventas();
                        });
                    });
                }

                $("#getfecha").click(function (e) {
                    e.preventDefault();
                    var f = new Date();
                    var fecha = f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate() + " " + f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
                    alert(fecha);
                });
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
                            $("#saludo1").append("Bienvenido " + u.nombre + " " + u.apellido + "!");
                            $("#saludo2").append("Bienvenido " + u.nombre + " " + u.apellido + "!");
                            $("#nombre").val(u.nombre);
                            $("#apellido").val(u.apellido);
                            $("#direccion").val(u.direccion);
                            $("#telefono").val(u.telefono);
                            $("#correo").val(u.correo);
                            $("#contraseña").val("");
                            $("#confirContraseña").val("");
                        });
                    });
                }
                //                ----------ACTUALIZAR CUENTA--------
                $("#btupdate").click(function (e) {
                    e.preventDefault();
                    var rut = $("#rutusuario").val();
                    var nombre = $("#nombre").val();
                    var apellido = $("#apellido").val();
                    var direccion = $("#direccion").val();
                    var telefono = $("#telefono").val();
                    var correo = $("#correo").val();
                    var contraseña = $("#contraseña").val();
                    var confirContraseña = $("#confirContraseña").val();
                    if (rut == "" || nombre == "" || apellido == "" || direccion == "" || telefono == "" || correo == "") {
                        Materialize.toast("faltan campos", "2000");
                    } else if (confirContraseña == "" || contraseña == "") {
                        Materialize.toast("Ingrese su contraseña para actualizar datos o una nueva", "2000");
                    } else if (contraseña != confirContraseña) {
                        Materialize.toast("Contraseña no coincide", "2000");
                    } else {
                        $.ajax({
                            url: "<?php echo site_url() ?>/updateClient",
                            type: "post",
                            dataType: "json",
                            data: {"rutusuario": rut, "nombre": nombre, "apellido": apellido, "direccion": direccion,
                                "telefono": telefono, "correo": correo, "contraseña": contraseña
                            }
                        }).success(function (obj) {
                            getUser();
                            Materialize.toast("Cuenta Actualizada", "1000");
                        }).fail(function () {
                            Materialize.toast("error");
                        });
                    }
                });
                $("#btnclearcarro").click(function (e) {
                    e.preventDefault();
                    var url = "<?php echo site_url() ?>/clearCarro2";
                    $.getJSON(url, function (result) {
                        Materialize.toast("Canasta Limpia", "1000");
                        carro();
                    });
                });
                $("#btcomprar").click(function (e) {
                    e.preventDefault();
                    var rut = $("#rutcompra").val();
                    var descrip = $("#observacion").val();
                    var total = $("#totalt").val();
                    var f = new Date();
                    var fecha = f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate() + " " + f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
                    if (descrip == "") {
                        Materialize.toast("Completa el campo de observacion", 2000);
                        document.getElementById("observacion").focus();
                    } else {
                        $.ajax({
                            url: "<?php echo site_url() ?>/addVent",
                            type: "post",
                            dataType: "json",
                            data: {"rutusuario": rut, "fechaventa": fecha, "subtotal": total, "total": total, "observacion": descrip,
                                "estado": "pendiente"
                            }
                        }).success(function (obj) {
                            getUser();
                            ventas();
                            Materialize.toast("Pedido Agregado, completa el pago y estaremos en contacto contigo", "3000");
                            $('ul.tabs').tabs('select_tab', 'misservicios');
                        }).fail(function () {
                            Materialize.toast("error");
                        });
                    }
                });
                function carro() {
                    var url = "<?php echo site_url() ?>/getCarro";
                    var totalventa = 0;
                    $.getJSON(url, function (result) {
                        if (result.length <= 0) {
                            $("#estadocarro").empty();
                            $("#tbodycarro").empty();
                            $("#botones").hide();
                            $("#divrutcompra").hide();
                            $("#estadocarro").append("No tiene Productos o Servicios en la canasta");
                        } else {
                            $("#tbodycarro").empty();
                            $.each(result, function (i, o) {
                                totalventa = parseInt(o.subtotal) + parseInt(totalventa);
                                $("#estadocarro").empty();
                                var fila = "<tr><td>" + o.id + "</td>";
                                fila += "<td>" + o.name + "</td>";
                                fila += "<td><button id='nomas' value='" + o.id + "' class='btn-floating grey lighten-4 grey-text'><i class='material-icons grey-text'>remove_shopping_cart</i></button>";
                                fila += "<b>" + o.qty + "</b>";
                                fila += "<button id='addmas' value='" + o.id + "' class='btn-floating small'><i class='material-icons'>add_shopping_cart</i></button></td>";
                                fila += "<td>" + o.price + "</td>";
                                fila += "<td>" + o.subtotal + "</td></tr>";
                                $("#tbodycarro").append(fila);
                                $("#botones").show();
                            });
                            $("#divrutcompra").show();
                            $("#totalt").val(totalventa);
                        }
                    });
                }
                $("body").on("click", "#nomas", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split("|");
                    $.ajax({
                        url: '<?php echo site_url() ?>/clearProC',
                        type: 'post',
                        dataType: 'json',
                        data: {"idproducto": fila[0]}
                    }).success(function (o) {
                        Materialize.toast("Elimino un Item", 1000);
                        carro();
                    }).fail(function (o) {
                        Materialize.toast(o.msg, 1000);
                    });
                });
                $("body").on("click", "#addmas", function (e) {
                    e.preventDefault();
                    var datos = $(this).val();
                    var fila = datos.split("|");
                    $.ajax({
                        url: '<?php echo site_url() ?>/addCarro',
                        type: 'post',
                        dataType: 'json',
                        data: {"idproducto": fila[0]}
                    }).success(function (o) {
                        if (o.msg == "ok") {
                            Materialize.toast("Se agrego un item", 1000);
                            carro();
                        } else {
                            Materialize.toast("Sin Stock", 2000);
                            carro();
                        }
                    }).fail(function (o) {
                        Materialize.toast(o.msg, 1000);
                    });
                });

           
                function ventas() {
                    $("#list-pedidos").empty();
                    var rut = $("#rutusuario").val();
                    $.ajax({
                        url: '<?php echo site_url() ?>/getVentas',
                        type: "POST",
                        dataType: 'json',
                        data: {"rutusuario": rut}
                    }).success(function (obj) {
                        $.each(obj, function (i, o) {
                            var fila = "<li class='collection-item avatar hovered'>";
                            fila += "<button id='subircomprobante' value='" + o.idventa + "' class='circle btn-floating'><i class='material-icons'>image</i></button>";
                            fila += "<span class='title'>ID Pedido: " + o.idventa + "</span>";
                            fila += "<p>Fecha de la Venta: " + o.fechaventa + "<br>";
                            fila += "<a href='#'>Total de la venta: $" + o.total + "</a></p>";
                            fila += "<button class='btn-floating secondary-content' id='verdetalleventa' value='" + o.idventa + '|' + o.observacion + "'><i class='material-icons'>search</i></button>";
                            fila += "<span class='right'><b>Estado: " + o.estado + "</b></span></li>";
                            $("#list-pedidos").append(fila);
                        });
                    });
                }

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
            });
        </script>

    </body>
</html>
