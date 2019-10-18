<?php

require_once('tcpdf.php');
class Servicio extends CI_Controller {
    function index(){
        $this->load->view('templete/header');
        $this->load->view('servicio');
        $this->load->view('templete/footer');
    }
    function imprimir(){
        $idtrabajo=$_POST['idtrabajo'];
        $data_uri = $_POST['firma'];
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);
        file_put_contents("firmas/".$idtrabajo.".png", $decoded_image);
        $row=$this->db->query("SELECT * FROM trabajo WHERE idtrabajo='$idtrabajo'")->row();
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // remove default header/footer
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        // set margins
        $pdf->SetMargins(0, 0, 0);

        // set font
        $pdf->SetFont('helvetica', 'B', 7);

// add a page
        $pdf->AddPage();

        // print a block of text using Write()
        $pdf->Rect(5, 1, 200, 25);
        $pdf->Text(20, 3, 'Cooperativa de Telecomunicaciones Oruro Ltda.', 0, 1, true);
        $pdf->Text(25, 6, '               SERVICIO DE CABLE', 0, 1, true);
        $pdf->Rect(180, 2, 17, 6);
        $pdf->Text(180, 3, 'No. '.$row->idtrabajo, 0, 1, true,0);
        $pdf->SetFont('helvetica', 'B', 20);
        $pdf->Text(0, 10, 'ORDEN DE TRABAJO', 0, 1, true,0,0,'C');
        $pdf->image("firmas/".$idtrabajo.".png",40,30);
//        $pdf->Text(10, 10, 'Orden de trabajo', 0, 0, true, 1, false,'C');

//Close and output PDF document
        $pdf->Output('example_002.pdf', 'I');
    }
}
