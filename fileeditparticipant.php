<?php 
    if(isset($_POST['fn'])){
        $fn = $_POST['fn'];
        $con = $_POST['txt'];
        $file = fopen($fn, "r+");
        ftruncate($file, 0);
        fwrite($file, $con);
        fclose($file);
        header("Location: http://localhost/secretpr/$fn");
    }
?>