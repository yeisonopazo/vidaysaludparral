<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminOtros extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('ClientModel');
    }

    public function index() {       
        if ($this->session->userdata("administrador")) {
          $this->load->view('Admin_otros');
        } else {
            redirect('welcome');
        }
    }

    public function getClientes() {
        echo json_encode($this->ClientModel->getClientes());
    }

}
