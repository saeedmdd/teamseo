<?php
include "../assets/php/connection.php";
include "assets/php/persiancalender.php";
if (isset($_GET['authorid'])){
    $query_edit = "SELECT * FROM `author` WHERE authorID='".$_GET['authorid']."'";
    $query_edit = mysqli_query($connection,$query_edit);
    $query_edit = mysqli_fetch_assoc($query_edit);
    if (isset($_POST['editsubmit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $quote = $_POST['quote'];
        $authorIMG = checkIMG();
        $date = date("Y-m-d" , time());
        $query_update = "UPDATE `author` SET `firstname`='".$firstname."',`lastname`='".$lastname."',`author_quote`='".$quote."',`author_username`='".$username."',`author_image`='".$authorIMG."',`enter_date`='".$date."' WHERE authorID='".$_GET['authorid']."'";
        if (mysqli_query($connection,$query_update) ){
            header("Location: author.php");
        }

    }

}
 if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $quote = $_POST['quote'];
    $authorIMG = checkIMG();
    $date = date("Y-m-d" , time());

    $query ="INSERT INTO `author` VALUES ('','".$firstname."', '".$lastname."','".$quote."','".$username."','".$authorIMG."','".$date."')";
    if ( mysqli_query($connection , $query)) {
        header("LOCATION: author.php");
    }
}

function checkIMG(){
    $target_dir = "assets/file-uploading/authors/";
    $target_file = $target_dir.time()."-".basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
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
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". time()."-".htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            return $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
    include ("assets/php/head.php");
    ?>
    <title>Add Articles</title>
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
                    <!-- articles  -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary d-flex justify-content-between">
                                <h4 class="card-title pt-3">افزودن نویسنده</h4>
                                <a href="author.php"><button class="btn btn-info">برگشت</button></a>
                            </div>
                            <div class="card-body">
                                <!-- form -->
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating"> نام </label>
                                                <input type="text" class="form-control" name="firstname"  required value="<?php if (isset($_GET['authorid'])) echo $query_edit['firstname']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">نام خانوادگی</label>
                                                <input type="text" class="form-control" name="lastname"  required value="<?php if (isset($_GET['authorid'])) echo $query_edit['lastname']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">نام کاربری نویسنده</label>
                                                <input type="text" class="form-control" name="username" placeholder="@example"  required value="<?php if (isset($_GET['authorid'])) echo $query_edit['author_username']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">یک نقل قول کوتاه از نویسنده</label>
                                                <input type="text" class="form-control" name="quote" placeholder="محدود تا 255 کاراکتر"  required value="<?php if (isset($_GET['authorid'])) echo $query_edit['author_quote']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <fieldset>
                                                <label class="bmd-label-floating"> عکس از نویسنده + </label>
                                                <input type="file" id="fileToUpload" name="fileToUpload" <?php if (!isset($_GET['authorid'])) echo "required"; ?> value="<?php if (isset($_GET['authorid'])) echo $query_edit['author_image']; ?>">
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary" name="<?php if (isset($_GET['authorid'])) echo 'editsubmit'; else echo 'submit'; ?>"><?php if (isset($_GET['authorid'])) echo 'ویرایش نویسنده'; else echo 'ثبت نام نویسنده'; ?> </button>
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

</body>
</html>
