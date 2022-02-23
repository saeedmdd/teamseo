<?php
include "../assets/php/connection.php";
include "assets/php/persiancalender.php";
$query_edit = '';
if (isset($_GET['postid'])){
    $query_edit = "SELECT * FROM articles WHERE articleID = '".$_GET['postid']."'";
    $query_edit = mysqli_query($connection,$query_edit);
    $query_edit = mysqli_fetch_assoc($query_edit);

}
if (isset($_POST['edit'])){
    $username = $_POST['username'];
    $category = $_POST['category'];
    $article_title = $_POST['article-title'];
    $article_shortdesc = $_POST['article-shortdesc'];
    $content = $_POST['new_editor'];
    $authorIMG = checkIMG();
    $date = date("Y-m-d", time());
    $query_update = "UPDATE `articles` SET `authorID`='".$username."',`article_title`='".$article_title."',`article_short_desc`='".$article_shortdesc."',`article_content`='".$content."',`article_category_id`='".$category."',`article_publish_date`='".$date."',`article_image`='".$authorIMG."' WHERE articleID='".$_GET['postid']."'";
    if (mysqli_query($connection,$query_update)){
        header("LOCATION: articles.php?updated");

    }

}


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $category = $_POST['category'];
    $article_title = $_POST['article-title'];
    $article_shortdesc = $_POST['article-shortdesc'];
    $content = $_POST['new_editor'];
    $authorIMG = checkIMG();
    $date = date("Y-m-d", time());

    //    cat



    $query = "INSERT INTO `articles` VALUES ('','" . $username . "',
     '" . $article_title . "','" . $article_shortdesc . "','" . $content . "',
     '" . $category . "','" . $date . "','" . $authorIMG . "','')";
   if ( mysqli_query($connection, $query) ) {

       header("LOCATION: articles.php?success");
   }
}

function checkIMG()
{
    $target_dir = "assets/file-uploading/";
    $target_file = $target_dir . time() . "-" . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . time() . "-" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            return $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function render_category_list(){
    global $query_edit;
    include "../assets/php/connection.php";
    $query = "SELECT * FROM `categories`ORDER BY categories.categoryID ASC";
    $result = mysqli_query($connection, $query);
    while ($cat = mysqli_fetch_assoc($result)) {
        $selected = '';
        if (isset($_GET['postid']) && $cat["categoryID"] == $query_edit['article_category_id']){
            $selected = "selected";
        }
        echo '<option value="'.$cat["categoryID"].'" '.$selected.'>'.$cat["categoryName"].'</option>';
    }
};

?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>

    <?php
    include("assets/php/head.php");
    ?>
    <title>Add Articles</title>
</head>

<body class="">
<div class="wrapper ">
    <!--        sidebar-->
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
                    <!-- articles  -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary d-flex justify-content-between">
                                <h4 class="card-title pt-3">افزودن مقاله شما</h4>
                                <a href="articles.php">
                                    <button class="btn btn-info">برگشت</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <!-- form -->
                                <form method="post" enctype="multipart/form-data" action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">نام کاربری نویسنده</label>
                                                <select name="username" class="form-control">
                                                 <?php
                                                 $q = "SELECT * FROM `author`";
                                                 $result = mysqli_query($connection, $q);
                                               while ($auth = mysqli_fetch_assoc($result)) {
                                                   $selected = '';
                                                   if (isset($_GET['postid']) && $auth["authorID"] == $query_edit['authorID']){
                                                       $selected = "selected";
                                                   }
                                                   echo '<option '.$selected.' value="' . $auth['authorID'] . '">' . $auth['author_username'] . '</option>';
                                                 }
                                                 ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">دسته بندی مقاله</label>
                                                <select class="form-control" name="category" required>
                                                    <option value="0">انتخاب کنید...</option>
                                                    <?php
                                                    render_category_list();
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">عنوان مقاله</label>
                                                <input type="text" class="form-control" name="article-title" required value="<?php if (isset($_GET['postid'])) echo $query_edit['article_title'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">توضیح مختصر درباره مقاله</label>
                                                <input type="text" class="form-control" name="article-shortdesc" required value="<?php if (isset($_GET['postid'])) echo $query_edit['article_short_desc']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label class="bmd-label-floating"> عکس بنر مقاله + </label>
                                                <input type="file" id="fileToUpload" name="fileToUpload" <?php if (!isset($_GET['postid'])) echo 'required'; ?> value="<?php if (isset($_GET['postid'])) echo $query_edit['article_image']; ?>">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">متن محتوای شما</label>
                                                    <textarea name='new_editor' class=" ckeditor" rows="5" required><?php if (isset($_GET['postid'])) echo $query_edit['article_content']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary"  name="<?php if (isset($_GET['postid'])) echo 'edit'; else echo 'submit'?>"><?php if (isset($_GET['postid'])) echo 'ویرایش مقاله'; else echo 'ثبت و ارسال مقاله'; ?>
                                            </button>
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