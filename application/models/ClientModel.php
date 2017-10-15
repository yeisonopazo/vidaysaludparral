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
            "idperfil"=>$idperfil);

        $this->db->insert("usuario", $datos);
    }
    

}
