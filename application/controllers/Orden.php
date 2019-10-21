<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orden extends CI_Controller{

    function index(){
        $query1=$this->db->query('SELECT * FROM cliente c, trabajo t WHERE c.idcliente = t.idcliente');
        $trabajo['trabajo']=$query1->result_array();
        $this->load->view('templete/header');
        $this->load->view('orden',$trabajo);
        $dato['js']="<script src='".base_url()."plugins/orden.js'></script>";    

        $this->load->view('templete/footer',$dato);
    }

    function store(){
        $trabajo= [
            'idtecnico'=> ($this->input->post('idtecnico')),
            'idcliente'=> ($this->input->post('idcliente')),
            'observacion'=> '',
            'empieza'=> '',
            'termina'=> '',
            'total'=> '',
            'notas'=>'',
            'pendiente'=> '',
            'inspeccion'=> '',
            'firma'=> '',
            'tipo'=> $this->input->post('tipo')

        ];
         $this->db->insert("trabajo",$trabajo);
         header("Location: ".base_url()."orden");         
    }

    function material(){
        $material= [
            'idtrabajo'=> ($this->input->post('idtrabajo1')),
            'codigo'=> $this->input->post('codigo1'),
            'nombre'=> $this->input->post('nombre1'),
            'cantidad'=> $this->input->post('cantidad1'),
            'costo'=> $this->input->post('costo1'),
            'unidad'=>$this->input->post('unidad1'),
            'utilizado'=>'',
            'dif'=> ''

        ];
         $this->db->insert("materiales",$material);
         header("Location: ".base_url()."orden");         
    }

    public function deleteorden($id){        
        $this->db->delete('trabajo', array('idtrabajo' => $id));  
        header("Location: ".base_url()."orden");  
      }

      public function deletematerial($id){        
        $this->db->delete('materiales', array('idmateriales' => $id));  
        header("Location: ".base_url()."orden");  
      }

      public function datomaterial(){
        
        $idtrabajo=$_POST['idtrabajo'];
        $query=$this->db->query("SELECT * FROM materiales WHERE idtrabajo='$idtrabajo'");
        $row=$query->row();
        
        $myObj=($query->result_array());

        echo json_encode($myObj);
    }
}
?>