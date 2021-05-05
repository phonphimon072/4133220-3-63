<?php
require "../conDB.php";

$id = $_GET['id'];

try{
  echo  $SQL = "DELETE FROM tb_member
            WHERE member_id = '$id'
            ";
    $conn->query($SQL);
}
catch(Exception $e){
    echo $e->getMessage();
}
?>