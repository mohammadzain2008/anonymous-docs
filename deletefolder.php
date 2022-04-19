<?php
error_reporting(0);
    ini_set('display_errors', 0);
if (isset($_GET['name'])) {
    $deletion = false;
    $name = $_GET['name'];
    $mdpass = md5($_GET['code']);
    $files = glob("files/$name.$mdpass/*"); // get all file names
    foreach ($files as $file) { // iterate files
        if (is_file($file)) {
            unlink($file); // delete file
        }
    }
    $rm = rmdir("files/$name.$mdpass/");
    if (!$rm) {
        $deletion = false;
    } else {
        $deletion = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete a folder</title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="navbar">
        <a href="index.html" class="link">Home</a>
        <a href="fileform.html" class="link">Create a File</a>
        <a href="getfile.php" class="link">View a File</a>
        <a href="downloadfile.php" class="link">Download a File</a>
        <a href="deletefile.php" class="link">Delete a File</a>
        <a href="readfolder.php" class="link">Find a (<i>lost</i>) Folder</a>
        <a href="editfiledatacollector.php" class="link">Edit your File</a>
    </div>
    <form action="deletefolder.php" method="get">
        Enter your name: <input type="text" id="name" name="name">
        <br>
        Enter your secret Code: <input type="text" name="code" id="code">
        <br>
        <button type="submit">Delete Folder</button>
        <br><br>
        <?php
        if (isset($_GET['name'])) {
            if ($deletion == true) {
                echo "<h4 style='color: green; text-align:center;'> Directory Successfully Deleted!</h4>";
            } else {
                echo "<h4 style='color: red; text-align:center;'> Directory Not Found!";
            }
        }
        ?>
    </form>
</body>

</html>