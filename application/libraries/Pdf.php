<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
use Dompdf\Options;
class Pdf {

  public function generate($html, $filename='', $stream, $paper, $orientation){
  	$options = new Options();
	  $options->set('isRemoteEnabled', TRUE);
    $dompdf = new DOMPDF($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper, $orientation);
    $dompdf->render();

    if ($stream) {
        $dompdf->stream($filename.".pdf", array("Attachment" => false));
    } else {
        return $dompdf->output();
    }
  }
}
