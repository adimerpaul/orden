<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orden extends CI_Controller{

    function index(){
        $query1=$this->db->query('SELECT * FROM cliente c, trabajo t WHERE c.idcliente = t.idcliente');
        $cliente['cliente']=$query1->result_array();
        $this->load->view('templete/header');
        $this->load->view('cliente',$cliente);
        $dato['js']="<script src='".base_url()."plugins/cliente.js'></script>";    

        $this->load->view('templete/footer',$dato);
    }
}
?>