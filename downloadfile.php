
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="navbar">
        <a href="index.html" class="link">Home</a>
        <a href="fileform.html" class="link">Create a File</a>
        <a href="getfile.php" class="link">View a File</a>
        <a href="deletefile.php" class="link">Delete a File</a>
        <a href="readfolder.php" class="link">View a (<i>lost</i>) Folder</a>
        <a href="deletefolder.php" class="link">Delete a Folder</a>
        <a href="editfiledatacollector.php" class="link">Edit your File</a>
    </div>
    <h1>Download your written files here.......</h1>
    <form action="downloadfile.php" method="GET">
        Enter file name: <input type="text" name="fn" id="fn">
        <button type="submit">submit</button>
    </form>
    <br>
    <br>
    <?php 
    if(isset($_GET['fn'])){
        $fn = $_GET['fn'];
        echo "<a href='http://localhost/secretpr/files/$fn.txt' download='$fn.txt'>Download</a>";
    }
?>
</body>
</html>