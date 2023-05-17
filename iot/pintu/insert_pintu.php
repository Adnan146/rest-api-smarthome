<?php
    $id        = $_GET['id'];
    $nama_file = $id. ".json";
    $data_kirim = array(
        $_GET
    );
    $dataObject_insert = json_encode($data_kirim);
    echo $dataObject_insert;
    $path = "data/";
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    $dataObject_insert = substr($dataObject_insert, 1);

    $dataObject_insert = substr_replace($dataObject_insert, "", -1);

    $dataObject_insert = $dataObject_insert;

    // ini untuk WRITE tesis.json

    $myfile = fopen($path.$nama_file, "w") or die("Unable to open file!");

    fwrite($myfile, $dataObject_insert);

    fclose($myfile);

?>