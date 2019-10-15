<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{
    function index(){
        $query1=$this->db->query('SELECT * FROM cliente');
        $cliente['cliente']=$query1->result_array();
        $this->load->view('templete/header');
        $this->load->view('cliente',$cliente);
        $this->load->view('templete/footer');
    }
}
?>