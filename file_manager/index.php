<!DOCTYPE html>
<html>
    <head>
        <title>file upload system</title>
    </head>
    <body>
        <h2>upload file</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label>Select File:</label> 
            <input type="file" name="myfile" required>
            <button type="submit" name="upload">UPLOAD</button>
        </form>
    </body>
</html>