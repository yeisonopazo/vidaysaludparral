<?php

class AdminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index() {
        $this->load->view('Admin_view');
    }

    public function insertarProducto() {
        $nombre = $this->input->post("nombre");
        $idcat = $this->input->post("idcategoria");
        $descripcion = $this->input->post("descripcion");
        $precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
        $rutencargado = $this->input->post("rutencargado");
        $this->AdminModel->insertarProducto($nombre, $idcat, $descripcion, $precio, $stock, $rutencargado);
        echo json_encode(array("msg" => "Producto Agregado"));
    }

    public function getProductos() {
        echo json_encode($this->AdminModel->getProductos());
    }

    public function insertarCategoria() {
        $nombre = $this->input->post("nombre");
        $this->AdminModel->insertarCategoria($nombre);
        echo json_encode(array("msg" => "Categoria agregada"));
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

    public function insertarNoticia() {
        $titulo = $this->input->post("titulo");
        $descripcion = $this->input->post("descripcion");
        $fecha = $this->input - post("fecha");
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
