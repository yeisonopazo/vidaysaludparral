<?php

class AdminNotice extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index() {
        $this->load->view('Admin_noticia');
    }

    public function insertarNoticia() {
        $titulo = $this->input->post("titulo");
        $descripcion = $this->input->post("descripcion");
        $fecha = $this->input -> post("fecha");
        $imagen = $this->input->post("imagen");
        $autor = $this->input->post("autor");
        $refencia = $this->input->post("referencia");
        $this->AdminModel->insertarNoticia($titulo, $descripcion, $fecha, $imagen, $autor, $refencia);
        echo json_encode(array("msg" => "Noticia agregada"));
    }

    public function getNoticias() {
        echo json_encode($this->AdminModel->getNoticias());
    }

}
