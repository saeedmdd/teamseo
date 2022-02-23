<?php include ("assets/php/connection.php");
$errors = [];
$status = true;
if (isset($_POST['submit-form'])) {



        if (empty($_POST['Company'])) {
            array_push($errors, "بخش url را کامل کنید");
            $status = false;
        }
        if (empty($_POST['phone'])) {
            array_push($errors, "شماره تلفن خود را وارد کنید");
            $status = false;
        }

        if (!empty($_POST['phone'])) {
			if(is_numeric($_POST['phone'])){
			
			}else{
			$status = false;
			array_push($errors , "شماره موبایل را به عدد وارد کنید هکر عزیز راه های نفوذ بسته است");
			}

            if (strlen($_POST['phone']) > 11 || strlen($_POST['phone']) < 11) {
                array_push($errors, 'شماره موبایل باید یازده حرف باشد و با صفر شروع شود');
                $status = false;
            }
            if (preg_match("/^09[0-9]{9}$/", $_POST['phone'])) {

            } else {
                array_push($errors, "شماره موبایل معتبر نیست");
                $status = false;
            }
        }
        $email = $_POST['email'];
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        } else {
            array_push($errors,"$email,'ایمیل معتبر وارد کنید'");

            $status = false;
        }
        if ($status) {

            $unique = "INSERT INTO `email`(`fullname`, `email`, `phonenumber`, `url`, `description`) VALUES ('".htmlspecialchars($_POST['username'])."','".htmlspecialchars($_POST['email'])."','".htmlspecialchars($_POST['phone'])."','".htmlspecialchars($_POST['Company'])."','".htmlspecialchars($_POST['message'])."')";
            $unique = mysqli_query($connection, $unique);
            array_push($errors , "پیام شما ارسال شد");

        }

}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php include ("assets/php/head.php");?>
    <title>تیم سئو | تماس با ما</title>
</head>
<body>
<div class="page-wrapper rtl">
    <?php
    // preloader
    include "assets/php/preloader.php";
    // header
    include ("assets/php/header.php");
    //about-us
    echo '<div class="form-back-drop"></div>';
    include "assets/php/about_us.php";
    ?>

    <!--banner title-->
    <section class="page-title" style="background-image:url(assets/images/background/22.png);">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box"><h1>تماس با ما</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">خانه</a></li>
                        <li>تماس با ما</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--    main-->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="row">
                <div class="form-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
<!--                        title-->
                        <div class="sec-title text-center"><h6 class="subtitle">کافیست تا اقدام کنید</h6>
                            <h2>تعلل نکنید  <br/> همین حالا با ما تماس بگیرید</h2></div>
<!--                        form-->
                        <div class="contact-form">
                            <form method="post" action="" id="contact-form">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text"
                                               name="username"
                                               placeholder="نام و نام خانوادگی"
                                               required="">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="number" name="phone"
                                               placeholder="شماره همراه"
                                               required="">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text"
                                               name="Company"
                                               placeholder="آدرس سایت">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="email"
                                               name="email"
                                               placeholder="ایمیل"
                                               required="">
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="پیام کوتاه شما"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text">
                                        <button class="theme-btn btn-style-one"  name="submit-form">
                                            <span class="txt">ثبت و ارسال</span>
                                        </button>
                                    </div>
                                </div>
                                <ul>
                                    <?php
                                    foreach ($errors as $error){
                                        echo '<li>'.$error.'</li>';
                                    }

                                    ?>

                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
<!--                map-->
                <div class="map-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="map-outer">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1361.287847268963!2d51.41218520610801!3d35.75802081308623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1632215314844!5m2!1sen!2s" width="1170" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
<!--                get in touch data-->
                <div class="contact-column col-lg-12 col-md-12 col-sm-12">
                    <div class="contact-info">
                        <div class="row">
                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <div class="icon-box"><i class="flaticon flaticon-stopwatch"></i></div>
                                    <div class="text-box"><h4>زمان</h4>
                                        <p> هر روز هفته  |  10:00am to 16:00pm <br/>جمعه ها تعطیل </p></div>
                                </div>
                            </div>
                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <div class="icon-box"><i class="flaticon flaticon-pin"></i></div>
                                    <div class="text-box"><h4>مکان</h4>
                                        <p> تهران ، میدان ونک ، نبش گاندی شمالی ، پلاک 2 ، طبقه 2 ، واحد 3</p></div>
                                </div>
                            </div>
                            <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner">
                                    <div class="icon-box"><i class="flaticon flaticon-call"></i></div>
                                    <div class="text-box"><h4>ایمیل / تماس</h4>
                                        <a href="tel:+989126827403" >09126827403</a>
                                        <span> | </span>
                                        <a href="tel:+989226287473" >09226287473</a>
                                        <p><a href="mailto:info@teamseo.ir">info@teamseo.ir</a></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    //subscribe email
    include "assets/php/subscribe_email.php";
    //footer
    include "assets/php/redfooter.php";
    ?>
</div>
<?php
//color picker
include ("assets/php/colorpicker.php") ;
//scrolling to top
include ("assets/php/scroll_to_top.php");
//scripts
include ("assets/php/script.php");
?>

</body>
</html>