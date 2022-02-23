<?php
include "assets/php/connection.php";
    $articles = "SELECT * FROM `articles` INNER JOIN `author` ON articles.authorID=author.authorID INNER JOIN `categories` ON categories.categoryID=articles.article_category_id";
    $articles = mysqli_query($connection,$articles);


?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <?php include ("assets/php/head.php");?>
    <title>تیم سئو | وبلاگ</title>
</head>

<body>
<!--main-->
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
                <div class="title-box"><h1>آخرین مقالات و خبرنامه ها</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">خانه</a></li>
                        <li>وبلاگ</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--    styles-->
    <section class="news-section-three alternate">
        <div class="pattern-layer-one" style="background-image: url(assets/images/main-banner/cross-icon.png)"></div>
        <div class="pattern-layer-two" style="background-image: url(assets/images/main-banner/banner-icon-5.png)"></div>
        <div class="pattern-layer-three" style="background-image: url(assets/images/main-banner/banner-icon-6.png)"></div>
        <div class="pattern-layer-four" style="background-image: url(assets/images/main-banner/banner-icon.png)"></div>
        <div class="pattern-layer-five" style="background-image: url(assets/images/main-banner/banner-icon-1.png)"></div>
        <div class="pattern-layer-six" style="background-image: url(assets/images/main-banner/banner-icon-2.png)"></div>
        <div class="pattern-layer-seven" style="background-image: url(assets/images/main-banner/banner-icon-8.png)"></div>
        <div class="pattern-layer-eight" style="background-image: url(assets/images/main-banner/banner-icon-7.png)"></div>
        <div class="pattern-layer-nine" style="background-image: url(assets/images/main-banner/banner-icon-10.png)"></div>
        <div class="pattern-layer-ten" style="background-image: url(assets/images/main-banner/banner-icon-9.png)"></div>
        <div class="pattern-layer-eleven" style="background-image: url(assets/images/main-banner/banner-icon-3.png)"></div>
        <div class="pattern-layer-tweleve" style="background-image: url(assets/images/main-banner/banner-icon-4.png)"></div>
<!--       posts -->
        <div class="auto-container">
            <div class="sec-title text-center"><h6 class="subtitle">آخرین مقالات ما</h6>
                <h2>اطلاعیه ها و اخبار</h2>
            </div>
            <div class="row">
            <!--single blog-->
                <?php while ($article = mysqli_fetch_assoc($articles)): ?>
                <div class="news-block style-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <img src="admin-dashboard/<?= $article['article_image']; ?>" alt="<?= $article['article_title']; ?>">
                            </figure>
                            <div class="overlay-box">
                                <span class="share-button">
                                    <i class="fas fa-share-alt"></i>
                                </span>
                                <ul class="social-links">
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
                        <div class="caption-box">
                            <ul class="category">
                                <li><a><?= $article['categoryName']; ?></a></li>
                            </ul>
                            <ul class="info">
                                <li><i class="fas fa-calendar-alt"></i><?= $article['article_publish_date']; ?></li>
                                <li>|</li>
                                <li><i class="fas fa-user-alt"></i>توسط <Span><?= $article['firstname'].' '.$article['lastname']; ?></Span></li>
                            </ul>
                            <h4>
                                <a href="blog-detail.php?articleID="><?= $article['article_title']; ?></a></h4> <a
                                    href="blog-detail.php?articleID=<?= $article['articleID'] ?>" class="theme-btn btn-style-one"><span
                                        class="txt"> بیشتر ...</span></a></div>
                    </div>
                </div>
                <?php endwhile; ?>
