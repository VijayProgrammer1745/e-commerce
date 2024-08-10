<?php
	require_once 'db.php';
	session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Ramdev PCB</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.png">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/main.css?v=3.3">
	<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>
    <!---------------------------------------------------------header---------->
   <?php
   	include("header.php");
   ?>

   
    <main class="main single-page">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
              <!--  <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> About us
                </div>-->
            </div>
        </div>
        <section class="section-padding">
            <div class="container pt-25">
                <div class="row">
                    <div class="col-lg-6 align-self-center mb-lg-0 mb-4">
                        <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Company</h6>
                        
                        <p>RAMDEV PCB is located in Vasai (Mumbai).We are professional and high-tech company that manufactures different kinds of PCB circuit board and speedy prototypes, such as single-layer PCB, Matel core PCB ,led pcb high frequency board, copper foil board and custom-made boards. PCB was widely used in postal and telecommunication services, consumer electronics, electrical energy, medical equipment,street light, flood light with over 07 years of PCB-making experience, has many PCB professional technicians and high-qualified engineers. We concentrate on developing, designing and making PCB product so that we can provide high-quality, fast and satisfying for customers.
look forward to your letter.</p><!--<p style="text-align: center;"> Welcome to ledpcb</p>
<p style="text-align:center;">(Powered by RAMDEV PCB )–Online electronics and pcb part store.</p>
                        <p style="text-align:center;">  We believe in quality for both products and service. We, being the electronics engineers, have realized the problem of not getting the right components and detailed information about the</p>
                        <p style="text-align:center">  product. We continue to revive our inventory on customer review and demand, focusing on providing the best that we can.</p>
                        <p style="text-align:center;"> Led PCB is founded in 2015 and came so far with your support. We give a variety of products from basic pcb like street light pcb, flood light pcb,led driver ,led, tharmal past,rgb pcb & Parts</p>
                        <p style="text-align:center;"> and the list goes on.</p>
                        <p style="text-align:center;"> Apart from electronics store, we have a dedicated YouTube channel and Facebook page, where we share pcb photo,videos and we mostly focus on basics understanding .</p>
                        <p style="text-align:center;"> Keep supporting us and if have any query, please don’t hesitate to contact us.</p>-->
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/imgs/slider/Slider3.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="pt-25 wow fadeIn animated">
            <div class="container">
                <div class="row mb-50 align-items-center">
                    <div class="col-md-6">
                        <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Team</h6>
                        <h2 class="mb-15 wow fadeIn animated">Top team of experts</h2>
                        <p class="text-grey-3 wow fadeIn animated"><!--Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione optio perferendis sequi mollitia quis autem ea cupiditate possimus!--></p>
                    </div>
                    <div class="col-md-6 text-md-end mt-30">
                        <a class="btn btn-outline btn-lg btn-brand-outline font-weight-bold text-brand text-hover-white border-radius-5 btn-shadow-brand hover-up">All Members</a>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="row wow fadeIn animated">
                        <div class="col-lg-3 col-md-6">
                            <div class="blog-card border-radius-10 overflow-hidden text-center">
                                <img src="assets/imgs/page/avatar-1.jpg" alt="" class="border-radius-10 mb-30 hover-up">
                                <h4 class="fw-500 mb-0">Raju Patel</h4>
                                <p class="fw-400 text-brand mb-10">9870252611</p>
                               <!-- <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0 animated">
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                                </div>-->
                            </div>
                        </div>
                        <!--col-->
                        <div class="col-lg-3 col-md-6">
                            <div class="blog-card border-radius-10 overflow-hidden text-center">
                                <img src="assets/imgs/page/avatar-2.jpg" alt="" class="border-radius-10 mb-30 hover-up">
                                <h4 class="fw-500 mb-0">Sanjay Patel</h4>
                                <p class="fw-400 text-brand mb-10">8655252402</p>
                                <!--<div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0 animated">
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                                </div>-->
                            </div>
                        </div>
                        <!--col-->
                        <div class="col-lg-3 col-md-6">
                            <div class="blog-card border-radius-10 overflow-hidden text-center">
                                <img src="assets/imgs/page/avatar-3.jpg" alt="" class="border-radius-10 mb-30 hover-up">
                                <h4 class="fw-500 mb-0"><!--Tomas Baker--></h4>
                                <p class="fw-400 text-brand mb-10"><!--Senior Planner--></p>
                                <!--<div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0 animated">
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                                </div>-->
                            </div>
                        </div>
                        <!--col-->
                        <div class="col-lg-3 col-md-6">
                            <div class="blog-card border-radius-10 overflow-hidden text-center">
                                <img src="assets/imgs/page/avatar-4.jpg" alt="" class="border-radius-10 mb-30 hover-up">
                                <h4 class="fw-500 mb-0"><!--Norton Mendos--></h4>
                                <p class="fw-400 text-brand mb-10"><!--Project Manager--></p>
                               <!-- <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0 animated">
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                                    <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                                </div>-->
                            </div>
                        </div>
                        <!--col-->
                    </div>
                </div>
            </div>
        </section>
      <!--  <section id="work" class="mt-40 pt-50 pb-50 section-border">
            <div class="container">
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-5 text-uppercase  text-brand font-sm wow fadeIn animated">Evara Coporation</h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">Our main branches<br> around the world</h2>
                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium. ebitis nesciunt voluptatum dicta reprehenderit accusamus</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center mb-md-0 mb-4">
                        <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-1.jpg" alt="">
                        <h4 class="mt-30 mb-15 wow fadeIn animated">New York, USA</h4>
                        <p class="text-grey-3 wow fadeIn animated">27 Division St, New York<br>NY 10002, USA</p>
                    </div>
                    <div class="col-md-4 text-center mb-md-0 mb-4">
                        <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-2.jpg" alt="">
                        <h4 class="mt-30 mb-15 wow fadeIn animated">Paris, France</h4>
                        <p class="text-grey-3 wow fadeIn animated">22 Rue des Carmes<br> 75005 Paris</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img class="btn-shadow-brand hover-up border-radius-10 bg-brand-muted wow fadeIn animated" src="assets/imgs/page/company-3.jpg" alt="">
                        <h4 class="mt-30 mb-15 wow fadeIn animated">Jakarta, Indonesia</h4>
                        <p class="text-grey-3 wow fadeIn animated">2476 Raya Yogyakarta,<br>89090 Indonesia</p>
                    </div>
                </div>
            </div>
        </section>-->
        <section id="testimonials" class="section-padding">
            <div class="container pt-25">
                <div class="row mb-50">
                    <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated"></h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">WHY RAMDEV PCB <br></h2>
                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">Quick Turn Pcb Manufacturing
