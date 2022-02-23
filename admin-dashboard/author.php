<?php

include "../assets/php/connection.php";
include "assets/php/persiancalender.php";

    function render_article_list(){
        include "../assets/php/connection.php";
        $query = "SELECT * FROM `author`";
        $result = mysqli_query($connection , $query);

        while($auth = mysqli_fetch_assoc($result)){
            //  article render number
            $q = "SELECT * FROM `articles` JOIN `author` ON articles.authorID = author.authorID where articles.authorID = '".$auth['authorID']."'";
            $res = mysqli_query($connection , $q);
            $article_number = mysqli_num_rows($res);

//            persian calender
            $G_date = explode("-",$auth["enter_date"]);
            $year =$G_date[0];
            $month =$G_date[1];
            $day =$G_date[2];
            $perdate = gregorian_to_jalali($year , $month , $day);
            $p_date = implode(" / ",$perdate);

            echo  '<tr>
                        <td>
                            '.$auth["authorID"].'
                        </td>
                        <td>
                            <img src="'.$auth["author_image"].'" alt="" width="100px" height="100px">
                        </td>
                        <td>'.$auth["firstname"].'</td>
                        <td>
                            '.$auth["lastname"].'
                        </td>
                         <td dir="ltr">
                            '.$auth["author_username"].'
                        </td>
                        <td>'.$auth["author_quote"].'</td>
                        <td dir="ltr">
                            '.$p_date.'
                        </td>
                        <td dir="ltr">
                            '.$article_number.'
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="are_you_sure('.$auth["authorID"].')">حذف</button>
                            <a href="add-new-author.php?authorid='.$auth["authorID"].'"><button class="btn btn-success">ویرایش</button></a>
                        </td>
                    </tr>';
        };
    };
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
    include ("assets/php/head.php");
    ?>
    <title>Add Authors</title>
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
                        <!-- authors -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary d-flex justify-content-between">
                                    <h4 class="card-title pt-3">فهرست نویسنده ها</h4>
                                    <a href="add-new-author.php"><button class="btn btn-warning">افزودن نویسنده</button></a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- data tabel -->
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    شناسه نویسنده
                                                </th>
                                                <th>
                                                    عکس نویسنده
                                                </th>
                                                <th>
                                                     نام نویسنده
                                                </th>
                                                <th>
                                                    نام خانوادگی نویسنده
                                                </th>

                                                <th>
                                                   نام کاربری نویسنده
                                                </th>
                                                <th>
                                                    نقل قول کوتاه از نویسنده
                                                </th>
                                                <th>
                                                    تاریخ ورود نویسنده
                                                </th>
                                                <th>
                                                    تعداد مقالات نویسنده
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


<!--    delete -->
    <script>
        function are_you_sure(){
            let boo = confirm("برای حذف مقاله مطمئن هستید؟");
            if (boo = true){
                $.post("delete-article.php",
                    {postid : postid,},
                    function(msg, status){
                    if (status == "success"){
                        var result = json.parse(msg);
                        alert(result);
                        location.reload();
                    }else{
                        alert("unsuccessful");
                    }
                });
            }
        }
    </script>
    <script>
        function myFunction() {
            var element = document.getElementById("side4");
            element.classList.add("active");
        }
        myFunction()
    </script>
</body>
</html>