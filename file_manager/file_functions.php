<?php
$file=fopen("sample.txt","w");
fwrite($file,"hello PHP file System!");
fclose($file);
$file=fopen("sample.txt","r");
echo fread($file, filesize("sample.txt"));
fclose($file);
echo"<br> <br>";
echo file_get_contents("readme.txt");
file_put_contents("sample2.txt","new file created");
?>