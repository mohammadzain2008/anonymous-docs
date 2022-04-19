<?php 
    if(isset($_POST['title'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $name = $_POST['name'];
        $pass = $_POST['code'];
        $fno = rand(0, 1000000);
        $mdpass = md5($pass);
        $dir = mkdir("files/".$name .".". $mdpass, 0777);
        $ftitle = "files/$name.$mdpass/".$title . ".".$fno . ".txt";
        $sliced = $name.".".$mdpass . "/" . $title . "." . $fno;
        $file = fopen($ftitle, "w");
        fwrite($file, "Author: $name \n Title: $title \n File Name: $sliced \n File Link: http://localhost/secretpr/$ftitle \n Download Link: http://localhost/secretpr/downloadfile.php?fn=$sliced\n \n PLEASE MAKE SURE NOT TO SHARE THE FILE NAME OR THE FILE LINK WITH ANYBODY AS DELETION OF THE FILE CAN HAPPEN AND WE ARE NOT RESPONSIBLE FOR IT.... TO COME AND SEE THIS FILE ANYTIME, YOU CAN EITHER GO TO http://localhost/getfile.php AND IN THE 'FILE NAME' BOX ENTER THE FILE NAME OR SIMPLY ACCESS THE FILE AT THE FILE LINK ADDRESS.....  \n ------------------------------------------------ALL EDITS BELOW THIS LINE--------------------------------------------\n \n CONTENT \n");
        fwrite($file, $content);
        header("Location: http://localhost/secretpr/$ftitle");
        fclose($file);
        die();

    }
?>
