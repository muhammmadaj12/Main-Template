<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Website Template</title>
    
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style/style.css" />
    <style>
        .hero-section {
            height: 60vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: relative;
            z-index: 1;
            padding-top: 190px;
            padding-bottom: 265px;
            /* display: flex;
            justify-content: center;
            align-items: center; */
        }
        .hero-section .hero-content .title{
            text-transform: capitalize;
            font-size: 80px;
            padding-bottom: 10px;
        }
        .hero-section .hero-content .title-wrap .title::before{
            content: none;
        }
        .info-cards-wrap p a{
            text-decoration: none;
            color: #666666;
        }
        .info-cards-wrap p a:hover,
        .hero-section a:hover{
            text-decoration: underline;
        }
        .section-padding {
            padding-top: 150px;
            padding-bottom: 150px;
        }
        /* Below */
        .event-sponsors-2 {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .event-section-title{
            margin-bottom: 55px;
        }
        swiper-container {
            width: 100%;
            height: 100%;
        }
        .sponsor-img-wrapp{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        swiper-slide {
            width: 100%;
            padding-bottom: 0;
        }

        swiper-slide:nth-child(2n) {
            width: 100%;
        }

        /* swiper-slide:nth-child(3n) {
            width: 50%;
        } */
    </style>
</head>
<body class="gallery-sections">

<?php include "header.php" ?>

<section class="bg-img hero-section">
    <div class="container">
            <div class="hero-content text-center">
                <h2 class="title">About Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
          </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
    <div class="row gy-5 align-items-center">
        <div class="col-lg-7">
            <div class="about-bg" style="background-image: url(images/pages/about-us/shape-4.png);">
                <div class="event-image">
                    <img class="img-fluid" src="images/pages/about-us/about-1.jpg" alt="About WorldBI" />
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="about-event-title-2 about-event-title">
                <h4 class="sub-title">An event for</h4>
                <h2 class="main-title">Designers, Web <br> developers &amp; Design</h2>
            </div>
            <div class="about-event-content">
                <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, and to have epic adventures</p>
                <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their knees, try new things, to be vulnerable, and to have epic adventures together, this time both in-person</p>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="about-features-section section-padding">
    <div class="shape-1" data-aos-delay="700" data-aos="zoom-in"></div>
    <img class="shape-2" src="images/pages/about-us/shape-11.png" alt="Shapes">
    <div class="container">
        <div class="meeta-features-wrap">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-event-title-2">
                        <h4 class="sub-title">Reason to join conference</h4>
                        <h2 class="main-title">Why attend conference</h2>
                    </div>
                    <div class="feature-item feature-1">
                        <div class="feature-icon">
                            <img src="images/pages/about-us/feature-icon-1.png" alt="WorldBI Icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">Trainings &amp; Awards</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item feature-2">
                        <div class="feature-icon">
                            <img src="images/pages/about-us/feature-icon-2.png" alt="WorldBI Icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">World Class Speaker</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                    <div class="feature-item feature-3">
                        <div class="feature-icon">
                            <img src="images/pages/about-us/feature-icon-3.png" alt="WorldBI Icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">Evening Concert</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-item feature-4">
                        <div class="feature-icon">
                            <img src="images/pages/about-us/feature-icon-4.png" alt="WorldBI Icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="title"><a href="#">3 Days Conference</a></h3>
                            <p>We’re inviting the top creatives in the tech industry from all over the world to come learn, grow, scrape their </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="speaker-section about-speakers-5 section-padding">
    <div class="container">
        <div class="about-event-title-2  text-center">
            <h4 class="sub-title">Speakers</h4>
            <h2 class="main-title text-white">World Class Speakers</h2>
        </div>
        <div class="row gy-5 about-speakers-row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-speaker text-center">
                    <div class="speaker-image">
                        <a href="speaker-single.html"><img src="images/pages/about-us/speaker-1.jpg" alt="WorldBI Speakers"></a>
                    </div>
                    <div class="speaker-content">
                        <div class="speaker-content-box">
                            <h4 class="speaker-name"><a style="text-decoration: none; color: #000;" href="speaker-single.html">Mike Fermalin</a></h4>
                            <p class="speaker-designation">Lead Speaker</p>
                        </div>
                        <img class="speaker-shape-1" src="images/pages/about-us/shape-8.png" alt="WorldBI Icon">
                        <div class="speaker-shape-2"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <div class="single-speaker text-center">
                    <div class="speaker-image">
                        <a href="speaker-single.html"><img src="images/pages/about-us/speaker-2.jpg" alt="WorldBI Speaker"></a>
                    </div>
                    <div class="speaker-content">
                        <div class="speaker-content-box">
                            <h4 class="speaker-name"><a style="text-decoration: none; color: #000;" href="speaker-single.html">Harnold Min</a></h4>
                            <p class="speaker-designation">Lead Speaker</p>
                        </div>
                        <img class="speaker-shape-1" src="images/pages/about-us/shape-8.png" alt="WorldBI Icon">
                        <div class="speaker-shape-2"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <div class="single-speaker text-center">
                    <div class="speaker-image">
                        <a href="speaker-single.html"><img src="images/pages/about-us/speaker-3.jpg" alt="WorldBI Speaker"></a>
                    </div>
                    <div class="speaker-content">
                        <div class="speaker-content-box">
                            <h4 class="speaker-name"><a style="text-decoration: none; color: #000;" href="speaker-single.html">Joakim Ken</a></h4>
                            <p class="speaker-designation">Developer</p>
                        </div>
                        <img class="speaker-shape-1" src="images/pages/about-us/shape-8.png" alt="WorldBI Icon">
                        <div class="speaker-shape-2"></div>
                    </div>
                </div>
            </div>
                    
            <div class="col-lg-3 col-sm-6">
                <div class="single-speaker text-center">
                    <div class="speaker-image">
                        <a href="speaker-single.html"><img src="images/pages/about-us/speaker-4.jpg" alt="WorldBI Speaker"></a>
                    </div>
                    <div class="speaker-content">
                        <div class="speaker-content-box">
                            <h4 class="speaker-name"><a style="text-decoration: none; color: #000;" href="speaker-single.html">Andrew Inon</a></h4>
                            <p class="speaker-designation">Developer</p>
                        </div>
                        <img class="speaker-shape-1" src="images/pages/about-us/shape-8.png" alt="WorldBI Icon">
                        <div class="speaker-shape-2"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="gallery-section  about-gallery gallery-images section-padding">
    <div class="container">
        <div class="about-event-title-2 text-center">
            <h4 class="sub-title">Photo Gallery</h4>
            <h2 class="main-title">Have A Look On Gallery</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 portfolio-item filter-dhh" data-title="digital health" style="margin-bottom: 20px;">
                <div class="about-gallery-wrapp position-relative">
                    <div class="image-gallery">
                        <img src="images/pages/gallery/DHI-Event3.webp" class="hover-shadow img-fluid">
                    </div>
                    <div class="overlay">
                        <div class="overlay-wrap">
                            <button style="background-color: transparent;" onclick="openModal();currentSlide(1)" class="gallery-plus image-popup">
                                <span></span>
                            </button>
                            <h4 class="gallery-title"><a>Digital Health Conference 2023</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-cts" data-title="clinical trial supply" style="margin-bottom: 20px;">
                <div class="about-gallery-wrapp position-relative">
                    <div class="image-gallery">
                        <img src="images/pages/about-us/BPC-Event2.webp" alt="WorldBI Gallery Images" class="w-100" />
                    </div>
                    <div class="overlay">
                        <div class="overlay-wrap">
                            <button style="background-color: transparent;" onclick="openModal();currentSlide(2)" class="gallery-plus image-popup">
                                <span></span>
                            </button>
                            <h4 class="gallery-title"><a>Brand Protection Conference 2023</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-ctip" data-title="clinical trials innovation programme" style="margin-bottom: 20px;">
                <div class="about-gallery-wrapp position-relative">
                    <div class="image-gallery">
                        <img src="images/pages/about-us/DRCC-Event1.webp" alt="WorldBI Gallery Images" class="w-100" />
                    </div>
                    <div class="overlay">
                        <div class="overlay-wrap">
                            <button style="background-color: transparent;" onclick="openModal();currentSlide(3)" class="gallery-plus image-popup">
                                <span></span>
                            </button>
                            <h4 class="gallery-title"><a>Connected Cars Conference 2024</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-dhh" data-title="digital health" style="margin-bottom: 20px;">
                <div class="about-gallery-wrapp position-relative">
                    <div class="image-gallery">
                        <img src="images/pages/about-us/PSIP-Event1.webp" class="hover-shadow img-fluid">
                    </div>
                    <div class="overlay">
                        <div class="overlay-wrap">
                            <button style="background-color: transparent;" onclick="openModal();currentSlide(4)" class="gallery-plus image-popup">
                                <span></span>
                            </button>
                            <h4 class="gallery-title"><a>Pharma Supply Chain Conference 2024</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-cts" data-title="clinical trial supply" style="margin-bottom: 20px;">
                <div class="about-gallery-wrapp position-relative">
                    <div class="image-gallery">
                        <img src="images/pages/about-us/PPL-Event1.webp" alt="WorldBI Gallery Images" class="w-100" />
                    </div>
                    <div class="overlay">
                        <div class="overlay-wrap">
                            <button style="background-color: transparent;" onclick="openModal();currentSlide(5)" class="gallery-plus image-popup">
                                <span></span>
                            </button>
                            <h4 class="gallery-title"><a>Pharmaa Packaging Conference 2024</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-ctip" data-title="clinical trials innovation programme" style="margin-bottom: 20px;">
                <div class="about-gallery-wrapp position-relative">
                    <div class="image-gallery">
                        <img src="images/pages/about-us/DDIP-Event2.webp" alt="WorldBI Gallery Images" class="w-100" />
                    </div>
                    <div class="overlay">
                        <div class="overlay-wrap">
                            <button style="background-color: transparent;" onclick="openModal();currentSlide(6)" class="gallery-plus image-popup">
                                <span></span>
                            </button>
                            <h4 class="gallery-title"><a>Drug Discovery Conference 2024</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="event-sponsors-2 section-padding" style="background-image: url('images/pages/about-us/sponsor-bg-2.jpg');">
    <div class="container">
        <div class="event-section-title about-event-title-2 text-center">
            <h2 class="main-title">Event Sponsors</h2>
        </div>
        <div class="active-sponsors">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="false"  slides-per-view="3" centered-slides="false" space-between="20">
                <swiper-slide class="swipers-slide">
                    <div class="sponsor-img-wrapp">    
                        <img class="img-fluid" src="images/sponsors/platinum-partners/esko.png" alt="World BI Sponsors" width="80%" />
                    </div>    
                </swiper-slide>
                <swiper-slide class="swipers-slide">
                    <div class="sponsor-img-wrapp">    
                        <img class="img-fluid" src="images/sponsors/platinum-partners/GlobalBlock_Black.png" alt="World BI Sponsors" width="80%" style="padding-top: 26px;" />
                    </div>    
                </swiper-slide>
                <swiper-slide class="swipers-slide">
                    <div class="sponsor-img-wrapp">    
                        <img class="img-fluid" src="images/sponsors/platinum-partners/tracelink.png" alt="World BI Sponsors" width="65%" />
                    </div>    
                </swiper-slide>
                <swiper-slide class="swipers-slide">
                    <div class="sponsor-img-wrapp">    
                        <img class="img-fluid" src="images/sponsors/platinum-partners/veratrak.svg" alt="World BI Sponsors" width="80%" style="padding-top: 28px;" />
                    </div>    
                </swiper-slide>
                <swiper-slide class="swipers-slide">
                    <div class="sponsor-img-wrapp">    
                        <img class="img-fluid" src="images/sponsors/gold-partners/insightsoftware.png" alt="World BI Sponsors" width="100%" style="padding-top: 8px;" />
                    </div>    
                </swiper-slide>
                <swiper-slide class="swipers-slide">
                    <div class="sponsor-img-wrapp">    
                        <img class="img-fluid" src="images/sponsors/gold-partners/sapio.jpg" alt="World BI Sponsors" width="80%" />
                    </div>    
                </swiper-slide>
                <swiper-slide class="swipers-slide">
                    <div class="sponsor-img-wrapp">    
                        <img class="img-fluid" src="images/sponsors/silver-partners/Agilent.jpg" alt="World BI Sponsors" width="0%" />
                    </div>    
                </swiper-slide>
                <swiper-slide class="swipers-slide">
                    <div class="sponsor-img-wrapp">    
                        <img class="img-fluid" src="images/sponsors/silver-partners/il-groupss.png" alt="World BI Sponsors" width="80%" />
                    </div>    
                </swiper-slide>
            </swiper-container>
        </div>
    </div>
</section>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class="mySlides text-center">
            <div class="numbertext">1 / 6</div>
            <img src="images/pages/gallery/DHI-Event3.webp" style="width:90%; height: 33rem">
        </div>
        
        <div class="mySlides text-center">
            <div class="numbertext">2 / 6</div>
            <img src="images/pages/about-us/BPC-Event2.webp" style="width:90%; height: 33rem">
        </div>
        
        <div class="mySlides text-center">
            <div class="numbertext">3 / 6</div>
            <img src="images/pages/about-us/DRCC-Event1.webp" style="width:90%; height: 33rem">
        </div>
        
        <div class="mySlides text-center">
            <div class="numbertext">4 / 6</div>
            <img src="images/pages/about-us/PSIP-Event1.webp" style="width:90%; height: 33rem">
        </div>

        <div class="mySlides text-center">
            <div class="numbertext">5 / 6</div>
            <img src="images/pages/about-us/PPL-Event1.webp" style="width:90%; height: 33rem">
        </div>
        
        <div class="mySlides text-center">
            <div class="numbertext">6/ 6</div>
            <img src="images/pages/about-us/DDIP-Event2.webp" style="width:90%; height: 33rem">
        </div>
        
        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>

<?php include "footer.php" ?>

<div class="progress-wrap active-progress">
    <!-- <i class="fas fa-sharp fa-light fa-arrow-up"></i> -->
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 9.98604;"></path>
    </svg>
</div>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/backToTop.js"></script>
<script>
        // Open the Modal
        function openModal() {
            console.log("Modal opening...");
            document.getElementById("myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
            console.log("Modal closing...");
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "block";
        }
</script>
</body>

</html>