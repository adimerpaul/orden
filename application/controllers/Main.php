<?php


class Main extends CI_Controller {
function index(){
    $this->load->view('templete/header');
    $this->load->view('main');
    $this->load->view('templete/footer');
}
}