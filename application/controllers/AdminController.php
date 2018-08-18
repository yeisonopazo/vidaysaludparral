<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('ClientModel');
    }

    public function index() {

        if ($this->session->userdata("administrador")) {
            $this->load->view('Admin_view');
        } else {
            redirect('welcome');
        }
    }

    public function getSesionAdmin() {
        echo json_encode($this->session->userdata("administrador"));
    }

    public function insertarProducto() {
        $nombre = $this->input->post("nombre");
        $idcat = $this->input->post("idsubcategoria");
        $descripcion = $this->input->post("descripcion");
        $precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
        $fecha = $this->input->post("fecha");
        $rutencargado = $this->input->post("rutencargado");
        $path = $_FILES["imagen"]["tmp_name"];
        if (is_uploaded_file($path) && !empty($_FILES)) {
            $imagen = file_get_contents($path);
            $idproduct = $this->AdminModel->insertarProducto($nombre, $idcat, $descripcion, $precio, $stock, $fecha, $rutencargado);

            $this->AdminModel->insertarImagen($nombre, $imagen, $idproduct);
            echo json_encode(array("msg" => "Producto Agregado"));
        } else {
            echo json_encode(array("msg" => "Error de archivo"));
        }
    }

    public function actualizarProducto() {
        $idproducto = $this->input->post("idproducto");
        $nombre = $this->input->post("nombre");
        $idcategoria = $this->input->post("idcategoria");
        $descripcion = $this->input->post("descripcion");
        $precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
        $rutencargado = $this->input->post("rutencargado");

        $this->AdminModel->actualizarProducto($idproducto, $nombre, $idcategoria, $descripcion, $precio, $stock, $rutencargado);
        echo json_encode(array("msg" => "Actualizado!"));
    }

    public function getProductos() {
        $productos = $this->AdminModel->getProductos();
        $data = array();
        foreach ($productos as $n) {

            array_push($data, array("idproducto" => $n->idproducto, "nombre" => $n->nombre,
                "idsubcategoria" => $n->idsubcategoria,
                "nombresubcat" => $n->nombresubcat, "idcategoria" => $n->idcategoria, "nombcateg" => $n->nombcateg,
                "descripcion" => $n->descripcion, "precio" => $n->precio, "stock" => $n->stock, "fecha" => $n->fecha,
                "rutencargado" => $n->rutencargado,
                "nombreprov" => $n->nombreprov, "imagen" => base64_encode($n->imagen)));
        }
        echo json_encode($data);
    }

    public function buscarProducto() {
        $nombre = $this->input->post("nombre");
        $productos = $this->AdminModel->buscarProducto($nombre);
        $data = array();
        foreach ($productos as $n) {

            array_push($data, array("idproducto" => $n->idproducto, "nombre" => $n->nombre,
                "idsubcategoria" => $n->idsubcategoria,
                "nombresubcat" => $n->nombresubcat, "idcategoria" => $n->idcategoria, "nombcateg" => $n->nombcateg,
                "descripcion" => $n->descripcion, "precio" => $n->precio, "stock" => $n->stock, "fecha" => $n->fecha,
                "rutencargado" => $n->rutencargado,
                "nombreprov" => $n->nombreprov, "imagen" => base64_encode($n->imagen)));
        }
        echo json_encode($data);
    }

    public function insertarCategoria() {
        $nombre = $this->input->post("nombre");
        $this->AdminModel->insertarCategoria($nombre);
        echo json_encode(array("msg" => "ok"));
    }

    public function getCategorias() {
        echo json_encode($this->AdminModel->getCategorias());
    }

    public function insertarSubCateg() {
        $nombre = $this->input->post("nombre");
        $idcateg = $this->input->post("idcategoria");
        $this->AdminModel->insertSubCateg($nombre, $idcateg);
        echo json_encode(array("msg" => "Subcategoria Agregada"));
    }

    public function getSubCateg() {
        echo json_encode($this->AdminModel->getSubCateg());
    }

    public function insertarProveedor() {
        $rutproveedor = $this->input->post("rutproveedor");
        $nombre = $this->input->post("nombre");
        $telefono = $this->input->post("telefono");
        $direcion = $this->input->post("direccion");
        $correo = $this->input->post("correo");
        $idperfil = $this->input->post("idperfil");
        $this->AdminModel->insertarProveedor($rutproveedor, $nombre, $telefono, $direcion, $correo, $idperfil);
        echo json_encode(array("msg" => "Proveedor agregado"));
    }

    public function getProveedores() {
        echo json_encode($this->AdminModel->getProveedores());
    }

}
