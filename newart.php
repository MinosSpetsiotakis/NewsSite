<?php
include("Lib.php");
    returnArticle();
?>
   
   <link href="article.css" rel="stylesheet" />
   <div class="row article-cont">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <img class="banner-img " src="assets/images/left2.png"  />
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <section class="article-container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 ">
                    <h1 class="article-title"><?= $title ?></h1>
                    <div class="line"></div>
                </div>
             </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                    <h2 class="article-sub-title"><?= $Subtitle ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <img class="article-main-image" src="<?= $ImagePath ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="article-content"><?= $Content ?></div>
                </div>
            </div>
            </section>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
        <img class="banner-img " src="assets/images/right2.png"  />
        </div>
    </div>