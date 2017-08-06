<?php
    $filename = 'status_mazmorra.txt';
        
    try {
        $file = fopen($filename, 'rb');
        $contenido = fread($file, filesize($filename));
        echo $contenido;
    } catch(\Exception $e) {
        echo $e->getMessage();
    }
?>