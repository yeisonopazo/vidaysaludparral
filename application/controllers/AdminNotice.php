<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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
        $noticias = $this->AdminModel->getNoticias();
        $data = array();
        foreach ($noticias as $n) {
            array_push($data, array("idnoticia" => $n->idnoticia, "titulo" => $n->titulo, "descripcion" => $n->descripcion,
                "fecha" => $n->fecha, "imagen" => base64_encode($n->imagen), "autor" => $n->autor, "referencia" => $n->referencia));
        }
        echo json_encode($data);
    }

    public function buscarNoticia() {
        $titulo = $this->input->post("titulo");
        $noticias = $this->AdminModel->buscarNoticia($titulo);
        $data = array();
        foreach ($noticias as $n) {
            array_push($data, array("idnoticia" => $n->idnoticia, "titulo" => $n->titulo, "descripcion" => $n->descripcion,
                "fecha" => $n->fecha, "imagen" => base64_encode($n->imagen), "autor" => $n->autor, "referencia" => $n->referencia));
        }
        echo json_encode($data);
    }

    public function publicarNoti() {
        $idpagina = $this->input->post("idpagina");
        $idnoticia = $this->input->post("idnoticia");
        $this->AdminModel->publicarNoti($idpagina, $idnoticia);
        echo json_encode(array("msg" => "Noticia publicada!"));
    }

    public function getPagina() {
        echo json_encode($this->AdminModel->getPagina());
    }

}
