<?php
$db = mysqli_connect("localhost", "root", "", "sklep_roslinny");

function execute_file($db, $path){
    $myfile = fopen($path, "r") or die("Unable to open file!");
    $filecontent = fread($myfile,filesize($path));
    fclose($myfile);

    mysqli_multi_query($db, $filecontent);
}

execute_file($db, "tables/users.sql");
execute_file($db, "tables/orders.sql");
execute_file($db, "tables/addresses.sql");
execute_file($db, "tables/categories.sql");
execute_file($db, "tables/products.sql");
execute_file($db, "tables/order_contents.sql");