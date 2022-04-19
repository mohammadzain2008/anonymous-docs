<?php 
    if(isset($_POST['fn'])){
        $fn = $_POST['fn'];
        header("Location: http://localhost/secretpr/files/$fn.txt");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST file</title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
        <a href="index.html" class="link">Home</a>
        <a href="fileform.html" class="link">Create a File</a>
        <a href="downloadfile.php" class="link">Download a File</a>
        <a href="deletefile.php" class="link">Delete a File</a>
        <a href="readfolder.php" class="link">View a (<i>lost</i>) Folder</a>
        <a href="deletefolder.php" class="link">Delete a Folder</a>
        <a href="editfiledatacollector.php" class="link">Edit your File</a>
    </div>
    <h1>Find your written file here....</h1>
    <form action="getfile.php" method="POST">
        File Name: <input type="text" name="fn" id="fn">
        <button type="submit">Find your File</button>
    </form>
</body>
</html>