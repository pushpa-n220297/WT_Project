<?php
/*$f=fopen("sample.txt","r");
$f=fopen("mode.txt","w");
fwrite($f,"this erases old data.");
fclose($f);
$f=fopen("mode.txt","a");
fwrite($f,"this is appended data.");
fclose($f);
$f=fopen("newfile.txt","x");
fwrite($f,"this is new file."); 
fclose($f);*/
$f=fopen("sample.txt","r+");
fclose($f);
$f=fopen("mode2.txt","w+");
fclose($f);
$f=fopen("mode2.txt","a+");
fclose($f);
$f=fopen("newfile2.txt","x+");
fclose($f);
echo"all file modes executed";
?>