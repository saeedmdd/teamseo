<?php

if (isset($_GET['success'])){
    echo "<script>sweet()</script>";
}
include "../assets/php/connection.php";
include "assets/php/persiancalender.php";
    function render_article_list(){
        include "../assets/php/connection.php";
        $query = "SELECT * FROM `articles` JOIN `author` ON articles.authorID= author.authorID 
                                            JOIN `categories` ON articles.article_category_id=categories.categoryID ORDER BY articles.articleID DESC";
        $result = mysqli_query($connection , $query);

        while($art = mysqli_fetch_assoc($result)){
            //  comment render number
            $q = "SELECT * FROM `articles` JOIN `articlecomments` ON articles.articleID= articlecomments.postID where  articles.articleID = '".$art["articleID"]."'";
            $res = mysqli_query($connection , $q);
            $comment_number = mysqli_num_rows($res);

//            persian calender
            $G_date = explode("-",$art["article_publish_date"]);
            $year =$G_date[0];
            $month =$G_date[1];
            $day =$G_date[2];
            $perdate = gregorian_to_jalali($year , $month , $day);
            $p_date = implode(" / ",$perdate);

            echo  '<tr>
                        <td>
                            '.$art["articleID"].'
                        </td>
                        <td>
                            <img src="'.$art["article_image"].'" alt="" width="100px">
                        </td>
                        <td>'.$art["article_title"].'</td>
                        <td dir="ltr">
                            '.$art["firstname"].' '.' '.' '.$art["lastname"].'
                        </td>
                        <td>
                            <a href="single-post.php?postid='.$art["articleID"].'">برای خواندن بیشتر کلیک کنید</a>
                        </td>
                        <td>'.$art["categoryName"].'</td>
                        <td>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#'.$art["articleID"].'"><span>'.$comment_number.'</span>
                            کامنت</button>
                        </td>
                        <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#s'.$art["articleID"].'">مشاهده بیشتر</button>
                        </td>
                        <td dir="ltr">
                            '.$p_date.'
                        </td>
                        <td><span>'.$art["article_view_num"].'</span> بار</td>
                        <td onclick="return confirm('.'kiram toot'.')" >
                            <a  href="delete.php?postid='.$art["articleID"].'"><span class="btn btn-danger" onclick="are_you_sure('.$art["articleID"].','.$art["article_image"].' )">delete</span></a>
                         
                        </td>
                        <td>
                           <a href="new-article.php?postid='.$art["articleID"].'"><span class="btn btn-success">edit</span></a>
                    </td>
                    </tr>';
            //    cm modals
            rendercommentmodal($art["articleID"]);
            //sort desc modal
            rendershortdescmodal($art["articleID"]);
        };
    };
    function rendercommentmodal($articleid){
        include "../assets/php/connection.php";

        $q = "SELECT * FROM `articlecomments` JOIN `articles` ON articles.articleID= articlecomments.postID
                                              JOIN `users` ON users.userID=articlecomments.userid where articles.articleID = $articleid ";
        $res = mysqli_query($connection , $q);
        $cm = mysqli_fetch_assoc($res);

        echo '<div class="modal fade" id="'.$articleid.'">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header card-header card-header-primary">
                                <h4 class="card-title pt-3">کامنت ها </h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container ">';
        $rest =mysqli_query($connection , $q);
        while($cmc = mysqli_fetch_assoc($rest)){
            //            persian calender
            $G_date = explode("-",$cmc["cm_date"]);
            $year =$G_date[0];
            $month =$G_date[1];
            $day =$G_date[2];
            $perdate = gregorian_to_jalali($year , $month , $day);
            $p_date = implode(" / ",$perdate);

            echo '  <div class="row d-flex justify-content-between">
                        <div>
                            <h6>'.$cmc["fullname"].'</h6>
                            <p class="pl-5">'.$cmc["comment_content"].'</p>
                        </div>
                        <div>
                            <p dir="ltr">'.$p_date.'</p>
                        </div>
                    </div>
                    <hr>
                    <hr>';}
        echo  '</div>
                   </div>
                </div>
            </div>
        </div>';
    };
    function rendershortdescmodal($articleid){
        include "../assets/php/connection.php";
        $q = "SELECT * FROM `articles` where articleID = $articleid ";
        $res = mysqli_query($connection , $q);
        while($des = mysqli_fetch_assoc($res)){
            echo '<div class="modal fade" id="s'.$des["articleID"].'">
                <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header card-header card-header-primary">
                            <h4 class="modal-title">توضیح مختصر</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="container ">
                                <div class="row">
                                    <p class="pl-5">'.$des["article_short_desc"].'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';}}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
    include ("assets/php/head.php");
    ?>
    <title>Articles</title>
</head>

<body class="">
    <div class="wrapper ">
        <!--        sidebar-->
        <?php
        include ("assets/php/sidebar.php") ;
        ?>
        <!--main panel-->
        <div class="main-panel">
            <!--            navbar-->
            <?php
            include ("assets/php/navbar.php") ;
            ?>

            <!-- content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- articles -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary d-flex justify-content-between">
                                    <h4 class="card-title pt-3">فهرست مقالات شما</h4>
                                    <a href="new-article.php"><button class="btn btn-warning">افزودن مقاله</button></a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- data tabel -->
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    شناسه مقاله
                                                </th>
                                                <th>
                                                    عکس مقاله
                                                </th>
                                                <th>
                                                    موضوع
                                                </th>
                                                <th>
                                                    نام و خانوادگی نویسنده
                                                </th>

                                                <th>
                                                   محتوای مقاله
                                                </th>
                                                <th>
                                                    دسته بندی مقاله
                                                </th>
                                                <th>
                                                    کامنت های مقاله
                                                </th>
                                                <th>
                                                    توضیح کوتاه
                                                </th>
                                                <th>
                                                    تاریخ انتشار مقاله
                                                </th>
                                                <th>
                                                    تعداد بازدید
                                                </th>
                                                <th  class="text-center">اقدامات</th>
                                            </thead>
                                            <tbody>
                                                <?php render_article_list() ;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "assets/php/script.php";
    ?>


<!-- delete -->
    <script>
        function are_you_sure(postid,imgID){
            let boo = confirm("برای حذف مقاله مطمئن هستید؟");
            if( boo == true){
                window.location.href = "assets/php/delete-article.php?artID="+postid+"&imgID"+imgID;
            }else{
                return false;
            }
        }
    </script>
    <script>
        function myFunction() {
            var element = document.getElementById("side2");
            element.classList.add("active");
        }
        myFunction()
    </script>
</body>

</html>