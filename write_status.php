<?php
    $statusJson = $_GET["status_json"];

    if(!$statusJson) {
        echo 'No se recibió el parámetro "status_json"';
    } else {
        $filename = 'status_mazmorra.txt';
        
        try {
            $file = fopen($filename, 'wb');
            fwrite($file, $statusJson);
            fclose($file);
            echo 'OK';
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
?>