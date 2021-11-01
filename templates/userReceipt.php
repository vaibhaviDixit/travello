<?php 
  session_start();
   include ('include/database.inc.php');
   include ('include/functions.inc.php');
   include ('include/constants.inc.php');
   ob_end_flush();
if(!isset($_SESSION['ADMIN'])){
   redirect(SITE_PATH.'templates/adminlogin');
}


include ('vendor/autoload.php');

$css=file_get_contents(SITE_PATH.'asset/bootstrap.min.css');

$mpdf=new /Mpdf/Mpdf();



if(isset($_GET['id']) && $_GET['id']>0){
 
 $id=getSafeVal($_GET['id']);

$html=userReceipt($id);

// $mpdf->Output('test.pdf','F');
$mpdf->writeHTML($css,1);//first load css in dom
$mpdf->writeHTML($html);
$mpdf->Output();


}


?>