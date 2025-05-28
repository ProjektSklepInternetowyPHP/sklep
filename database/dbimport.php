<?php
$db = mysqli_connect("localhost", "root", "", "sklep_ogrodniczy");

function execute_file($path){
    $myfile = fopen($path, "r") or die("Unable to open file!");
    $filecontent = fread($myfile,filesize($path));
    fclose($myfile);

    mysqli_multi_query($db, $filecontent);
}

execute_file("tables/users.sql");