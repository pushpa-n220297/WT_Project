<?php
 $folder="uploads/";
 if(isset($_POST['upload'])){
    $name=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],$folder.$name);
 }
 if(isset($_GET['delete'])){
    unlike($folder.$_GET['delete']);
 }
?>
<h2>Mini File Manager</h2>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit" name="upload">Upload</button>
</form>
<hr>
<h3>uploaded files:</h3>
<?php
$files=scandir($folder);
foreach($files as $file){
    if($file!="." && $file!=".."){
        echo"<br>".$file."</br> |";
        echo"Size:".filesize($folder.$file)."bytes |";
        echo"last modified:".date("d-m-Y H:i:s",filemtime($folder.$file))." |";
        echo"<a href='uploads/$file'download>Download</a> |";
        echo"<a href='?delete=$file'>Delete</a>";
        echo"<br><br>";
    }
}
?>
