<?php
include "assets/php/connection.php";
    if (isset($_GET['articleID']) && $_GET['articleID'] !='') {
        $blog_query = "SELECT * FROM `articles` INNER JOIN `author` ON articles.authorID=author.authorID INNER JOIN `categories` ON categories.categoryID=articles.article_category_id WHERE articleID = '".$_GET['articleID']."'";
        $blog_query = mysqli_query($connection,$blog_query);
        $blog_query = mysqli_fetch_assoc($blog_query);
    }
    else{
        header("Location: blog.php");
    }


?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php include ("assets/php/head.php");?>
    <title>تیم سئو | وبلاگ | جزئیات مقاله </title>
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
                <div class="title-box"><h1>جزئیات مقاله</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">خانه</a></li>
                        <li><a href="blog.php">وبلاگ</a></li>
                        <li>جزئیات مقاله</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<!--    blog detail -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-detail">
                        <div class="news-block style-three">
                            <div class="inner-box">
                        <!--share-->
                                <div class="image-box">

                                    <figure class="image"><img src="admin-dashboard/<?= $blog_query['article_image']; ?>" alt=""></figure>
                                    <div class="overlay-box"><span class="share-button"><i class="fas fa-share-alt"></i></span>
                                        <ul class="social-links">
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" style="padding-top: 6px; padding-left: 1px;">
                                                    <svg style="width: 5%;" xmlns="http://www.w3.org/2000/svg"
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
                        <!--true details-->
                                <div class="caption-box">
                                    <ul class="category">
                                        <li><a href="#">SEO</a></li>
                                        <li><a href="#">Analysis</a></li>
                                    </ul>
                                    <ul class="info">
                                        <li><i class="fas fa-calendar-alt"></i>Feb 18, 2021</li>
                                        <li>|</li>
                                        <li><i class="fas fa-user-alt"></i><?= $blog_query['firstname']." ".$blog_query['lastname']; ?></li>
                                    </ul>
                                    <?= $blog_query['article_content']; ?>
                                </div>
                            </div>
                        </div>
<!--                        share tag-->
<!--                        <div class="tag-share">-->
<!--                            <div class="tags"><span class="title">Tags:</span>-->
<!--                                <ul>-->
<!--                                    <li><a href="#">Business</a></li>-->
<!--                                    <li><a href="#">Financial</a></li>-->
<!--                                    <li><a href="#">Life</a></li>-->
<!--                                    <li><a href="#">Investment</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="share-option"><span class="title">Share This:</span>-->
<!--                                <ul class="social-icon clearfix">-->
<!--                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        about author who published this article-->
                        <div class="authors-box">
                            <div class="author-inner">
                                <div class="thumb"><img src="<?= $blog_query['author_image'] ?>" alt=""></div>
                                <div class="text-box"><h4 class="name"><?= $blog_query['firstname'].' '.$blog_query['lastname']; ?></h4>
                                    <p>روز از نو ، روزی از نو</p>
                                    <ul class="social-icon clearfix">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

<!--                        comments -->
<!--                        <div class="comments-area">-->
<!--                            <div class="group-title"><h3>Comments (3)</h3></div>-->
<!--                            <div class="comment-box">-->
<!--                                <div class="comment">-->
<!--                                    <div class="comment-info">-->
<!--                                        <div class="name">Artho Mria</div>-->
<!--                                        <div class="date">DECEMBER 9, 2020</div>-->
<!--                                    </div>-->
<!--                                    <p>Esse euismod urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus-->
<!--                                        semper contentiones nec ad, nec et tantas delicatissimi.</p> <a href="#"-->
<!--                                                                                                        class="reply-btn">Reply</a>-->
<!--                                    <div class="author-thumb"><img src="assets/images/resource/thumb-7.jpg" alt=""></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="comment-box reply-comment">-->
<!--                                <div class="comment">-->
<!--                                    <div class="comment-info">-->
<!--                                        <div class="name">Morgan Noi</div>-->
<!--                                        <div class="date">DECEMBER 9, 2020</div>-->
<!--                                    </div>-->
<!--                                    <p>Esse euismod urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus-->
<!--                                        semper contentiones nec ad, nec et tantas delicatissimi.</p> <a href="#"-->
<!--                                                                                                        class="reply-btn">Reply</a>-->
<!--                                    <div class="author-thumb"><img src="assets/images/resource/thumb-8.jpg" alt=""></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="comment-box reply-comment reply">-->
<!--                                <div class="comment">-->
<!--                                    <div class="comment-info">-->
<!--                                        <div class="name">James Haldoe</div>-->
<!--                                        <div class="date">DECEMBER 9, 2020</div>-->
<!--                                    </div>-->
<!--                                    <p>Esse euismod urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus-->
<!--                                        semper contentiones nec ad, nec et tantas delicatissimi.</p> <a href="#"-->
<!--                                                                                                        class="reply-btn">Reply</a>-->
<!--                                    <div class="author-thumb"><img src="assets/images/resource/thumb-9.jpg" alt=""></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="comment-box">-->
<!--                                <div class="comment">-->
<!--                                    <div class="comment-info">-->
<!--                                        <div class="name">Artho Mria</div>-->
<!--                                        <div class="date">DECEMBER 9, 2020</div>-->
<!--                                    </div>-->
<!--                                    <p>Esse euismod urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus-->
<!--                                        semper contentiones nec ad, nec et tantas delicatissimi.</p> <a href="#"-->
<!--                                                                                                        class="reply-btn">Reply</a>-->
<!--                                    <div class="author-thumb"><img src="assets/images/resource/thumb-7.jpg" alt=""></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

                        <!--                   comment     form-->
                        <div class="contact-form">
                            <h3>نظر خود را رابراز کنید : </h3>
                            <form method="post" action="" id="contact-form">
                                <div class="row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text"
                                               name="username"
                                               placeholder="نام و نام خانوادگی"
                                               required="">
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                        <input type="text" name="phone"
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
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">
                                            <span class="txt">ثبت و ارسال</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
