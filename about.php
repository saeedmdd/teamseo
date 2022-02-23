<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php
    include ("assets/php/connection.php");
    include ("assets/php/head.php");?>
    <title>تیم سئو | درباره ما</title>
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

<!--    banner and title-->
    <section class="page-title" style="background-image:url(assets/images/background/22.png);">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title-box"><h1>درباره ما</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">خانه</a></li>
                        <li>درباره ما </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!--    main-->
    <!--  description-->
    <section class="about-section " style="background-image: url(assets/images/background/1.png);" id="seo">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-5 offset-lg-1 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <div class="content-box">
                            <div class="sec-title text-left pt-5"><h6 class="subtitle">افزایش ترافیک و افزایش درآمد</h6>
                                <p class="h2">در صفحه اول Google ظاهر شوید!</p></div>
                            <p>ما بازاریاب اینترنتی و شرکت SEO هستیم که بازاریابی وب به صورت نوآورانه را ارائه می دهیم.
                                راه حل هایی برای شرکت های متوسط تا بزرگ در سراسر جهان ارائه میدهیم. به عنوان پیشرو در
                                عرصه
                                ، طراحی وب ، تجارت الکترونیک ،خدمات بازاریابی اینترنتی ، شرکت ما به خدماتی که ارائه
                                میدهد افتخار میکند.
                            </p>
                            <p>ما برای طراحی وب سایت ، سئو و بازاریابی دیجیتال یک تیم در حال گسترش هستیم!</p>

                        </div>
                    </div>
                </div>
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="alphabet-img wow fadeInRight">
                                <img src="assets/images/resource/about-img.png" alt="about img">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--statics-->
    <section class="fun-fact-section">
        <div class="outer-box" style="background-image: url(assets/images/background/8.png);">
            <div class="auto-container">
                <div class="fact-counter">
                    <div class="row">
                        <!-- پروژه انجام شده-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box">
                                <div class="icon-box">
                                    <span class="flaticon flaticon-project-management"></span>
                                </div>
                                <div class="text-box">
                                    <div class="count">
                                        <span class="count-text" data-speed="5000" data-stop="345">0</span><i>+</i>
                                    </div>
                                    <h3 class="counter-title">پروژه های انجام شده</h3></div>
                            </div>
                        </div>
                        <!-- پروژه های موفق-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="count-box">
                                <div class="icon-box"><span class="flaticon flaticon-award"></span></div>
                                <div class="text-box">
                                    <div class="count"><span class="count-text" data-speed="5000"
                                                             data-stop="17">0</span><i>+</i></div>
                                    <h3 class="counter-title">پروژه های موفق</h3></div>
                            </div>
                        </div>
                        <!-- سال ها تجربه -->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="count-box">
                                <div class="icon-box"><span class="flaticon flaticon-user-experience"></span></div>
                                <div class="text-box">
                                    <div class="count"><span class="count-text" data-speed="5000"
                                                             data-stop="10">0</span><i>+</i></div>
                                    <h3 class="counter-title">سال تجربه</h3></div>
                            </div>
                        </div>
                        <!--مشتریان خوشحال-->
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                            <div class="count-box">
                                <div class="icon-box"><span class="flaticon flaticon-diagram"></span></div>
                                <div class="text-box">
                                    <div class="count"><span class="count-text" data-speed="5000"
                                                             data-stop="489">0</span></div>
                                    <h3 class="counter-title">مشتریان خوشحال</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  motivation  -->
    <section class="get-started-sec alternate" style="background-image: url(assets/images/background/20.png);">
        <div class="auto-container">
            <div class="row">
                <div class="col-12 text-center inner-box">
                    <div class="sec-title text-center">
                        <h2>همین حالا سایت خود را ارتقا دهید</h2>
                        <p>تصمیم درست را برای آینده دیجیتالی خود بگیرید!</p>
                        <a href="contact.php" class="theme-btn btn-style-one">
                            <span class="txt">شروع کنید</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  FAQ-->
    <section class="faq-section">
        <div class="auto-container">
            <div class="row">
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/faq-img.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title text-left"><h6 class="subtitle">چرا بهتر است ما را انتخاب کنید:</h6>
                            <h2>با یک شرکت تجربه دار در زمینه سئو  <br/> همکاری کنید</h2></div>
                        <ul class="accordion-box">
                            <li class="accordion block active-block">
                                <div class="acc-btn">جستوجوی حرفه ای درباره کلمات کلیدی و بازار پسند
                                    <div class="icon fa fa-arrow-circle-up"></div>
                                </div>
                                <div class="acc-content">
                                    <div class="content"><p>کلمات کلیدی از جمله مهمترین عناصر جهت معرفی سایت  شما و محصولات شماست.در انتخاب آن باید دقت لازم را به همراه داشته باشید.</p></div>
                                </div>
                            </li>
                            <li class="accordion block ">
                                <div class="acc-btn active">طراحی و تولید محتوا به سبک مدرن و امروزی
                                    <div class="icon fa fa-arrow-circle-up"></div>
                                </div>
                                <div class="acc-content current">
                                    <div class="content"><p>مطالب منتشر شده در سایت شما نیز از جمله مهمترین عناصر جهت معرفی سایت  شما و محصولات شماست.در انتخاب محتوای یونیک و خاص خود نیز باید دقت لازم را به همراه داشته باشید.</p></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  progress bar -->
    <section class="progress-sec">
        <div class="progress-bg"></div>
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="content-box">
                        <div class="sec-title text-left"><h6 class="subtitle">اهداف ما</h6>
                            <p class="h2">بازدید بیشتر برای وبسایت شما <br/> فراهم آوریم</p>
                            <p>به عنوان یک تیم پیشرو در SEO ، طراحی وب ، تجارت الکترونیک ، تبدیل وب سایت و بازاریابی
                                اینترنتی خدمات ، شرکت ما به این خدمات افتخار می کند</p></div>
                        <div class="progress-levels">
                            <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                <div class="progress-header clearfix">
                                    <div class="box-title">رضایت مشتری از سئو</div>
                                    <div class="progress-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="70">0</span>%
                                        </div>
                                    </div>
                                </div>
                                <!-- progress bar -->
                                <div class="progress-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="70"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                <div class="progress-header clearfix">
                                    <div class="box-title">رضایت از مشتری مشاوره</div>
                                    <div class="progress-percentage">
                                        <div class="count-box"><span class="count-text" data-speed="2000"
                                                                     data-stop="55">0</span>%
                                        </div>
                                    </div>
                                </div>
                                <!--  progress bar -->
                                <div class="progress-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="55"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="0ms">
                                <div class="progress-header clearfix">
                                    <div class="box-title">رضایت از طراحی سایت های فارسی</div>
                                    <div class="progress-percentage">
                                        <div class="count-box">
                                            <span class="count-text" data-speed="2000" data-stop="65">0</span>%
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-bar">
                                    <div class="bar-inner">
                                        <div class="bar progress-line" data-width="65"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-cloumn col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure><img src="assets/images/resource/progress-1.png" alt="progress image"></figure>
                        <div class="animated-img-1"></div>
                        <div class="animated-img-2"></div>
                        <div class="animated-img-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- co worked brands-->
