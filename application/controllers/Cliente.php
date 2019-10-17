<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{
    function index(){
        $query1=$this->db->query('SELECT * FROM cliente');
        $cliente['cliente']=$query1->result_array();
        $this->load->view('templete/header');
        $this->load->view('cliente',$cliente);
        $dato['js']="<script src='".base_url()."plugins/cliente.js'></script>";    

        $this->load->view('templete/footer',$dato);
    }

    function store(){
        $cliente= [
            'razon'=> ($this->input->post('nombre')),
            'telefono'=> $this->input->post('telefono'),
            'direccion'=> ($this->input->post('direccion')),
            'cable'=> ($this->input->post('cable')),
            'telefonico'=> $this->input->post('cfono'),
            'nodo'=> ($this->input->post('nodo')),
            'manzano'=> ($this->input->post('manzano')),
            'tap'=> $this->input->post('tap'),
            'boca'=> $this->input->post('boca'),
            'sp'=>$this->input->post('sp'),
            'plan'=> $this->input->post('plan'),
            'zona'=> $this->input->post('zona'),
            'edificio'=> $this->input->post('edificio'),
            'departamento'=> $this->input->post('departamento'),
            'fechaprogramada'=> $this->input->post('fechaprog'),
            'observacion'=> $this->input->post('observacion')

        ];
         $this->db->insert("cliente",$cliente);
         header("Location: ".base_url()."cliente");
         
    }

    function update(){
        $id=$this->input->post('idcliente1');
        $cliente= [
            'razon'=> ($this->input->post('nombre1')),
            'telefono'=> $this->input->post('telefono1'),
            'direccion'=> ($this->input->post('direccion1')),
            'cable'=> ($this->input->post('cable1')),
            'telefonico'=> $this->input->post('cfono1'),
            'nodo'=> ($this->input->post('nodo1')),
            'manzano'=> ($this->input->post('manzano1')),
            'tap'=> $this->input->post('tap1'),
            'boca'=> $this->input->post('boca1'),
            'sp'=>$this->input->post('sp1'),
            'plan'=> $this->input->post('plan1'),
            'zona'=> $this->input->post('zona1'),
            'edificio'=> $this->input->post('edificio1'),
            'departamento'=> $this->input->post('departamento1'),
            'fechaprogramada'=> $this->input->post('fechaprog1'),
            'observacion'=> $this->input->post('observacion1')

        ];
        $this->db->where('idcliente',$id);
        $this->db->update("cliente",$cliente);
        header("Location: ".base_url()."cliente");
    }

    public function datocliente(){
        
        $idcliente=$_POST['idcliente'];
        $query=$this->db->query("SELECT * FROM cliente WHERE idcliente='$idcliente'");
        $row=$query->row();
        
        $myObj=($query->result_array())[0];

        echo json_encode($myObj);
    }

    public function deletecliente($id){
        
      $this->db->delete('cliente', array('idcliente' => $id));

      header("Location: ".base_url()."cliente");

    }
}
?>