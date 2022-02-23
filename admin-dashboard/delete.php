<?php
include "../assets/php/connection.php";
if (!isset($_GET['postid'])){
    header("Location: articles.php");
}
else{
    $delete_query = "DELETE FROM `articles`  WHERE  articleID = '" . $_GET['postid'] . "'";
    $delete_logo = "SELECT article_image FROM `articles` WHERE articleID = '" . $_GET['postid'] . "'";
    $delete_logo = mysqli_query($connection, $delete_logo);
    $delete_logo = mysqli_fetch_assoc($delete_logo);
    if (mysqli_query($connection, $delete_query)) {
        unlink($delete_logo['article_image']);
        $redirect = 'Location: articles.php?success';
        header($redirect);
    }
}