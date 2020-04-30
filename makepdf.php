<?php

require_once __DIR__ . '/vendor/autoload.php';

$first = $_POST['fn'];
$Last = $_POST['ln'];
$Middle = $_POST['mn'];
$Countr = $_POST['c'];
$Phone = $_POST['p'];

$mpdf  = new \Mpdf\Mpdf();

$data = '';
$data .= '<h1>Your Details<h1>';

$data .= '<Strong>FIRST NAME :-</strong> ' . $First .'<br />';
$data .= '<Strong>FIRST NAME :-</strong> ' . $Last .'<br />';
$data .= '<Strong>FIRST NAME :-</strong> ' . $Middle .'<br />';
$data .= '<Strong>FIRST NAME :-</strong> ' . $Countr .'<br />';
$data .= '<Strong>FIRST NAME :-</strong> ' . $Phone .'<br />';

$mpdf->WriteHTML($data);
$mpdf->Output('Myfile.pdf','D');
