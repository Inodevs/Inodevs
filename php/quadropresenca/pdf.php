<?php

    require_once 'dompdf/autoload.inc.php';

    use Dompdf\Dompdf;

    class Pdf extends Dompdf{
        public function __construct(){
            parent::__construct();
        }
    }
    if(isset($_POST["hidden_html"]) && $_POST["hidden_html"] != ''){
        $file_name = 'relatorio.pdf';
        $html = $_POST["hidden_html"];
        $pdf = new Pdf();
        $pdf->loadHtml($html);
        $pdf->render();
        $pdf->stream($file_name, array("Attachment" => false));
    }

?>