<!--    <section class="clients-section">-->
<!--        <div class="auto-container">-->
<!--            <div class="sponsors-outer">-->
<!--                <ul class="sponsors-carousel owl-carousel owl-theme">-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/3.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/4.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/5.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/1.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/2.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/3.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/4.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                    <li class="slide-item">-->
<!--                        <figure class="image-box"><a href="#"><img src="assets/images/clients/5.png" alt=""></a></figure>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <!-- testimonial-->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="row">
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure><img src="assets/images/resource/testimonial.png" alt="Testimonial Image"></figure>
                    </div>
                </div>
                <div class="testimonial-column col-lg-6 col-md-12 col-sm-12">
                    <div class="sec-title"><h6 class="subtitle">نظرات برتر</h6>
                        <p class="h2">برترین چیز هایی که کاربران ما میگویند</p></div>
                    <div class="testimonial-carousel owl-carousel ltr owl-theme">
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="text">“کار با وبسایتم همیشه دلپذیراست ، هم از نظر شخصی و هم از نظر کاری .
                                    اعضای تیم حرفه ای هستند.
                                    تجربه ، تخصص آنها نسبت به آنچه که انجام می دهد و در هر مشاوره ای که می دهند آشکار
                                    است.”
                                </div>
                                <div class="icon-quote"><i class="flaticon flaticon-quote"></i></div>
                                <div class="info-box">
                                    <div class="thumb"><img src="assets/images/resource/thumb.png" alt=""></div>
                                    <div class="text-box"><h4 class="name">م. حدادی</h4> <span class="designation">از طرف شرکت سیتا تجارت</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- order now -->
    <section class="contact-info-section">
        <div class="auto-container">
            <div class="inner-container" style="background-image: url(assets/images/background/5.png)">
                <div class="text-box"><p class="h2">هم اکنون سایت خود را بهینه کنید</p>
                    <p> ما گروهی از متخصصان بازاریابی دیجیتال را انتخاب کردیم.</p></div>
                <div class="contect-box">
                    <a href="contact.php" class="theme-btn btn-style-two">
                        <span class="txt">همین حالا اقدام کنید</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--    footer-->
    <footer class="main-footer style-three" style="background-image: url(assets/images/background/21.png);">
        <div class="auto-container">
            <div class="widgets-section">
                <div class="row">
