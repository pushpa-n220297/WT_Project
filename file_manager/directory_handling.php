<?php
  $files=scandir(".");
  echo"<h3>Files in current directory</h3>";
  foreach($files as $file){
    echo $file."<br>";
  }
  echo"<br>current directory:".getcwd();
?>