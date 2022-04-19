<?php 
error_reporting(0);
ini_set('display_errors', 0);
$ff = 9;
    if(isset($_POST['fname'])){
        $dlt = false;
        $fname = $_POST['fname'];
        $s = unlink("files/$fname.txt");
        if(!$s){
            $dlt = false;
            $ff = 10;
        }
        else{
            $dlt = true;
            $ff = 9;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete FIle</title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
        <a href="index.html" class="link">Home</a>
        <a href="fileform.html" class="link">Create a File</a>
        <a href="getfile.php" class="link">View a File</a>
        <a href="downloadfile.php" class="link">Download a File</a>
        <a href="readfolder.php" class="link">View a (<i>lost</i>) Folder</a>
        <a href="deletefolder.php" class="link">Delete a Folder</a>
        <a href="editfiledatacollector.php" class="link">Edit your File</a>
    </div>
    <h1>Delete your written files here.....</h1>
    <form action="deletefile.php" method="post">
        Enter File Name: <input type="text" name="fname" id="fname">
        <button type="submit">Delete</button>
    </form>
    <br><br><br>
    <h3 <?php if($ff == 9){echo "style='color:green; text-align:center;'";} else{echo "style='color: red; text-align:center;'";}?>><?php 
        if($dlt == true){
            echo "File Successfully Deleted!";
        }
        else{
            echo "Either File doesn't exist or an error occured! Try Again.";
        }
    ?></h3>
</body>
</html>