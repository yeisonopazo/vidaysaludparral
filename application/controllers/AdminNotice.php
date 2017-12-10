<?php

class AdminNotice extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index() {
     
       if ($this->session->userdata("administrador")) {
             $this->load->view('Admin_noticia');
        } else {
            redirect('welcome');
        }
    }

    public function insertarNoticia() {
        $titulo = $this->input->post("titulo");
        $descripcion = $this->input->post("descripcion");
        $fecha = $this->input->post("fecha");
        $autor = $this->input->post("autor");
        $refencia = $this->input->post("referencia");
        $path = $_FILES["file"]["tmp_name"];
        if (is_uploaded_file($path) && !empty($_FILES)) {
            $imagen = file_get_contents($path);
            if ($this->AdminModel->insertarNoticia($titulo, $descripcion, $fecha, $imagen, $autor, $refencia)) {
                echo json_encode(array("msg" => "Noticia agregada"));
            } else {
                echo json_encode(array("msg" => "Error al ingresar Noticia"));
            }
        } else {
            echo json_encode(array("msg" => "Error de archivo"));
        }
    }

    public function getNoticias() {
        echo json_encode($this->AdminModel->getNoticias());
    }

}
