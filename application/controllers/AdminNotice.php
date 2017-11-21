<?php

class AdminNotice extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
    }
     public function index() {
        $this->load->view('Admin_noticia');
    }

}
