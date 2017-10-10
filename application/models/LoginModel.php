<?php

class LoginModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function iniciar($rutusuario, $contraseña) {
        $this->db->where("rutusuario", $rutusuario);
        $this->db->where("contraseña", $contraseña);
        Return $this->db->get("usuario")->result();
    }

    function verUser() {
        return $this->db->get("usuario")->result();
    }

}
