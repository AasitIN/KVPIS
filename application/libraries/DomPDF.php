<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter PDF Library
 *
 * @package			CodeIgniter
 * @subpackage		Libraries
 * @category		Libraries
 * @author			Muhanz
 * @license			MIT License
 * @link			https://github.com/hanzzame/ci3-pdf-generator-library
 *
 */


require_once APPPATH."/third_party/dompdf/autoload.inc.php";
use Dompdf\Dompdf;

class DomPDF
{
    public function create($html = null,$filename=null)
    {
	$dompdf = new DomPDF();
	$dompdf->loadHtml($html);
	$dompdf->render();
	$dompdf->stream($filename.'.pdf');
    }
}