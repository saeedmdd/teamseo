<?php
include "../assets/php/connection.php";

?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
    include ("assets/php/head.php");
    ?>
    <title> Edit Articles</title>
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
                <!--articles-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary d-flex justify-content-between">
                                    <h4 class="card-title pt-3">افزودن مقاله شما</h4>
                                    <a href="articles.php"><button class="btn btn-info">برگشت</button></a>
                                </div>
                                <div class="card-body">
                                    <!-- form -->
                                    <form action="single-post.php?postid?" method="post" enctype="multipart/form-data" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating"> نام </label>
                                                    <input type="text" class="form-control" name="firstname"  required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">نام خانوادگی</label>
                                                    <input type="text" class="form-control" name="lastname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">نام کاربری نویسنده</label>
                                                    <input type="text" class="form-control" name="username" placeholder="@example" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">یک نقل قول کوتاه از نویسنده</label>
                                                    <input type="text" class="form-control" name="quote" placeholder="محدود تا 255 کاراکتر" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">دسته بندی مقاله</label>
                                                    <select class="form-control" name="category" required>
                                                        <option>انتخاب کنید...</option>
                                                        <option value="male">سئو</option>
                                                        <option value="female">طراحی</option>
                                                        <option value="others">آنالیز</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating"> تاریخ انتشار مقاله</label>
                                                    <input type="date" class="form-control" name="ticket-title" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">عنوان مقاله</label>
                                                    <input type="text" class="form-control" name="article-title" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">توضیح مختصر درباره مقاله</label>
                                                    <input type="text" class="form-control" name="article-shortdesc" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">
                                                        <button class="btn btn-primary"> +  عکس بنر مقاله</button></label>
                                                    <input  type="file" name="fileToUpload article-banner-img" id="fileToUpload" style="z-index: 50;" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">
                                                        <button class="btn btn-primary"> +  عکس از نویسنده مقاله</button></label>
                                                    <input  type="file" name="fileToUpload1 author-article-banner-img" id="fileToUpload1" style="z-index: 50;" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">متن محتوای شما</label>
                                                        <textarea id='new_editor' class="form-control ckeditor" rows="5" name="article-fullcontent" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">ثبت  و  ارسال مقاله</button>
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

</body>

</html>