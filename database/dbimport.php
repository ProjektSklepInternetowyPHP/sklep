<?php
$db = mysqli_connect("localhost", "root", "", "sklep_roslinny");

function execute_file($db, $path){

    $myfile = fopen($path, "r") or die("Unable to open file!");
    $filecontent = fread($myfile,filesize($path));
    fclose($myfile);

    mysqli_multi_query($db, $filecontent);
}


execute_file($db, "tables/users.sql");

