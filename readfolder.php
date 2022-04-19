
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Folder</title>
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
        <a href="deletefolder.php" class="link">Delete a Folder</a>
        <a href="editfiledatacollector.php" class="link">Edit your File</a>
    </div>
    <h1>Get your folder contents here...</h1>
    <form action="readfolder.php" method="POST">
        Your Name: <input type="text" name="name" id="name" required>
        <br>
        Your Code:<input type="password" name="code" id="code" required>
        <button type="submit">Find your Folder...</button>
    </form>
    <br><br><br><br><br><br><br><br><br>
    <?php 
        error_reporting(0);
        ini_set('display_errors', 0);
        $fl = false;
        $dd = 9;
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $pass = $_POST['code'];
        $mdpass = md5($pass);
        $dir = scandir("files/$name.$mdpass/");
        if(!$dir){
            $dd = 10;
        }
        else{
            $fl = true;
        }
        $len = sizeof($dir);
        if($len == 2){
            die("<br><br><h4 style='text-align: center; color:red;'>No files in this folder!</h4>");
        }
        if($dd == 9){
            echo "<h3 style='text-align: center;'>Contents:</h3>";
        }
        echo "<div style='text-align:center;'>";
        for ($in=2; $in <= $len-1; $in++) { 
            echo "<br><a style='color:blue; text-decoration:none;' href='files/$name.$mdpass/$dir[$in]'>$dir[$in]</a>" . "<br>";
        }
        echo "</div>";
    }
?>
    <h3 style="color: red; text-align:center;"><?php 
        if($dd == 10){
            echo "This Folder Doesn't Exist!";
        }
    ?></h3>
</body>
</html>