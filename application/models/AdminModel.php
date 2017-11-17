<?php

class AdminModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function insertarProducto($nombre, $idcat, $descripcion, $precio, $stock, $fecha, $rutencargado) {
        $datos = array("nombre" => $nombre,
            "idcategoria" => $idcat,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "stock" => $stock,
            "fecha" => $fecha,
            "rutencargado" => $rutencargado);
        $this->db->insert("producto", $datos);
    }

    function actualizarProducto($idproducto, $nombre, $idcat, $descripcion, $precio, $stock, $rutencargado) {
        $this->db->where("idproducto", $idproducto);
        $datos = array("nombre" => $nombre,
            "idcategoria" => $idcat,
            "descripcion" => $descripcion,
            "precio" => $precio,
            "stock" => $stock,       
            "rutencargado" => $rutencargado);
        $this->db->update("producto", $datos);
    }

    //    function getVentas() {
//        $this->db->select("v.fecha, u.nombre, p.nombre as producto, p.precio, dv.cantidad, v.total");
//        $this->db->from("detalleventa dv");
//        $this->db->join("venta v", " dv.idventa=v.idventa");
//        $this->db->join("usuario u", "v.rut= u.rut");
//        $this->db->join("producto p", "dv.idproducto= p.idproducto");
//        return $this->db->get()->result();
//    }
    function getProductos() {
        $this->db->select("p.idproducto, p.nombre,"
                . "sub.idsubcategoria, sub.nombre as nombresubcat,"
                . "c.idcategoria, c.nombre nombcateg,"
                . " p.descripcion, p.precio, p.stock, p.fecha,"
                . " prov.rutencargado, prov.nombre as nombreprov");
        $this->db->from("producto p");
        $this->db->join("subcategoria sub", "sub.idsubcategoria=p.idsubcategoria");
        $this->db->join("categoria c", "sub.idcategoria=c.idcategoria");
        $this->db->join("encargado prov", "p.rutencargado=prov.rutencargado");
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

}
