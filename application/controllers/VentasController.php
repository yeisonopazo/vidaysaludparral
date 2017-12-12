<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VentasController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('ClientModel');
    }

    public function index() {
        if ($this->session->userdata("administrador")) {
            $this->load->view('Admin_vent');
        } else {
            redirect('welcome');
        }
    }

    public function insertarVenta() {
        $rutusuario = $this->input->post("rutusuario");
        $fechaventa = $this->input->post("fechaventa");
        $subtotal = $this->input->post("descripcion");
        $total = $this->input->post("total");
        $comprobante = $this->input->post("comprobante");
        $observacion = $this->input->post("observacion");
        $estado = $this->input->post("estado");

        $this->AdminModel->insertarVenta($rutusuario, $fechaventa, $subtotal, $total, $comprobante, $observacion, $estado);
        echo json_encode(array("msg" => "Venta Agregada"));
    }

    public function getVentas() {
        echo json_encode($this->AdminModel->getVentas());
    }

    public function insertarDetalleVenta() {
        $idventa = $this->input->post("idventa");
        $idproducto = $this->input->post("idproducto");
        $cantidad = $this->input->post("cantidad");
        $precio = $this->input->post("precio");
        $total = $this->input->post("total");
        $descuento = $this->input->post("descuento");

        $this->AdminModel->insertarDetalleVenta($idventa, $idproducto, $cantidad, $precio, $total, $descuento);
        echo json_encode(array("msg" => "Producto Agregado"));
    }

    public function getDetalleVentas() {
        $idventa= $this->input->post("idventa");
        echo json_encode($this->AdminModel->getDetalleVentas($idventa));
    }

    public function addCarro() {
        $idproducto = $this->input->post("idproducto");
        $nombre = $this->input->post("nombre");
        $cantidad = $this->input->post("cantidad");
        $precio = $this->input->post("precio");
        $total = $this->input->post("total");
        $nuevo = array("idproducto" => $idproducto, "nombre" => $nombre, "cantidad" => $cantidad, "precio" => $precio, "total" => $total);
        if ($this->session->userdata("carro")) {
            $carro = $this->session->userdata("carro");
            $carro[] = $nuevo;
            $this->session->set_userdata("carro", $carro);
        } else {
            $carro = array();
            $carro[] = $nuevo;
            $this->session->set_userdata("carro", $carro);
        }
        echo json_encode(array("msg" => "ok"));
    }

    public function getCarro() {
        echo json_encode($this->session->userdata("carro"));
    }

    public function limpiar() {
        $carro = array();
        $this->session->set_userdata("carro", $carro);
        echo json_encode(array("msg", "ok"));
        redirect('welcome');
    }

    public function limpiar2() {
        $carro = array();
        $this->session->set_userdata("carro", $carro);
        echo json_encode(array("msg", "Canasta Limpia"));       
    }

}
