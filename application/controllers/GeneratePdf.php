<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Dompdf\Dompdf;
require_once APPPATH . 'third_party/dompdf/autoload.inc.php';
/***
 * @property Retrieve $Retrieve
 * @property Dompdf $Dompdf
 */


class GeneratePdf extends CI_Controller {


    function __construct(){
       parent::__construct(); 
    }


    function generatePdf($id_estudante){
         // Busque os dados do usuário
        $retrieveStd = $this->Retrieve->viewStd($id_estudante); 
        // Carregue a biblioteca Dompdf
        //$dompdf = new Dompdf(['enable_remote' => true]);
        $dompdf = new Dompdf();

        $options = $dompdf->getOptions();
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);
        $dompdf->setPaper('A4', 'portrait');


        // Gere o conteúdo HTML do PDF
        $html = $this->load->view('pdf/pdf_template', array('retrieveStd' => $retrieveStd), true);

        // Carregue o conteúdo HTML no Dompdf
        $dompdf->loadHtml($html);

        // Renderize o PDF
        $dompdf->render();

        
        // Envie o PDF para o navegador
        $dompdf->stream('Dados_Aluno.pdf', array('Attachment' => false));
    }

    function generatePdfFnc($id_funcionario){
        // Busque os dados do usuário
        $retrieveFnc = $this->Retrieve->viewFnc($id_funcionario); 
        // Carregue a biblioteca Dompdf
        //$dompdf = new Dompdf(['enable_remote' => true]);
        $dompdf = new Dompdf();

        $options = $dompdf->getOptions();
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);
        $dompdf->setPaper('A4', 'portrait');


        // Gere o conteúdo HTML do PDF
        $html = $this->load->view('pdf/pdf_template', array('retrieveFnc' => $retrieveFnc), true);

        // Carregue o conteúdo HTML no Dompdf
        $dompdf->loadHtml($html);

        // Renderize o PDF
        $dompdf->render();

        
        // Envie o PDF para o navegador
        $dompdf->stream('Dados_funcionario.pdf', array('Attachment' => false));
    }

}