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
        $subtotal = $this->input->post("total");
        $total = $this->input->post("total");
        $comprobante = NULL;
        $observacion = $this->input->post("observacion");
        $estado = $this->input->post("estado");
        $idventa = $this->AdminModel->insertarVenta($rutusuario, $fechaventa, $subtotal, $total, $comprobante, $observacion, $estado);
        $carrito = $this->cart->contents();
        foreach ($carrito as $item) {

            $this->AdminModel->insertarDetalleVenta($idventa, $item['id'], $item['qty'], $item['price'], $item['subtotal']);
        }

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
        $idventa = $this->input->post("idventa");
        echo json_encode($this->AdminModel->getDetalleVentas($idventa));
    }

    public function addCarro() {
        $idproducto = $this->input->post("idproducto");
        $producto = $this->AdminModel->porId($idproducto);
        $cantidad = 1;
        $carrito = $this->cart->contents();
        foreach ($carrito as $item) {
            if ($item['id'] == $idproducto) {
                $cantidad = 1 + $item['qty'];
                $otro = array(
                    'rowid' => $item['rowid'],
                    'qty' => 0
                );
                $this->cart->update($otro);
            }
        }

        if ($producto->stock < $cantidad) {
            echo json_encode(array("msg" => "Sin Stock"));
        } else {
            $insert = array(
                'id' => $idproducto,
                'qty' => $cantidad,
                'price' => $producto->precio,
                'name' => $producto->nombre
            );
            $this->cart->insert($insert);
            echo json_encode(array("msg" => "ok"));
        }
    }

    function eliminarProducto() {
        $idproducto = $this->input->post("idproducto");
        $carrito = $this->cart->contents();
        foreach ($carrito as $item) {
            if ($item['id'] == $idproducto) {
                $otro = array(
                    'rowid' => $item['rowid'],
                    'qty' => $item['qty'] - 1
                );
                $this->cart->update($otro);
            }
        }
        echo json_encode(array("msg", "Eliminado"));
    }

    public function getCarroProd() {
        $idproducto = $this->input->post("idproducto");
        if ($this->session->userdata("carro")) {
            $cart = $this->session->userdata("carro");
            foreach ($cart as $item) {
                if ($item['idproducto'] == $idproducto) {
                    $data = "si";
                    break;
                } else {
                    $data = "no";
                }
            }
        } else {
            $data = "no";
        }
        echo json_encode(array("msg" => $data));
    }

    public function getCarro() {

        echo json_encode($this->cart->contents());
    }

    public function limpiar() {
        $carro = array();
        $this->session->set_userdata("carro", $carro);
        $this->cart->destroy();
        echo json_encode(array("msg", "ok"));
        redirect('welcome');
    }

    public function limpiar2() {
        $carro = array();
        $this->session->set_userdata("carro", $carro);
        $this->cart->destroy();
        echo json_encode(array("msg", "Canasta Limpia"));
    }

    public function getImagenes() {
        $idprodserv = $this->input->post("idprodserv");
        $imagenes = $this->AdminModel->getImagenes($idprodserv);
        $data = array();

        foreach ($imagenes as $n) {

            array_push($data, array("idimg" => $n->idimg, "nombre" => $n->nombre, "imagen" => base64_encode($n->imagen), "idprodserv" => $n->idprodserv));
        }
        echo json_encode($data);
    }

//   transaccion
//    $array( $venta("array"));
//    if ($this->db->insert($array)) {
//        $idventa=$this->db-insert_id();
//        foreach (){
//            detalle 1
//            detalle 2
//        }
}
