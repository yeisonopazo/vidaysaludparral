<?php

class ClientModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function insertarCliente($rutusuario, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña, $idperfil) {
        $datos = array("rutusuario" => $rutusuario,
            "nombre" => $nombre,
            "apellido" => $apellido,
            "direccion" => $direccion,
            "telefono" => $telefono,
            "correo" => $correo,
            "contraseña" => $contraseña,
            "idperfil" => $idperfil);

        $this->db->insert("usuario", $datos);
    }

    function actualizarCliente($rutusuario, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña) {
        $this->db->where("rutusuario", $rutusuario);
        $datos = array("nombre" => $nombre,
            "apellido" => $apellido,
            "direccion" => $direccion,
            "telefono" => $telefono,
            "correo" => $correo,
            "contraseña" => $contraseña);
        $this->db->update("usuario", $datos);
    }

    function getUser($rutusuario) {
        $this->db->where("rutusuario", $rutusuario);
        return $this->db->get("usuario")->result();
    }

    function getClientes() {
        $this->db->where("idperfil", 1);
        return $this->db->get("usuario")->result();
    }

    //////////////////////Ventas//////////////////////
    function getVentasCliente($rutusuario) {
        $this->db->where("rutusuario", $rutusuario);
        return $this->db->get("venta")->result();
    }

    function getDetalleVentas($idventa) {
        $this->db->where("dv.idventa", $idventa);
        $this->db->Select("p.idproducto, p.nombre, dv.cantidad, dv.precio, dv.total");
        $this->db->from("detalleventa dv");
        $this->db->join("producto p", "p.idproducto=dv.idproducto");
        return $this->db->get()->result();
    }

}
