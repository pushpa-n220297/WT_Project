<?php
$file="sample.txt";
if(file_exists($file)){
    echo"File Size:".filesize($file)."<br>";
    echo "File Type:".filetype($file)."<br>";
    echo"Last Modified:".date("d-m-Y H:i:s",filemtime($file))."<br>";
    echo"created time:".date("d-m-Y H:i:s",filectime($file))."<br>";
    echo"last access:".date("d-m-Y H:i:s",fileatime($file))."<br>";
}
?>