<?php

class AdminModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function insertarProducto($nombre, $idsubcategoria, $descripcion, $precio, $stock, $fecha, $rutencargado) {
        $datos = array("nombre" => $nombre,
            "idsubcategoria" => $idsubcategoria,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "stock" => $stock,
            "fecha" => $fecha,
            "rutencargado" => $rutencargado);
        $this->db->insert("producto", $datos);
        return $this->db->insert_id();
    }

    function actualizarProducto($idproducto, $nombre, $idcategoria, $descripcion, $precio, $stock, $rutencargado) {
        $this->db->where("idproducto", $idproducto);
        $datos = array("nombre" => $nombre,
            "idsubcategoria" => $idcategoria,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "stock" => $stock,
            "rutencargado" => $rutencargado);
        $this->db->update("producto", $datos);
    }

    function actualizarServicio($idproducto, $nombre, $idcategoria, $descripcion, $precio, $stock, $fecha, $rutencargado) {
        $this->db->where("idproducto", $idproducto);
        $datos = array("nombre" => $nombre,
            "idsubcategoria" => $idcategoria,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "stock" => $stock,
            "fecha" => $fecha,
            "rutencargado" => $rutencargado);
        $this->db->update("producto", $datos);
    }

    function actualizarImagen($idprodserv, $imagen) {
        $this->db->where("idprodserv", $idprodserv);
        $datos = array("imagen" => $imagen);
        $this->db->update("imagen", $datos);
    }

    function getProductos() {
        $this->db->select("p.idproducto, p.nombre,"
                . "sub.idsubcategoria, sub.nombre as nombresubcat,"
                . "c.idcategoria, c.nombre nombcateg,"
                . " p.descripcion, p.precio, p.stock, p.fecha,"
                . " prov.rutencargado, prov.nombre as nombreprov,"
                . "i.imagen");
        $this->db->from("producto p");
        $this->db->join("subcategoria sub", "sub.idsubcategoria=p.idsubcategoria");
        $this->db->join("categoria c", "sub.idcategoria=c.idcategoria");
        $this->db->join("encargado prov", "p.rutencargado=prov.rutencargado");
        $this->db->join("imagen i", "p.idproducto=i.idprodserv");
        return $this->db->get()->result();
    }

    function buscarProducto($nombre) {

        $this->db->select("p.idproducto, p.nombre,"
                . "sub.idsubcategoria, sub.nombre as nombresubcat,"
                . "c.idcategoria, c.nombre nombcateg,"
                . " p.descripcion, p.precio, p.stock, p.fecha,"
                . " prov.rutencargado, prov.nombre as nombreprov,"
                . "i.imagen");
        $this->db->from("producto p");
        $this->db->join("subcategoria sub", "sub.idsubcategoria=p.idsubcategoria");
        $this->db->join("categoria c", "sub.idcategoria=c.idcategoria");
        $this->db->join("encargado prov", "p.rutencargado=prov.rutencargado");
        $this->db->join("imagen i", "p.idproducto=i.idprodserv");
        $this->db->like("p.nombre", $nombre);
        return $this->db->get()->result();
    }

    function insertarProveedor($rutproveedor, $nombre, $telefono, $direccion, $correo, $idperfil) {
        $datos = array("rutencargado" => $rutproveedor,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "direccion" => $direccion,
            "correo" => $correo,
            "idperfil" => $idperfil);
        $this->db->insert("encargado", $datos);
    }

    function getProveedores() {
        return $this->db->get("encargado")->result();
    }

    function insertarCategoria($nombre) {
        $datos = array("nombre" => $nombre);
        $this->db->insert("categoria", $datos);
    }

    function getCategorias() {
        return $this->db->get("categoria")->result();
    }

    function insertSubCateg($nombre, $idcategoria) {
        $datos = array("nombre" => $nombre,
            "idcategoria" => $idcategoria);
        $this->db->insert("subcategoria", $datos);
    }

    function getSubCateg() {
        $this->db->Select("c.idcategoria, c.nombre, sc.idsubcategoria, sc.nombre as subcategoria");
        $this->db->from("subcategoria sc");
        $this->db->join("categoria c", "c.idcategoria=sc.idcategoria");
        return $this->db->get()->result();
    }

    function insertarNoticia($titulo, $descripcion, $fecha, $imagen, $autor, $refencia) {
        $datos = array("titulo" => $titulo,
            "descripcion" => $descripcion,
            "fecha" => $fecha,
            "imagen" => $imagen,
            "autor" => $autor,
            "referencia" => $refencia);

        $this->db->insert("noticia", $datos);
    }

    function getNoticias() {
        return $this->db->get("noticia")->result();
    }
    function buscarNoticia($titulo){        
         $this->db->like("titulo", $titulo);
         return $this->db->get("noticia")->result();
    }

    function publicarNoti($idpagina, $idnoticia) {
        $this->db->where("idpagina", $idpagina);
        $datos = array("idnoticia" => $idnoticia
        );
        $this->db->update("pagina", $datos);
    }

    function getPagina() {
        return $this->db->get("pagina")->result();
    }

    function getpagNoti() {
        $this->db->Select("p.idpagina, p.nombre, n.idnoticia, n.titulo, n.descripcion, n.fecha, n.imagen, n.autor, n.referencia");
        $this->db->from("pagina p");
        $this->db->join("noticia n", "n.idnoticia=p.idnoticia");
        return $this->db->get()->result();
    }

    //////////////////////////VENTAS//////////////////////////////////////////
    function insertarDetalleVenta($idventa, $idproducto, $cantidad, $precio, $total) {
        $datos = array("idventa" => $idventa,
            "idproducto" => $idproducto,
            "cantidad" => $cantidad,
            "precio" => $precio,
            "total" => $total);
        $this->db->insert("detalleventa", $datos);
    }

    function getDetalleVentas($idventa) {
        $this->db->where("dv.idventa", $idventa);
        $this->db->Select("p.idproducto, p.nombre");
        $this->db->from("detalleventa dv");
        $this->db->join("producto p", "p.idproducto=dv.idproducto");
        return $this->db->get()->result();
    }

    function insertarVenta($rutusuario, $fechaventa, $subtotal, $total, $comprobante, $observacion, $estado) {
        $datos = array("rutusuario" => $rutusuario,
            "fechaventa" => $fechaventa,
            "subtotal" => $subtotal,
            "total" => $total,
            "comprobante" => $comprobante,
            "observacion" => $observacion,
            "estado" => $estado);
        $this->db->insert("venta", $datos);
        return $this->db->insert_id();
    }

    function getVentas() {
        return $this->db->get("venta")->result();
    }

    function cambiarEstadoV($idventa, $estado) {
        $this->db->where("idventa", $idventa);
        $datos = array("estado" => $estado
        );
        $this->db->update("venta", $datos);
    }

///////IMAGENES
    function getImagenes($idprodserv) {
        $this->db->where("idprodserv", $idprodserv);
        return $this->db->get("imagen")->result();
    }

    function insertarImagen($nombre, $imagen, $idprodserv) {
        $datos = array("nombre" => $nombre,
            "imagen" => $imagen,
            "idprodserv" => $idprodserv);
        $this->db->insert("imagen", $datos);
    }

    /////actualizar carro

    public function upcarro($idproducto, $cantidad) {

        $this->session->where("idproducto", $idproducto);
        $datos = array("cantidad" => $cantidad);
        $this->sesion->update("carro", $datos);
    }

    function porId($id) {
        $this->db->where('idproducto', $id);
        $productos = $this->db->get('producto');
        foreach ($productos->result() as $producto) {
            $data[] = $producto;
        }
        return $producto;
    }

}
