<?php
//mkdir("testfolder");
//copy("sample.txt","testfolder/copied.txt");
rename("sample2.txt","renamed.txt");
unlink("testfolder/copied.txt");
rmdir("testfolder");
?>