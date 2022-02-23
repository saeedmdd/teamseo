<?php
include "../assets/php/connection.php";
include "assets/php/persiancalender.php";


if (isset($_POST['submit'])) {
    $categoryName = $_POST['categoryName'];
    $date = date("Y-m-d" , time());

    $query ="INSERT INTO `categories` VALUES ('','".$categoryName."','".$date."')";
    $res = mysqli_query($connection , $query);

    header("LOCATION: categories.php");

}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
    include("assets/php/head.php");
    ?>
    <title>Add Category</title>
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
                    <!-- category  -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary d-flex justify-content-between">
                                <h4 class="card-title pt-3">افزودن مقاله شما</h4>
                                <a href="categories.php"><button class="btn btn-info">برگشت</button></a>
                            </div>
                            <div class="card-body">
                                <!-- form -->
                                <form method="post" enctype="multipart/form-data" action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">نام دسته بندی</label>
                                                <input type="text" class="form-control" name="categoryName" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-center p-2">
                                            <button type="submit" class="btn btn-primary" name="submit" onclick="addNewCategory()">ثبت  کتگوری </button>
                                        </div>
                                    </div>
                                </form>
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
<script src="../assets/plugins/ckeditor/ckeditor.js"></script>
<script src="../assets/plugins/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
    if ($('#new_editor').length) {
        var editor = CKEDITOR.replace('new_editor');
        CKFinder.setupCKEditor(editor);
    }
</script>


<script>
    function addNewCategory(){
        let firstname = $('[name="firstname"]').val();
        let lastname = $('[name="lastname"]').val();
        let username = $('[name="username"]').val();
        let quote = $('[name="quote"]').val();
        let category = $('[name="category"]').val();
        let article_date = $('[name="article_date"]').val();
        let article_title = $('[name="article-title"]').val();
        let article_shortdes = $('[name="article-shortdes"]').val();
        let article_banner_img = $('[name="article-banner-img"]').val();
        article_banner_img =  article_banner_img.slice(12);
        let author_article_banner_img = $('[name="author-article-banner-img"]').val();
        author_article_banner_img =  author_article_banner_img.slice(12);
        let article_fullcontent = CKEDITOR.instances.new_editor.getData();

        $.post("assets/php/add_new_article.php",
            {
                firstname: firstname,
                lastname : lastname,
                username : username,
                quote : quote,
                category : category,
                article_date : article_date,
                article_title : article_title,
                article_shortdes : article_shortdes,
                article_banner_img : article_banner_img,
                author_article_banner_img : author_article_banner_img,
                article_fullcontent : article_fullcontent,
            },
            function(result){
                var result = json.parse(result);
                if (result.status == "success"){
                    alert(result.msg);
                    window.location.href("articles.php");
                }else{
                    alert("unsuccessful");
                }
            });
    }
</script>

</body>
</html>