<!--                <div class="news-block style-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image-box">-->
<!--                            <figure class="image"><img src="images/resource/news-8.jpg" alt=""></figure>-->
<!--                            <div class="overlay-box"><span class="share-button"><i class="fas fa-share-alt"></i></span>-->
<!--                                <ul class="social-links">-->
<!--                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="caption-box">-->
<!--                            <ul class="category">-->
<!--                                <li><a href="#">SEO</a></li>-->
<!--                                <li><a href="#">Analysis</a></li>-->
<!--                            </ul>-->
<!--                            <ul class="info">-->
<!--                                <li><i class="fas fa-calendar-alt"></i>Feb 18, 2021</li>-->
<!--                                <li>|</li>-->
<!--                                <li><i class="fas fa-user-alt"></i>By Admin</li>-->
<!--                            </ul>-->
<!--                            <h4><a href="blog-detail.html">How wireless technology changing business Now</a></h4> <a-->
<!--                                    href="blog-detail.html" class="theme-btn btn-style-one"><span-->
<!--                                        class="txt">Read More</span></a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="news-block style-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image-box">-->
<!--                            <figure class="image"><img src="images/resource/news-9.jpg" alt=""></figure>-->
<!--                            <div class="overlay-box"><span class="share-button"><i class="fas fa-share-alt"></i></span>-->
<!--                                <ul class="social-links">-->
<!--                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="caption-box">-->
<!--                            <ul class="category">-->
<!--                                <li><a href="#">SEO</a></li>-->
<!--                                <li><a href="#">Analysis</a></li>-->
<!--                            </ul>-->
<!--                            <ul class="info">-->
<!--                                <li><i class="fas fa-calendar-alt"></i>Feb 18, 2021</li>-->
<!--                                <li>|</li>-->
<!--                                <li><i class="fas fa-user-alt"></i>By Admin</li>-->
<!--                            </ul>-->
<!--                            <h4><a href="blog-detail.html">10 ways technology today at improved business</a></h4> <a-->
<!--                                    href="blog-detail.html" class="theme-btn btn-style-one"><span-->
<!--                                        class="txt">Read More</span></a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="news-block style-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image-box">-->
<!--                            <figure class="image"><img src="images/resource/news-10.jpg" alt=""></figure>-->
<!--                            <div class="overlay-box"><span class="share-button"><i class="fas fa-share-alt"></i></span>-->
<!--                                <ul class="social-links">-->
<!--                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="caption-box">-->
<!--                            <ul class="category">-->
<!--                                <li><a href="#">SEO</a></li>-->
<!--                                <li><a href="#">Analysis</a></li>-->
<!--                            </ul>-->
<!--                            <ul class="info">-->
<!--                                <li><i class="fas fa-calendar-alt"></i>Feb 18, 2021</li>-->
<!--                                <li>|</li>-->
<!--                                <li><i class="fas fa-user-alt"></i>By Admin</li>-->
<!--                            </ul>-->
<!--                            <h4><a href="blog-detail.html">How wireless technology changing business Now</a></h4> <a-->
<!--                                    href="blog-detail.html" class="theme-btn btn-style-one"><span-->
<!--                                        class="txt">Read More</span></a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="news-block style-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image-box">-->
<!--                            <figure class="image"><img src="images/resource/news-11.jpg" alt=""></figure>-->
<!--                            <div class="overlay-box"><span class="share-button"><i class="fas fa-share-alt"></i></span>-->
<!--                                <ul class="social-links">-->
<!--                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="caption-box">-->
<!--                            <ul class="category">-->
<!--                                <li><a href="#">SEO</a></li>-->
<!--                                <li><a href="#">Analysis</a></li>-->
<!--                            </ul>-->
<!--                            <ul class="info">-->
<!--                                <li><i class="fas fa-calendar-alt"></i>Feb 18, 2021</li>-->
<!--                                <li>|</li>-->
<!--                                <li><i class="fas fa-user-alt"></i>By Admin</li>-->
<!--                            </ul>-->
<!--                            <h4><a href="blog-detail.html">How wireless technology changing business Now</a></h4> <a-->
<!--                                    href="blog-detail.html" class="theme-btn btn-style-one"><span-->
<!--                                        class="txt">Read More</span></a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="news-block style-three col-lg-4 col-md-6 col-sm-12">-->
<!--                    <div class="inner-box">-->
<!--                        <div class="image-box">-->
<!--                            <figure class="image"><img src="images/resource/news-12.jpg" alt=""></figure>-->
<!--                            <div class="overlay-box"><span class="share-button"><i class="fas fa-share-alt"></i></span>-->
<!--                                <ul class="social-links">-->
<!--                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="caption-box">-->
<!--                            <ul class="category">-->
<!--                                <li><a href="#">SEO</a></li>-->
<!--                                <li><a href="#">Analysis</a></li>-->
<!--                            </ul>-->
<!--                            <ul class="info">-->
<!--                                <li><i class="fas fa-calendar-alt"></i>Feb 18, 2021</li>-->
<!--                                <li>|</li>-->
<!--                                <li><i class="fas fa-user-alt"></i>By Admin</li>-->
<!--                            </ul>-->
<!--                            <h4><a href="blog-detail.html">10 ways technology today at improved business</a></h4> <a-->
<!--                                    href="blog-detail.html" class="theme-btn btn-style-one"><span-->
<!--                                        class="txt">Read More</span></a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                pagination-->
<!--                <div class="styled-pagination">-->
<!--                    <ul class="clearfix">-->
<!--                        <li class="prev-post"><a href="#"><span class="fa fa-angle-left"></span></a></li>-->
<!--                        <li><a href="#">1</a></li>-->
<!--                        <li class="active"><a href="#">2</a></li>-->
<!--                        <li><a href="#">3</a></li>-->
<!--                        <li class="next-post"><a href="#"><span class="fa fa-angle-right"></span> </a></li>-->
<!--                    </ul>-->
<!--                </div>-->
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