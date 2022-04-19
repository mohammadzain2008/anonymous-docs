<?php
$editable = false;
if (isset($_GET['name'])) {
    $fname = $_GET['name'];
    $actual = 'files/' . $fname . '.txt';
    if (is_file($actual)) {
        $editable = true;
    } 
    else {
        die("File doesn't exist");
    }
    $file = fopen('files/' . $fname . '.txt', "r");
    $content = fread($file, filesize($actual));
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit your files here.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="master.css">
</head>

<body>
    <div class="navbar">
        <a href="index.html" class="link">Home</a>
        <a href="getfile.php" class="link">View a File</a>
        <a href="downloadfile.php" class="link">Download a File</a>
        <a href="deletefile.php" class="link">Delete a File</a>
        <a href="readfolder.php" class="link">View a (<i>lost</i>) Folder</a>
        <a href="deletefolder.php" class="link">Delete a Folder</a>
    </div>
    <h1>Edit your files here....</h1>
    <?php
    if ($editable == true) {
        echo "<form action='fileeditparticipant.php' method='post'>
        File Name: <input id='fn' name='fn' type='text' value='$actual' readonly><br>
        Edit File Content: <textarea cols=100 rows=25 id='txt' name='txt'>$content</textarea>
        <br>
        <button type='submit'>Submit</button>
    </form>";
    } else {
        echo '<form action="editfiledatacollector.php" method="get">
            Enter File Name: <input type="text" name="name" id="name">
            <button type="submit">Get File</button>
        </form>';
    }
    ?>
</body>

</html>