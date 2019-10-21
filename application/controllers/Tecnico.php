<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnico extends CI_Controller{

    function index(){
        $query1=$this->db->query('SELECT * FROM tecnico');
        $tecnico['tecnico']=$query1->result_array();
        $this->load->view('templete/header');
        $this->load->view('tecnico',$tecnico);
        $dato['js']="<script src='".base_url()."plugins/tecnico.js'></script>";    

        $this->load->view('templete/footer',$dato);
    }

    function store(){
        $tecnico= [
            'nombre'=> ($this->input->post('nombre')),
            'codigo'=> ($this->input->post('codigo')),
            'user'=> ($this->input->post('user')),
            'clave'=> $this->input->post('clave'),
            'tipo'=> ($this->input->post('tipo'))
        ];
         $this->db->insert("tecnico",$tecnico);
         header("Location: ".base_url()."tecnico");         
    }

    function update(){
        $id=$this->input->post('idtecnico1');
        $tecnico= [
            'nombre'=> ($this->input->post('nombre1')),
            'codigo'=> ($this->input->post('codigo1')),
            'user'=> ($this->input->post('user1')),
            'clave'=> $this->input->post('clave1'),
            'tipo'=> ($this->input->post('tipo1'))

        ];
        $this->db->where('idtecnico',$id);
        $this->db->update("tecnico",$tecnico);
        header("Location: ".base_url()."tecnico");
    }

    public function datotecnico(){
        
        $idtecnico=$_POST['idtecnico'];
        $query=$this->db->query("SELECT * FROM tecnico WHERE idtecnico='$idtecnico'");
        $row=$query->row();
        
        $myObj=($query->result_array())[0];

        echo json_encode($myObj);
    }

    public function deletetecnico($id){
        
      $this->db->delete('tecnico', array('idtecnico' => $id));

      header("Location: ".base_url()."tecnico");

    }
}
?>