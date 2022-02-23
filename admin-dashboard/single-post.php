<?php
include "../assets/php/connection.php";
include "assets/php/persiancalender.php";

function render_article_list(){
    $articleID = $_GET['postid'];
    include "../assets/php/connection.php";
    $query = "SELECT * FROM `articles` JOIN `author` ON articles.authorID= author.authorID JOIN `categories` ON articles.article_category_id=categories.categoryID WHERE articleID = '".$articleID."'";
    $result = mysqli_query($connection, $query);
    while ($art = mysqli_fetch_assoc($result)) {

        $G_date = explode("-",$art["article_publish_date"]);
        $year =$G_date[0];
        $month =$G_date[1];
        $day =$G_date[2];
        $perdate = gregorian_to_jalali($year , $month , $day);
        $p_date = implode(" / ",$perdate);

        echo '<div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary d-flex justify-content-between">
                            <h4 class="card-title pt-3">محتوای کامل متن شما</h4>
                            <div>
                                <a href="edit-article.php?postid="><button class="btn btn-warning">ویرایش مقاله</button></a>
                                <a href="articles.php?articleID="><button class="btn btn-info">برگشت</button></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="d-flex justify-content-around">
                                        <figure class="col-6">
                                            <img src="'.$art["article_image"].'" alt="عکس بنر مقاله شما" width="100%" height="300px">
                                           <div class="mt-5 mx-auto">
                                               <h3>
                                                   دسته بندی مقاله :
                                                   <span>'.$art["categoryName"].'</span>
                                               </h3>
                                               <h4>
                                                   نام و نام خانوادگی نویسنده :
                                                    <span>'.$art["firstname"] .' '. $art["lastname"].'</span>
                                               </h4>
                                               <h5>
                                                   تاریخ انتشار :
                                                   <span dir="ltr" >'.$p_date.'</span>
                                               </h5>
                                           </div>
                                        </figure>
                                        <div class="pl-5 col-6">
                                            <h3>'.$art["article_title"].'</h3>
                                            <p >'.$art["article_content"].'</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>';
    };
}

;

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
    include("assets/php/head.php");
    ?>
    <title>Single Articles</title>
</head>

<body class="">
<div class="wrapper ">
    <!-- sidebar-->
    <?php
    include("assets/php/sidebar.php");
    ?>
    <!--main panel-->
    <div class="main-panel">
        <!--            navbar-->
        <?php
        include("assets/php/navbar.php");
        ?>

        <!-- content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- articles -->
                    <?php render_article_list(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "assets/php/script.php";
?>

</body>

</html>