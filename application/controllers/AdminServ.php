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
        $nombre = $this->input->post("nombreserv");
        $idcat = $this->input->post("idsubcategoria");
        $descripcion = $this->input->post("descripcionserv");
        $precio = $this->input->post("precioserv");
        $stock = $this->input->post("stockserv");
        $fecha = $this->input->post("fechaserv");
        $rutencargado = $this->input->post("selectencarg");
        $path = $_FILES["imagen"]["tmp_name"];
        if (is_uploaded_file($path) && !empty($_FILES)) {
            $imagen = file_get_contents($path);
            $idproduct = $this->AdminModel->insertarProducto($nombre, $idcat, $descripcion, $precio, $stock, $fecha, $rutencargado);

            $this->AdminModel->insertarImagen($nombre, $imagen, $idproduct);
            echo json_encode(array("msg" => "Servicio Agregado"));
        } else {
            echo json_encode(array("msg" => "Error de archivo"));
        }
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

    public function actualizarImagen() {
        $idprodserv = $this->input->post("idprodserv");
        $path = $_FILES["imagen"]["tmp_name"];
        if (is_uploaded_file($path) && !empty($_FILES)) {
            $imagen = file_get_contents($path);
            $this->AdminModel->actualizarImagen($idprodserv, $imagen);
            echo json_encode(array("msg" => "Imagen Actualizada"));
        } else {
            echo json_encode(array("msg" => "Error de archivo"));
        }
    }

}
