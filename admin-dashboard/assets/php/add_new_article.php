<?php
include "../assets/php/connection.php";
include "assets/php/persiancalender.php";


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$quote = $_POST['quote'];
$category = $_POST['category'];
$article_date = $_POST['article_date'];
$article_title = $_POST['article_title'];
$article_shortdes = $_POST['article_shortdes'];
$article_banner_img = $_POST['article_banner_img'];
$author_article_banner_img = $_POST['author_article_banner_img'];
$article_fullcontent = $_POST['article_fullcontent'];

if ((!empty($firstname) && strlen($firstname) >= 1) ||
    (!empty($lastname) && strlen($lastname) >= 2) ||
    (!empty($username) && strlen($username) >= 2) ||
    (!empty($quote) && strlen($quote) >= 2) ||
    (!empty($category) && strlen($category) >= 2) ||
    (!empty($article_date) && strlen($article_date) >= 5) ||
    (!empty($article_title) && strlen($article_title) >= 5) ||
    (!empty($article_shortdes) && strlen($article_shortdes) >= 10) ||
    (!empty($article_banner_img) && strlen($article_banner_img) >= 2) ||
    (!empty($author_article_banner_img) && strlen($author_article_banner_img) >= 2) ||
    (!empty($article_fullcontent) && strlen($article_fullcontent) >= 50)) {
    $query = "select *  FROM `author`";
    $res = mysqli_query($connection, $query);
    $res = mysqli_fetch_assoc($res);
    if ($res['firstname'] == $firstname) {
        if ($res['lastname'] == $lastname) {
            if ($res['username'] == $username) {
                $author_article_banner_img = substr_replace($author_article_banner_img, "assets/file-uploading/authors/", 0, 0); //here we readdress the true location of author img
                if ($res['author_article_banner_img'] == $author_article_banner_img) {
//                    author
                    $query1 = "select *  FROM `author` where author_username = '".$username."' ";
                    $resu = mysqli_query($connection, $query1);
                    $resu = mysqli_fetch_assoc($resu);
//                    category
                    $query2 = "select *  FROM `categories` where categoryName = '".$category."'";
                    $resul = mysqli_query($connection, $query2);
                    $resul = mysqli_fetch_assoc($resul);
//                  insertation
                    $query3 = "INSERT INTO `articles` VALUES ('".$resu['authorID']."','".$article_title."','".$article_shortdes."',
                                '".$article_fullcontent."','".$resul['categoryID']."','".$article_date."','".$article_banner_img."')";
                    $result = mysqli_query($connection, $query3);
                    $result = mysqli_fetch_assoc($result);

                    if ($result) {
                        $result1 = json_encode(array('msg' => "Connected successfully", 'status' => "success"));
                        print_r($result1);
                    } else {
                        $result2 = json_encode(array('msg' => "Connected was NOT successfully", 'status' => "failed"));
                        print_r($result2);
                    }

                } else {
                    json_encode(array('msg' => "you should use your banner image , your banner image as author doesnt match with your registration", 'status' => "error"));
                }
            } else {
                json_encode(array('msg' => "you should use your username , your username doesnt match with your registration", 'status' => "error"));
            }
        } else {
            json_encode(array('msg' => "you should use your lastname , your lastname doesnt match with your registration", 'status' => "error"));
        }
    } else {
        json_encode(array('msg' => "you should use your firstname , your firstname doesnt match with your registration", 'status' => "error"));
    }
} else {
    json_encode(array('msg' => "you should fill all the fields", 'status' => "error"));
};
