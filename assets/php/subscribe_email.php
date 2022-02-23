<!--    خبرنامه و ایمیل -->
<?php
$errorskh = [];
if (isset($_POST['khabar'])){
    $status = true;
    if (filter_var($_POST['emailkh'], FILTER_VALIDATE_EMAIL)) {

    } else {
        $emailkh = $_POST['emailkh'];
        array_push($errorskh,"$emailkh,'ایمیل معتبر وارد کنید'");

        $status = false;
    }
    if ($status){
    $khabar = "INSERT INTO `khbar`(`emailkh`, `urlkh`) VALUES ('".htmlspecialchars($_POST['emailkh'])."','".htmlspecialchars($_POST['urlkh'])."')";
    $khabar = mysqli_query($connection , $khabar);
    }
}
?>
<section class="newsletter-section margin-bottom">
    <div class="auto-container">
        <div class="inner-container" style="background-image: url(assets/images/resource/newsletter.png);">
            <div class="row clearfix">
                <div class="form-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column"><h2>با ما در خبرنامه همراه شوید:</h2>
                        <div class="emailed-form">
                            <form method="post"  name="khabar">
                                <div class="form-group">
                                    <input type="text" name="urlkh" value=""
                                           placeholder="ادرس وبسایت اخیاری " >
                                    <input type="email" name="emailkh" value="" placeholder="ایمیل اجباری*" required>
                                    <button name="khabar" class="theme-btn btn-style-one buy-btn">
                                        <span class="txt">عضو شوید</span>
                                    </button>

                                </div>
                                <ul>
                                    <?php
                                    foreach ($errorskh as $errorkh){
                                        echo '<li>'.$errorkh.'</li>';
                                    }

                                    ?>

                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>