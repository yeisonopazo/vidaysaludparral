<?php

class AdminOtros extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('ClientModel');
    }

    public function index() {
        $this->load->view('Admin_Otros');
    }

    public function getClientes() {
        echo json_encode($this->ClientModel->getClientes());
    }

}
