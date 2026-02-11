<?php
$file=fopen("lock.txt","w");
if(flock($file,LOCK_EX)){
    fwrite($file,"locked and writing to file");
    flock($file,LOCK_UN);
}
fclose($file);
echo"file locking example completed";
?>
