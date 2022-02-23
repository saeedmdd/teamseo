<?php

include "../assets/php/connection.php";
include "assets/php/persiancalender.php";

    function render_article_list(){
        include "../assets/php/connection.php";
        $query = "SELECT * FROM `categories`";
        $result = mysqli_query($connection , $query);

        while($cat = mysqli_fetch_assoc($result)){
            // category render number
            $q = "SELECT * FROM `articles` JOIN `categories` ON articles.article_category_id= categories.categoryID where articles.article_category_id = '".$cat['categoryID']."'";
            $res = mysqli_query($connection , $q);
            $category_number = mysqli_num_rows($res);

//            persian calender
            $G_date = explode("-",$cat["category_registration_date"]);
            $year =$G_date[0];
            $month =$G_date[1];
            $day =$G_date[2];
            $perdate = gregorian_to_jalali($year , $month , $day);
            $p_date = implode(" / ",$perdate);

            echo  '<tr>
                        <td>
                            '.$cat["categoryID"].'
                        </td>
                        <td>'.$cat["categoryName"].'</td>
                        <td dir="ltr">
                            '.$category_number.'
                        </td>
                        <td dir="ltr">
                            '.$p_date.'
                        </td>
                        <td>
                            <button class="btn btn-danger" onclick="are_you_sure('.$cat["categoryID"].')">حذف</button>
                            <a href="edit-article.php?postid='.$cat["categoryID"].'"><button class="btn btn-success">ویرایش</button></a>
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
    <title>Categories</title>
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
                        <!-- category -->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary d-flex justify-content-between">
                                    <h4 class="card-title pt-3">فهرست دسته بندی ها</h4>
                                    <a href="add-new-category.php"><button class="btn btn-warning">افزودن کتگوری</button></a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- data tabel -->
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    شناسه دسته بندی
                                                </th>
                                                <th>
                                                    نام دسته بندی
                                                </th>
                                                <th>
                                                    تعداد مقالات دسته
                                                </th>
                                                <th>
                                                    تاریخ ثبت دسته
                                                </th>
                                                <th>اقدامات</th>
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
            var element = document.getElementById("side3");
            element.classList.add("active");
        }
        myFunction()
    </script>
</body>

</html>