And Pcb Assembly Services </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:bisque;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                              <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Quality.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    PREMIUM QUALITY 
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">A premium quality is a brand that markets and sells its products to customers at higher price levels in exchange for a higher quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:#d1e8f2;" >
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Innovative.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                   INNOVATIVE PRODUCT
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">Product innovation is the industry that is related to the development of innovative products, We commited to deliver innovative products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:bisque;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Accurate.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                   ACCURATE SOLUTION 
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">we are ready to provide Accurate & complete Solution from concept to commissioning in the area of Manufacturing industries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:#d1e8f2;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Delivery.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                    TIMELY DELIVERY 
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">On time delivery, or OTD, is the metric used to measure supply chain efficiency.We have our associate for courier and transport.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:bisque;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Worker.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                   EFFICIENT WORKERS 
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">Personal Toll of Working Too Hard. Hard workers can turn into workaholics if they’re not careful about their personal boundaries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="hero-card box-shadow-outer-6 wow fadeIn animated mb-30 hover-up d-flex" style="background-color:#d1e8f2;">
                            <div class="hero-card-icon icon-left-2 hover-up ">
                                <img class="btn-shadow-brand hover-up border-radius-5 bg-brand-muted" src="assets/imgs/page/Price.png" alt="" style="background-color:white;">
                            </div>
                            <div class="pl-30">
                                <h5 class="mb-5 fw-500">
                                  PRICE & QUALITY
                                </h5>
                                <p class="font-sm text-grey-5"><!--Adobe Jsc--></p>
                                <p class="text-grey-3">Our aim is to provide quality goods at affordable prices and we never compromise quality. Price is what you pay, we value your money</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-12 text-center">
                        <p class="wow fadeIn animated">
                            <!--<a class="btn btn-brand text-white btn-shadow-brand hover-up btn-lg">View More</a>-->
                        </p>
                    </div>
                </div>
            </div>
        </section>
      <section class="mt-20 mb-20">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-12 text-center">
                        <h6 class="mt-0 mb-10 text-uppercase  text-brand font-sm wow fadeIn animated"></h6>
                        <h2 class="mb-15 text-grey-1 wow fadeIn animated">Client Reviews<br></h2>
