<?php

class AdminServ extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index() {
        $this->load->view('Admin_serv');
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

}
