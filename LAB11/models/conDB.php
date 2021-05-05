<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$host = "sql105.byethost7.com";
$user = "b7_28397938";
$pass = "R@A8F81F";
$db = "b7_28397938_tb_member";

try{
    $conn = new mysqli($host,$user,$pass,$db);
    //echo "Connected !!"
}
catch (Exception $e){
    echo $e->getMessage();
}

?>