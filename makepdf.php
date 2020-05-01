
<?php
require_once __DIR__ . '/vendor/autoload.php';



$id = $_GET["id"];


include 'conn.php';
$q = " SELECT * FROM crudtable WHERE  id = $id";  
$query = mysqli_query($connect,$q);

$result=  mysqli_fetch_array($query);



$mpdf = new \Mpdf\Mpdf();
$firstname = $result['firstname'];
$lastname = $result['lastname'];
$middlename = $result['middlename'];
$country = $result['country'];
$phone = $result['phone'];

$mpdf->WriteHTML('<h1>YOUR DATA PDF!</h1>');
$html =  "<h1>" . htmlspecialchars($firstname)."</h1>";
 $html1 =  "<h1>" . htmlspecialchars($lastname)."</h1>";
 $html2 =  "<h1>" . htmlspecialchars($middlename)."</h1>";
$html3 =  "<h1>" . htmlspecialchars($country)."</h1>";
 $html4 =  "<h1>" . htmlspecialchars($phone)."</h1>";
  
$mpdf->WriteHTML($html);
$mpdf->WriteHTML($html1);
$mpdf->WriteHTML($html2);
$mpdf->WriteHTML($html3);
$mpdf->WriteHTML($html4);
$mpdf->Output();

?>