<!--    side bar-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar default-sidebar">
<!--                        serach box -->
<!--                        <div class="sidebar-widget search-box">-->
<!--                            <form method="post" action="https://expert-themes.com/html/sola/blog.html">-->
<!--                                <div class="form-group">-->
<!--                                    <input type="search" name="search-field" value=""-->
<!--                                           placeholder="مقاله مورد نظر خود را جستوجو کنید ..." required="">-->
<!--                                    <button type="submit">-->
<!--                                        <span class="icon fa fa-search"></span>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                        categories-->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>دسته بندی ها</h3></div>
                            <ul class="cat-list">
                                <li><a><i class="fas fa-angle-double-right"></i>سئو و آنالیز
                                    <span>01</span></a></li>
                            </ul>
                        </div>
<!--                        recent posts-->
                        <div class="sidebar-widget latest-news">
                            <div class="sidebar-title"><h3>آخرین پست</h3></div>
                            <div class="widget-content">
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="blog-detail.php?articleID=">
                                            <img src="assets/images/resource/post-thumb-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <h3><a href="blog-detail.php?articleID=">سئو چیست؟</a></h3>
                                    <div class="post-info">25 مهر 1400</div>
                                </article>
                            </div>
                        </div>
                        <!--اinstagram-->
<!--                        <div class="sidebar-widget instagram-widget">-->
<!--                            <div class="sidebar-title"><h3>Instagram</h3></div>-->
<!--                            <div class="widget-content">-->
<!--                                <figure class="post-thumb"><img src="assets/images/resource/instagram-1.jpg" alt=""><a-->
<!--                                        href="blog-single.html" class="overlay-box"><span-->
<!--                                        class="icon fa fa-link"></span></a></figure>-->
<!--                                <figure class="post-thumb"><img src="assets/images/resource/instagram-2.jpg" alt=""><a-->
<!--                                        href="blog-single.html" class="overlay-box"><span-->
<!--                                        class="icon fa fa-link"></span></a></figure>-->
<!--                                <figure class="post-thumb"><img src="assets/images/resource/instagram-3.jpg" alt=""><a-->
<!--                                        href="blog-single.html" class="overlay-box"><span-->
<!--                                        class="icon fa fa-link"></span></a></figure>-->
<!--                                <figure class="post-thumb"><img src="assets/images/resource/instagram-4.jpg" alt=""><a-->
<!--                                        href="blog-single.html" class="overlay-box"><span-->
<!--                                        class="icon fa fa-link"></span></a></figure>-->
<!--                                <figure class="post-thumb"><img src="assets/images/resource/instagram-5.jpg" alt=""><a-->
<!--                                        href="blog-single.html" class="overlay-box"><span-->
<!--                                        class="icon fa fa-link"></span></a></figure>-->
<!--                                <figure class="post-thumb"><img src="assets/images/resource/instagram-6.jpg" alt=""><a-->
<!--                                        href="blog-single.html" class="overlay-box"><span-->
<!--                                        class="icon fa fa-link"></span></a></figure>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        tags-->
<!--                        <div class="sidebar-widget tags">-->
<!--                            <div class="sidebar-title"><h3>Tags</h3></div>-->
<!--                            <ul class="tag-list clearfix">-->
<!--                                <li><a href="#">Business</a></li>-->
<!--                                <li><a href="#">Marketing</a></li>-->
<!--                                <li><a href="#">SEO</a></li>-->
<!--                                <li><a href="#">PPC</a></li>-->
<!--                                <li><a href="#">SMM</a></li>-->
<!--                                <li><a href="#">Solution</a></li>-->
<!--                                <li><a href="#">Tips</a></li>-->
<!--                                <li><a href="#">Startup</a></li>-->
<!--                                <li><a href="#">Strategy</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
                    </aside>
                </div>
            </div>
        </div>
    </div>

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