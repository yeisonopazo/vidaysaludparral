<?php

defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//PAGINA
$route["iniciar"] = "welcome/iniciar";
$route["user"] = "welcome/user";
$route["logout"] = "welcome/logout";
$route["getAllProd"] = "welcome/getProductos";
$route["getPagNoti"] = "Welcome/getPagNoti";
$route["buscarPoS"] = "Welcome/buscarProductosoServicios";
//CLIENTE
$route["addClient"] = "ClientController/insertarCliente";
$route["getSesion"] = "ClientController/getSesion";
$route["getUser"] = "ClientController/getUser";
$route["updateClient"] = "ClientController/actualizarCliente";
$route["getVentas"] = "ClientController/getVentas";
$route["getDVenta"] = "ClientController/getDetalleVentas";

$route["getClient"] = "AdminOtros/getClientes";

//ADMIN
$route["getAdmin"] = "AdminController/getSesionAdmin";
//CATEGORIAS
$route["addCat"] = "AdminController/insertarCategoria";
$route["getCat"] = "AdminController/getCategorias";
$route["addSubCat"] = "AdminController/insertarSubCateg";
$route["getSubCat"] = "AdminController/getSubCateg";

//PRODUCTOS
$route["addProv"] = "AdminController/insertarProveedor";
$route["getProv"] = "AdminController/getProveedores";
$route["addProd"] = "AdminController/insertarProducto";
$route["getProd"] = "AdminController/getProductos";
$route["upProd"] = "AdminController/actualizarProducto";
$route["buscarP"] = "AdminController/buscarProducto";

//SERVICIOS
$route["addServ"] = "AdminServ/insertarServicio";
$route["upServ"] = "AdminServ/actualizarServicio";
$route["upImg"] = "AdminServ/actualizarImagen";

//NOTICIA
$route["addNoti"] = "AdminNotice/insertarNoticia";
$route["getNoti"] = "AdminNotice/getNoticias";
$route["getPag"] = "AdminNotice/getPagina";
$route["publi"] = "AdminNotice/publicarNoti";
$route["buscarNoti"] = "AdminNotice/buscarNoticia";

//VENTAS
$route["addVent"] = "VentasController/insertarVenta";
$route["getVent"] = "VentasController/getVentas";
$route["addDetailV"] = "VentasController/insertarDetalleVenta";
$route["getDetailV"] = "VentasController/getDetalleVentas";
$route["addCarro"] = "VentasController/addCarro";
$route["getCarro"] = "VentasController/getCarro";
$route["clearCarro"] = "VentasController/limpiar";
$route["clearCarro2"] = "VentasController/limpiar2";
$route["getImg"] = "VentasController/getImagenes";
$route["getCarroP"] = "VentasController/getCarroProd";
$route["clearProC"] = "VentasController/eliminarProducto";
$route["cambEV"] = "VentasController/cambiarEstadoV";

