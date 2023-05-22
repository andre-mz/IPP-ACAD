<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Session $session
 * @property Retrieve $Retrieve
 */

class PdfGerator extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->library('Pdf');
    }

    function geratePdf(){
            // Definir as configurações do PDF
            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  

            
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('$retrieveStd->fullnam');
            $pdf->SetTitle('Título do documento');
            $pdf->SetSubject('Assunto do documento');
            $pdf->SetKeywords('palavra-chave 1, palavra-chave 2, palavra-chave 3');
            //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING);
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            $pdf->SetFont('helvetica', '', 11);
            $pdf->AddPage();

            // Gerar o conteúdo do PDF
            $content = (
                $this->session->userdata('name')
            );
            $pdf->writeHTML($content);

            // Definir o nome do arquivo PDF
            $filename = 'arquivo.pdf';

            // Enviar o arquivo PDF para o navegador
            $pdf->Output($filename, 'I');
        
    
    }
}
    