<!--                    top footer-->
                    <div class="newslatter-column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="row clearfix">
                                <!--  feed new   -->
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="newslatter-form">
                                        <?php
                                        $errorskha= [];
                                            if (isset($_POST['emailkha'])){
                                                if (filter_var($_POST['emailtak'], FILTER_VALIDATE_EMAIL)) {

                                                } else {
                                                    $emailkha = $_POST['emailtak'];
                                                    array_push($errorskha,"$emailkha,'ایمیل معتبر وارد کنید'");

                                                    $status = false;
                                                }

                                                $khabare = "INSERT INTO `khbar`(`emailkh`, `urlkh`) VALUES ('".htmlspecialchars($_POST['emailtak'])."','bedone url')";
                                                $khabare = mysqli_query($connection , $khabare);
                                            }
                                        ?>
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <input type="text" name="emailtak"
                                                       placeholder="آدرس ایمیل خود را وارد نمایید .......">
                                                <button  class="theme-btn btn-style-one" name="emailkha"><span class="txt">ثبت و ارسال کنید</span>
                                                </button>
                                            </div>
                                            <?php
                                            foreach ($errorskha as $errorkha){
                                                echo '<li>'.$errorkha.'</li>';
                                            }

                                            ?>
                                        </form>
                                    </div>
                                </div>
                                <!-- get in touch-->
                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                    <div class="contact-box-footer">
                                        <div class="content-block">
                                            <div class="icon-box"><i class="flaticon flaticon-communication"></i></div>
                                            <div class="text-box">
                                                <a href="tel:+989126827403" >09126827403</a>
                                                <span> | </span>
                                                <a href="tel:+989226287473" >09226287473</a>
                                                <p><a href="mailto:info@teamseo.ir">info@teamseo.ir</a></p>
                                            </div>
                                        </div>
                                        <div class="content-block">
                                            <div class="icon-box"><i class="flaticon flaticon-location"></i></div>
                                            <div class="text-box"><p> تهران ، میدان ونک ، نبش گاندی شمالی ، پلاک 2 ،<br> طبقه 2 ، واحد 3</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    first column - right-->
                    <div class="big-column col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo">
                                        <figure><a href="index.php"><img src="assets/images/logo-2.png" alt=""></a>
                                        </figure>
                                    </div>
<!--                                    short desc-->
                                    <div class="widget-content"><p>تیم سئو برنامه های زیادی را برای آینده برنامه ریزی
                                            کرده است : کار با مشتریان بزرگ و توسعه نرم افزاری مداوم.
                                            اگر دوست دارید به جمع ما بپیوندید.
                                            تیم سئو</p>
