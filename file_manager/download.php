<?php
if(isset($_GET['file'])){
    $file="uploads/".$_GET['file'];
    if(file_exists($file)){
        header("Content-Type:application/octet-stream");
        header("Content-Disposition attachement;filename".basename($file));
        header("Content-Length:".filesize($file));
        readfile($file);
        exit();
    }
    else{
        echo"file not found";
    }
} 
?>
