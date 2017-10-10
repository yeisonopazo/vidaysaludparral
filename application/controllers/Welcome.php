<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("LoginModel");
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function iniciar() {
        $rutusuario = $this->input->post("rutusuario");
        $contraseña = $this->input->post("contraseña");

        $X = $this->LoginModel->iniciar($rutusuario, $contraseña);
        If (count($X) >= 0) {
            If ($X[0]->idperfil == 1) {
                $this->session->set_userdata("cliente", $X);
                Echo json_encode(array("msg", "cliente"));
            } else if ($X[0]->idperfil == 2) {
                $this->session->set_userdata("administrador", $X);
                Echo json_encode(array("msg", "administrador"));
            }
        } else {
            Echo json_encode(array("msg", "Usuario no registrador"));
        }
    }

    public function user() {
        echo json_encode($this->LoginModel->verUser());
    }

}
