<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminServ extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index() {
        if ($this->session->userdata("administrador")) {
           $this->load->view('Admin_serv');
        } else {
            redirect('welcome');
        }
    }

    public function insertarServicio() {
        $nombre = $this->input->post("nombre");
        $idcat = $this->input->post("idcategoria");
        $descripcion = $this->input->post("descripcion");
        $precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
        $fecha = $this->input->post("fecha");
        $rutencargado = $this->input->post("rutencargado");
        $this->AdminModel->insertarProducto($nombre, $idcat, $descripcion, $precio, $stock, $fecha, $rutencargado);
        echo json_encode(array("msg" => "Servicio Agregado"));
    }

    public function actualizarServicio() {
        $idproducto = $this->input->post("idproducto");
        $nombre = $this->input->post("nombre");
        $idcategoria = $this->input->post("idcategoria");
        $descripcion = $this->input->post("descripcion");
        $precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
        $fecha = $this->input->post("fecha");
        $rutencargado = $this->input->post("rutencargado");

        $this->AdminModel->actualizarServicio($idproducto, $nombre, $idcategoria, $descripcion, $precio, $stock, $fecha, $rutencargado);
        echo json_encode(array("msg" => "Actualizado!"));
    }

}