<!--                                        icons-->
                                        <ul class="social-icon-two">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" style="padding-top: 6px; padding-left: 1px;">
                                                    <svg style="width: 60%;" xmlns="http://www.w3.org/2000/svg"
                                                         viewBox="0 0 68.33 68.33">
                                                        <defs>
                                                            <style>.cls-1 {
                                                                    fill: #fff;
                                                                }</style>
                                                        </defs>
                                                        <title>icon--white</title>
                                                        <g id="Layer_2" data-name="Layer 2">
                                                            <g id="brand">
                                                                <g id="icon--white">
                                                                    <path class="cls-1"
                                                                          d="M29.49,2,23.2.36A10.58,10.58,0,0,0,10.25,7.87L8.68,13.8A32.4,32.4,0,0,1,29.49,2Z"/>
                                                                    <path class="cls-1"
                                                                          d="M1.9,39.33.36,45.14A10.58,10.58,0,0,0,7.87,58.08l6,1.6A32.41,32.41,0,0,1,1.9,39.33Z"/>
                                                                    <path class="cls-1"
                                                                          d="M60.46,10.25,53.73,8.46a32.4,32.4,0,0,1,12.4,21.7l1.85-7A10.58,10.58,0,0,0,60.46,10.25Z"/>
                                                                    <path class="cls-1"
                                                                          d="M38.69,66.26,45.14,68a10.58,10.58,0,0,0,12.94-7.51l1.82-6.84A32.42,32.42,0,0,1,38.69,66.26Z"/>
                                                                    <path class="cls-1"
                                                                          d="M34.17,4.54A29.63,29.63,0,1,0,63.79,34.17,29.63,29.63,0,0,0,34.17,4.54ZM17.39,19.32a8.46,8.46,0,1,1,6.71,9.91A8.46,8.46,0,0,1,17.39,19.32ZM29.7,44.92A8.46,8.46,0,1,1,23,35,8.46,8.46,0,0,1,29.7,44.92Zm3.59-6.85a3.76,3.76,0,1,1,4.41-3A3.76,3.76,0,0,1,33.29,38.07ZM50.94,49a8.46,8.46,0,1,1-6.71-9.91A8.46,8.46,0,0,1,50.94,49Zm-5.6-15.68a8.46,8.46,0,1,1,9.91-6.71A8.46,8.46,0,0,1,45.34,33.33Z"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    second column - from right-->
                    <div class="big-column col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="row clearfix">
<!--                            usefull links-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget"><h4 class="widget-title">لینک های مفید</h4>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="#">چشم انداز</a></li>
                                            <li><a href="#">رهبری</a></li>
                                            <li><a href="#">پایداری</a></li>
                                            <li><a href="#">مشاغل</a></li>
                                            <li><a href="services.html">خدمات</a></li>
                                        </ul>
                                        <ul class="list">
                                            <li><a href="#">تاریخچه</a></li>
                                            <li><a href="#">SEO</a></li>
                                            <li><a href="#">جوایز</a></li>
                                            <li><a href="blog-classic.html">رسانه ها</a></li>
                                            <li><a href="contact.html">مخاطب</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--contacts-->
                    <div class="footer-column col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget contact-widget"><h4 class="widget-title">مخاطب</h4>
                            <div class="widget-content">
                                <ul class="list-style-one">
                                    <li>
                                        <span class="icon fas fa-phone-volume"></span>
                                        <a href="tel:+989226287473" class="text-light">09226287473</a>
                                    </li>
                                    <li>
                                        <span class="icon fas fa-phone-volume"></span>
                                        <a href="tel:+989126827403" class="text-light">09126827403</a>
                                    </li>
                                    <li><span class="icon fas fa-map-marker-alt"></span>
                                        تهران ، میدان ونک ، نبش گاندی شمالی ، پلاک 2 ، طبقه 2 ، واحد 3
                                    </li>
                                    <li>
                                        <span class="icon fas fa-envelope"></span>
                                        <a href="mailto:info@teamseo.ir" class="text-light">info@teamseo.ir</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom ">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="copyright-text text-center"><p>Copyright © 2021 <a href="#">teamseo.ir</a> All right
                        reserved</p></div>
                </div>
            </div>
        </div>
    </footer>
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