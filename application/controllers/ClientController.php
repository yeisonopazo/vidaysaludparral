<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ClientController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ClientModel');
    }

    public function index() {
        if ($this->session->userdata("cliente")) {
            $this->load->view('Cliente_view');
        } else {
            redirect('welcome');
        }
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
        $this->ClientModel->insertarCliente($rutusuario, $nombre, $apellido, $direccion, $telefono, $correo, md5($contraseña), $idperfil);
        echo json_encode(array("msg" => "Registrado"));
    }

    public function getSesion() {
        echo json_encode($this->session->userdata("cliente"));
    }

    public function getUser() {
        $rutusuario = $this->input->post("rutusuario");
        echo json_encode($this->ClientModel->getUser($rutusuario));
    }

    public function actualizarCliente() {
        $rutusuario = $this->input->post("rutusuario");
        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $direccion = $this->input->post("direccion");
        $telefono = $this->input->post("telefono");
        $correo = $this->input->post("correo");
        $contraseña = $this->input->post("contraseña");
        $this->ClientModel->actualizarCliente($rutusuario, $nombre, $apellido, $direccion, $telefono, $correo, md5($contraseña));
        echo json_encode(array("msg" => "Actualizado!"));
    }

}