<!--                        <p class="w-50 m-auto text-grey-3 wow fadeIn animated">Quick Turn Pcb Manufacturing-->
<!--And Pcb Assembly Services </p>-->
                    </div>
                    <br>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                <!--<div class="col-lg-4">-->
                                <!--    <article class="wow fadeIn animated hover-up mb-30">-->
                                <!--        <div class="post-thumb img-hover-scale">-->
                                <!--            <a href="blog-post-right.html">-->
                                <!--                <img src="assets/imgs/blog/blog-1.jpg" alt="">-->
                                <!--            </a>-->
                                <!--            <div class="entry-meta">-->
                                <!--                <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="entry-content-2">-->
                                <!--            <h3 class="post-title mb-15">-->
                                <!--                <a href="blog-post-right.html">9 Things I Love About Shaving My Head</a></h3>-->
                                <!--            <p class="post-exerpt mb-30">At the Emmys, broadcast scripted shows created by people of color gained ground relative to those pitched by White show creators, while broadcast scripted shows.</p>-->
                                <!--            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                <!--                <div>-->
                                <!--                    <span class="post-on"> <i class="fi-rs-clock"></i> 25 April 2022</span>-->
                                <!--                    <span class="hit-count has-dot">126k Views</span>-->
                                <!--                </div>-->
                                <!--                <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </article>-->
                                <!--</div>-->
                                <!--<div class="col-lg-4">-->
                                <!--    <article class="wow fadeIn animated hover-up mb-30">-->
                                <!--        <div class="post-thumb img-hover-scale">-->
                                <!--            <a href="blog-post-right.html">-->
                                <!--                <img src="assets/imgs/blog/blog-2.jpg" alt="">-->
                                <!--            </a>-->
                                <!--            <div class="entry-meta">-->
                                <!--                <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="entry-content-2">-->
                                <!--            <h3 class="post-title mb-15">-->
                                <!--                <a href="blog-post-right.html">The World Caters to Average People</a></h3>-->
                                <!--            <p class="post-exerpt mb-30">At the Emmys, broadcast scripted shows created by people of color gained ground relative to those pitched by White show creators, while broadcast scripted shows.</p>-->
                                <!--            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                <!--                <div>-->
                                <!--                    <span class="post-on"> <i class="fi-rs-clock"></i> 25 April 2022</span>-->
                                <!--                    <span class="hit-count has-dot">126k Views</span>-->
                                <!--                </div>-->
                                <!--                <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </article>-->
                                <!--</div>-->
                                <!--<div class="col-lg-4">-->
                                <!--    <article class="wow fadeIn animated hover-up mb-30">-->
                                <!--        <div class="post-thumb img-hover-scale">-->
                                <!--            <a href="blog-post-right.html">-->
                                <!--                <img src="assets/imgs/blog/blog-3.jpg" alt="">-->
                                <!--            </a>-->
                                <!--            <div class="entry-meta">-->
                                <!--                <a class="entry-meta meta-2" href="blog-category-grid.html">Politic</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="entry-content-2">-->
                                <!--            <h3 class="post-title mb-15">-->
                                <!--                <a href="blog-post-right.html">The litigants on the screen are not actors</a></h3>-->
                                <!--            <p class="post-exerpt mb-30">These people envy me for having a lifestyle they don’t have, but the truth is, sometimes but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi.</p>-->
                                <!--            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                <!--                <div>-->
                                <!--                    <span class="post-on"> <i class="fi-rs-clock"></i> 25 April 2022</span>-->
                                <!--                    <span class="hit-count has-dot">126k Views</span>-->
                                <!--                </div>-->
                                <!--                <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </article>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3">-->
                                <!--    <article class="wow fadeIn animated hover-up mb-30">-->
                                <!--        <div class="post-thumb img-hover-scale">-->
                                <!--            <a href="blog-post-right.html">-->
                                <!--                <img src="assets/imgs/blog/blog-4.jpg" alt="">-->
                                <!--            </a>-->
                                <!--            <div class="entry-meta">-->
                                <!--                <a class="entry-meta meta-2" href="blog-category-grid.html">Global</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="entry-content-2">-->
                                <!--            <h4 class="post-title mb-15">-->
                                <!--                <a href="blog-post-right.html">Essential Qualities of Highly Successful Music</a></h4>-->
                                <!--            <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>-->
                                <!--            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                <!--                <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </article>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3">-->
                                <!--    <article class="wow fadeIn animated hover-up mb-30">-->
                                <!--        <div class="post-thumb img-hover-scale">-->
                                <!--            <a href="blog-post-right.html">-->
                                <!--                <img src="assets/imgs/blog/blog-5.jpg" alt="">-->
                                <!--            </a>-->
                                <!--            <div class="entry-meta">-->
                                <!--                <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="entry-content-2">-->
                                <!--            <h4 class="post-title mb-15">-->
                                <!--                <a href="blog-post-right.html">9 Things I Love About Shaving My Head</a></h4>-->
                                <!--            <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>-->
                                <!--            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                <!--                <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </article>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3">-->
                                <!--    <article class="wow fadeIn animated hover-up mb-30">-->
                                <!--        <div class="post-thumb img-hover-scale">-->
                                <!--            <a href="blog-post-right.html">-->
                                <!--                <img src="assets/imgs/blog/blog-6.jpg" alt="">-->
                                <!--            </a>-->
                                <!--            <div class="entry-meta">-->
                                <!--                <a class="entry-meta meta-2" href="blog-category-grid.html">Technology</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="entry-content-2">-->
                                <!--            <h4 class="post-title mb-15">-->
                                <!--                <a href="blog-post-right.html">Why Teamwork Really Makes The Dream Work</a></h4>-->
                                <!--            <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>-->
                                <!--            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                <!--                <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </article>-->
                                <!--</div>-->
                                <!--<div class="col-lg-3">-->
                                <!--    <article class="wow fadeIn animated hover-up mb-30">-->
                                <!--        <div class="post-thumb img-hover-scale">-->
                                <!--            <a href="blog-post-right.html">-->
                                <!--                <img src="assets/imgs/blog/blog-1.jpg" alt="">-->
                                <!--            </a>-->
                                <!--            <div class="entry-meta">-->
                                <!--                <a class="entry-meta meta-2" href="blog-category-grid.html">Watch</a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="entry-content-2">-->
                                <!--            <h4 class="post-title mb-15">-->
                                <!--                <a href="blog-post-right.html">The World Caters to Average People</a></h4>-->
                                <!--            <p class="post-exerpt mb-30 font-sm">Graduating from a top accelerator or incubator can be as career-defining for a startup founder ah</p>-->
                                <!--            <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                <!--                <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </article>-->
                                <!--</div>-->
                                <div class="col-lg-3">
                                    <article class="wow fadeIn animated hover-up mb-30">
                                        <div class="post-thumb img-hover-scale">
                                            <a href="blog-post-right.html">
                                                <img src="assets/imgs/blog/blog-8.jpg" alt="">
                                            </a>
                                            <!--<div class="entry-meta">-->
                                            <!--    <a class="entry-meta meta-2" href="blog-category-grid.html">Global</a>-->
                                            <!--</div>-->
                                        </div>
                                        <div class="entry-content-2">
                                            <h4 class="post-title mb-15">
                                                <a href="blog-post-right.html">Amit Patel</a></h4>
                                            <p class="post-exerpt mb-30 font-sm">Excellent services & Fast response management. We get PCBs at good price</p>
                                            <!--<div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                            <!--    <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                            <!--</div>-->
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-3">
                                    <article class="wow fadeIn animated hover-up mb-30">
                                        <div class="post-thumb img-hover-scale">
                                            <a href="blog-post-right.html">
                                                <img src="assets/imgs/blog/blog-9.jpg" alt="">
                                            </a>
                                            <!--<div class="entry-meta">-->
                                            <!--    <a class="entry-meta meta-2" href="blog-category-grid.html">Sport</a>-->
                                            <!--</div>-->
                                        </div>
                                        <div class="entry-content-2">
                                            <h4 class="post-title mb-15">
                                                <a href="blog-post-right.html">Epili Pradip</a></h4>
                                            <p class="post-exerpt mb-30 font-sm">Good service Better quality Friendly management Enhanced price.</p>
                                            <!--<div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                            <!--    <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                            <!--</div>-->
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-3">
                                    <article class="wow fadeIn animated hover-up mb-30">
                                        <div class="post-thumb img-hover-scale">
                                            <a href="blog-post-right.html">
                                                <img src="assets/imgs/blog/blog-1.jpg" alt="">
                                            </a>
                                            <!--<div class="entry-meta">-->
                                            <!--    <a class="entry-meta meta-2" href="blog-category-grid.html">Technology</a>-->
                                            <!--</div>-->
                                        </div>
                                        <div class="entry-content-2">
                                            <h4 class="post-title mb-15">
                                                <a href="blog-post-right.html">Kaushal Vishwakarma</a></h4>
                                            <p class="post-exerpt mb-30 font-sm">Excellent service Better quality led PCBs At cheap price.</p>
                                            <!--<div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                            <!--    <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                            <!--</div>-->
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-3">
                                    <article class="wow fadeIn animated hover-up mb-30">
                                        <div class="post-thumb img-hover-scale">
                                            <a href="blog-post-right.html">
                                                <img src="assets/imgs/blog/blog-2.jpg" alt="">
                                            </a>
                                            <!--<div class="entry-meta">-->
                                            <!--    <a class="entry-meta meta-2" href="blog-category-grid.html">Watch</a>-->
                                            <!--</div>-->
                                        </div>
                                        <div class="entry-content-2">
                                            <h4 class="post-title mb-15">
                                                <a href="blog-post-right.html">Jitendra Sargra</a></h4>
                                            <p class="post-exerpt mb-30 font-sm">Ohsome services best quality Fast track service Professional staff Polite taking behaviour.</p>
                                            <!--<div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">-->
                                            <!--    <a href="blog-post-right.html" class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>-->
                                            <!--</div>-->
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <!--post-grid-->
                        <!--<div class="pagination-area mt-15 mb-lg-0">-->
                        <!--    <nav aria-label="Page navigation example">-->
                        <!--        <ul class="pagination justify-content-start">-->
                        <!--            <li class="page-item active"><a class="page-link" href="#">01</a></li>-->
                        <!--            <li class="page-item"><a class="page-link" href="#">02</a></li>-->
                        <!--            <li class="page-item"><a class="page-link" href="#">03</a></li>-->
                        <!--            <li class="page-item"><a class="page-link dot" href="#">...</a></li>-->
                        <!--            <li class="page-item"><a class="page-link" href="#">16</a></li>-->
                        <!--            <li class="page-item"><a class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a></li>-->
                        <!--        </ul>-->
                        <!--    </nav>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </section>
    </main>
  <!---------------------------------------footer-------------------->
  <?php
  include("footer.php");
  ?>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Ramdev PCB</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor JS-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/waypoints.js"></script>
    <script src="assets/js/plugins/counterup.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.vticker-min.js"></script>
    <script src="assets/js/plugins/jquery.theia.sticky.js"></script>
    <!-- Template  JS -->
    <script src="./assets/js/main.js?v=3.3"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>