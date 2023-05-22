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
        $estudante = $this->Retrieve->viewStd($id_estudante); // Supondo que existe um método 'getUserData' no modelo 'User_model'

        // Carregue a biblioteca Dompdf
        $dompdf = new Dompdf(['enable_remote' => true]);

        $options = $dompdf->getOptions();
        $options->set('defaultFont', 'Arial');
        $options->set('isRemoteEnabled', true);
        $dompdf->setOptions($options);


        // Gere o conteúdo HTML do PDF
        $html = $this->load->view('pdf/pdf_template', array('estudante' => $estudante), true);

        // Carregue o conteúdo HTML no Dompdf
        $dompdf->loadHtml($html);

        // Renderize o PDF
        $dompdf->render();

        
        // Envie o PDF para o navegador
        $dompdf->stream('Dados_Aluno.pdf', array('Attachment' => false));
    }

}