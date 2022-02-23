<?php
include "../../../assets/php/connection.php";

$postid = $_GET['artID'];
$imgID = $_GET['imgID'];


$query ="DELETE FROM `articles` WHERE 'articleID' ='".$postid."'";
$res = mysqli_query($connection , $query);

if($res == 1){
    echo "deleting row was successfull";
    unlink($imgID);
    header("LOCATION: ../../articles.php");

}else{
    echo "unable tto delete a row from database";
}
