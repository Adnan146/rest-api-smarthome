<?php

	header("Access-Control-Allow-Origin: *");

	header('Content-Type: application/json; charset=UTF-8'); 

	header("Access-Control-Allow-Methods: POST");

	header("Access-Control-Max-Age: 3600");

	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

?>

<?php
	$id = $_GET['id'];
	$path = "data/";
    $nama_file = $id.".json";
    $string_null = '[{"id":"null","data":"null","data":"null","status":"0"}]';

	// ini untuk read file tesis.json

	$tesistxt = fopen($path.$nama_file, "r") or die($string_null);

	$isi_text_tesistxt =  fread($tesistxt,filesize($path.$nama_file));

	fclose($tesistxt);


	//$isi_text_tesistxt = "[".$isi_text_tesistxt."]";

	$isi_text_tesistxt = $isi_text_tesistxt;

	$isi_text_tesistxt = str_replace(",]","]", $isi_text_tesistxt);


	echo $isi_text_tesistxt;

?>