<?php

    // $myfile = 'example.txt';
    // $openfile = fopen($myfile, 'r');

    // if (!$openfile) {
    //     echo "File cannot be opened";
    //     die;
    // } 
    
    // $filesize = filesize($myfile);
    // $readFile = fread($openfile, $filesize);
    // fclose($openfile);

    // echo $readFile;

    $myFile = 'new.txt';
    $openFile = fopen($myFile,'w+');

    if(!$openFile) {
        echo 'File cannot be opened';
        die();
    }

    $fileSize = filesize($myFile);
    $myContent = "Hello world! I am learning PHP";
    $writeFile = fwrite($openFile, $myContent);
    fclose($openFile);

    file_put_contents("log.txt", $myContent . "\n", FILE_APPEND);
    
    echo nl2br(file_get_contents("log.txt"));

?>
<br>


