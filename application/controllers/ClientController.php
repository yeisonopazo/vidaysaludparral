<?php

class ClientController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ClientModel');
    }

    public function index() {
        $this->load->view('Cliente_view');
    }

    public function insertarCliente() {
        $rutusuario = $this->input->post("rutusuario");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $direccion = $this->input->post("direccion");
        $telefono = $this->input->post("telefono");
        $correo = $this->input->post("correo");
        $contraseña = $this->input->post("contraseña");
        $idperfil = $this->input->post("idperfil");
        $this->ClientModel->insertarCliente($rutusuario, $nombre, $apellido, $direccion, $telefono, $correo, $contraseña, $idperfil);
        echo json_encode(array("msg" => "Registrado"));
    }

}
