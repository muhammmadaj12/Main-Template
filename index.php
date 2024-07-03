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
    swiper-container {
      width: 100%;
      height: 100%;
    }
    .category .container a{
      text-decoration: none;
      color: #592529;
    }
    .event-cards {
      height: 20.2rem;
    }
    .category .main-title,
    .success-stories .main-title{
      font-size: 48px;
      font-weight: 700;
      line-height: 60px;
      font-family: "Archivo", sans-serif;
    }
  </style>
</head>

<body>
<header>
  <nav class="my-nav navbar navbar-expand-lg fixed-top">
    <div class="container pr-5">
      <a class="navbar-brand" href="index.php">
        <img src="images/worldbi-logo.png" alt="WorldBI logo" width="170" height="55" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php" data-text="&nbsp;Home">&nbsp;Home&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.php" data-text="&nbsp;About">&nbsp;About Us&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-text="&nbsp;Marketplace">&nbsp;Marketplace&nbsp;</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Conferences</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">In Person Conferences</a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="digital-health-conferences.php">Digital Health</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="drug-discovery-conferences.php">Drug Discovery</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="clinical-trials-conferences.php">Clinical Trials</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pharma-packaging-conferences.php">Pharma Packaging</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="pharma-supply-chain-conferences.php">Pharma Supply Chain</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="clinical-trial-supply-conferences.php">Clinical Trial Supply</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="brand-protection-conferences.php">Brand Protection</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="connected-cars-conferences.php">Connected Cars</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="hotel-technology-conferences.php">Hotel Technology</a>
                  </li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="webinars.php">Webinars</a></li>
                <!-- <li><hr class="dropdown-divider"></li> -->
                <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            </ul>
          </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#" data-text="&nbsp;Services">&nbsp;Services&nbsp;</a>
              </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Insights</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="testimonials.php">Testimonials</a></li>
              <li><a class="dropdown-item" href="#">Event Blogs</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">Success Stories</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery.php/#" data-text="&nbsp;Gallery">&nbsp;Gallery&nbsp;</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faqs.php" data-text="&nbsp;FAQ's">&nbsp;FAQ's&nbsp;</a>
          </li>
          <a class="btn buy-btn" href="contact-us.php" style="display: flex; align-items: center;font-weight: 500;">Contact US</a>
        </ul>
      </div>
    </div>
  </nav>

    <div class="hero-section bg-img d-flex align-items-center">
      <img src="images/backgrounds/hero-5-img-1.png" alt="Worldbi Events" class="image-1" />
      <img src="images/backgrounds/hero-5-img-2.png" alt="Worldbi Events" class="image-2" />
      <img src="images/backgrounds/shape-1.png" alt="Shape1" class="shape-1" />
      <img src="images/backgrounds/shape-2.png" alt="Shape2" class="shape-2" />
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero-content">
              <div class="text-center title-wrap">
                <h2 class="title">Find Event</h2>
                <h3 class="sub-title">Awesome event, conference & fest around you</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>

  <section class="category">
    <div class="container overflow-hidden">
      <div class="category-header text-center" style="margin-top: 5rem;">
        <h2 class="main-title"> <span class="title-shape-1">Browse</span> By Category</h2>
      </div>
      <div class="container text-center mt-lg-4">
        <!-- row-cols-2 ||| row-cols-2 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 -->
        <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-3 g-2 g-lg-2 justify-content-center align-items-center">
          <div class="col">
          <a href="digital-health-conferences.php">
            <div class="p-4 rounded-circle category-items">
              <img src="images/icons/ai.gif" alt="Worldbi Event Category" />
              <h3>Digital Health</h3>
            </div>
          </a>
          </div>
          <div class="col">
            <a href="clinical-trials-conferences.php">
              <div class="p-4 rounded-circle category-items">
              <img src="images/icons/microscope.gif" alt="Worldbi Event Category" />
              <h3>Clinical <br />Trials</h3>
              </div>
            </a>
          </div>
          <div class="col">
          <a href="drug-discovery-conferences.php">
            <div class="p-4 rounded-circle category-items">
              <img src="images/icons/drugs.gif" alt="Worldbi Event Category" />
              <h3>Drug Discovery</h3>
            </div>
          </a>
          </div>
          <div class="col">
            <a href="clinical-trial-supply-conferences.php">
              <div class="p-4 rounded-circle category-items">
              <img src="images/icons/health-report.gif" alt="Worldbi Event Category" />
              <h3>Clinical Trial Supply</h3>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="pharma-packaging-conferences.php">
              <div class="p-4 rounded-circle category-items">
              <img src="images/icons/package.gif" alt="Worldbi Event Category" />
              <h3>Pharma Packaging</h3>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="pharma-supply-chain-conferences.php">
              <div class="p-4 rounded-circle category-items">
              <img src="images/icons/pharmacy.gif" alt="Worldbi Event Category" />
              <h3>Pharma Supply Chain</h3>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="brand-protection-conferences.php">
              <div class="p-4 rounded-circle category-items">
              <img src="images/icons/shield.gif" alt="Worldbi Event Category" />
              <h3>Brand Protection</h3>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="connected-cars-conferences.php">
              <div class="p-4 rounded-circle category-items">
              <img src="images/icons/car.gif" alt="Worldbi Event Category" />
              <h3>Connected Cars</h3>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="hotel-technology-conferences.php">
              <div class="p-4 rounded-circle category-items">
              <img src="images/icons/hotel.gif" alt="Worldbi Event Category" />
              <h3>Hotel Technology</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="success-stories">
    <div class="content-header mt-5 mb-3 text-center">
      <h2 class="main-title"> <span class="title-shape-1">Upcoming </span> Events</h2>
    </div>
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" slides-per-view="auto" centered-slides="true" space-between="0" initial-slide="1">
      <swiper-slide class="swipers-slide">
        <div class="div">
          <div class="div-2">
            <div class="div-3">
              <div class="img-column">
                <img loading="lazy" src="images/backgrounds/drcc-bg.jpg" alt="Worlbi Success Stories" class="img" />
              </div>
              <div class="content-column">
                <div class="overlay-content">
                  <h3 class="overlay-heading">
                    4<sup>th</sup> Digital Revolution In Connected Cars
                  </h3>
                  <div class="overlay-p">
                    <p>
                      <i class="fa-regular fa-calendar-days"></i> 13 - 14
                      March 2025
                    </p>
                    <p>
                      <i class="fa-solid fa-location-dot"></i> Munich, Germany
                    </p>
                    <br />
                    <a type="button" class="btn buy-btn">Book your Seat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="div">
          <div class="div-2">
            <div class="div-3">
              <div class="img-column">
                <img loading="lazy" src="images/backgrounds/drcc-bg.jpg" alt="Worlbi Success Stories" class="img" />
              </div>
              <div class="content-column">
                <div class="overlay-content">
                  <h3 class="overlay-heading">
                    4<sup>th</sup> Digital Revolution In Connected Cars
                  </h3>
                  <div class="overlay-p">
                    <p>
                      <i class="fa-regular fa-calendar-days"></i> 13 - 14
                      March 2025
                    </p>
                    <p>
                      <i class="fa-solid fa-location-dot"></i> Munich, Germany
                    </p>
                    <br />
                    <a type="button" class="btn buy-btn">Book your Seat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="div">
          <div class="div-2">
            <div class="div-3">
              <div class="img-column">
                <img loading="lazy" src="images/backgrounds/drcc-bg.jpg" alt="Worlbi Success Stories" class="img" />
              </div>
              <div class="content-column">
                <div class="overlay-content">
                  <h3 class="overlay-heading">
                    4<sup>th</sup> Digital Revolution In Connected Cars
                  </h3>
                  <div class="overlay-p">
                    <p>
                      <i class="fa-regular fa-calendar-days"></i> 13 - 14
                      March 2025
                    </p>
                    <p>
                      <i class="fa-solid fa-location-dot"></i> Munich, Germany
                    </p>
                    <br />
                    <a type="button" class="btn buy-btn">Book your Seat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="div">
          <div class="div-2">
            <div class="div-3">
              <div class="img-column">
                <img loading="lazy" src="images/backgrounds/drcc-bg.jpg" alt="Worlbi Success Stories" class="img" />
              </div>
              <div class="content-column">
                <div class="overlay-content">
                  <h3 class="overlay-heading">
                    4<sup>th</sup> Digital Revolution In Connected Cars
                  </h3>
                  <div class="overlay-p">
                    <p>
                      <i class="fa-regular fa-calendar-days"></i> 13 - 14
                      March 2025
                    </p>
                    <p>
                      <i class="fa-solid fa-location-dot"></i> Munich, Germany
                    </p>
                    <br />
                    <a type="button" class="btn buy-btn">Book your Seat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="div">
          <div class="div-2">
            <div class="div-3">
              <div class="img-column">
                <img loading="lazy" src="images/backgrounds/drcc-bg.jpg" alt="Worlbi Success Stories" class="img" />
              </div>
              <div class="content-column">
                <div class="overlay-content">
                  <h3 class="overlay-heading">
                    4<sup>th</sup> Digital Revolution In Connected Cars
                  </h3>
                  <div class="overlay-p">
                    <p>
                      <i class="fa-regular fa-calendar-days"></i> 13 - 14
                      March 2025
                    </p>
                    <p>
                      <i class="fa-solid fa-location-dot"></i> Munich, Germany
                    </p>
                    <br />
                    <a type="button" class="btn buy-btn">Book your Seat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
      <swiper-slide>
        <div class="div">
          <div class="div-2">
            <div class="div-3">
              <div class="img-column">
                <img loading="lazy" src="images/backgrounds/drcc-bg.jpg" alt="Worlbi Success Stories" class="img" />
              </div>
              <div class="content-column">
                <div class="overlay-content">
                  <h3 class="overlay-heading">
                    4<sup>th</sup> Digital Revolution In Connected Cars
                  </h3>
                  <div class="overlay-p">
                    <p>
                      <i class="fa-regular fa-calendar-days"></i> 13 - 14
                      March 2025
                    </p>
                    <p>
                      <i class="fa-solid fa-location-dot"></i> Munich, Germany
                    </p>
                    <br />
                    <a type="button" class="btn buy-btn">Book your Seat</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </swiper-slide>
    </swiper-container>
  </section>

  <section class="featured-events">
    <div class="container">
      <div class="events-title text-center">
        <h2 class="main-title"> <span class="title-shape-1">Featured </span>Events</h2>
      </div>

      <div class="events-cards-wrapp">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card event-cards">
              <div class="card-img">
                <a href=""><img class="img-fluid card-img-top" src="images/conferences/BPC-1.webp" alt="World BI Events" /></a>
                <div class="event-date">
                  <span class="date"><span>26-27</span> <span>Jun-24</span></span>
                </div>
              </div>
              <div class="events-description">
                <span class="category bpc-bgcolor">Brand Protection</span>
                <h3 class="card-title title">
                  <a href="javascript:void(0)">Asian Brand Protection Congress</a>
                </h3>
                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> Sentosa, Singapore</span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card event-cards">
              <div class="card-img">
                <a href=""><img class="img-fluid card-img-top" src="images/stickers/DDIP-1.webp" alt="World BI Events" /></a>
                <div class="event-date">
                  <span class="date"><span>17-18</span> <span>Sept-24</span></span>
                </div>
              </div>
              <div class="events-description">
                <span class="category ddip-bgcolor">Drug Discovery</span>
                <h3 class="card-title title">
                  <a href="">24<sup>th</sup> Drug Discovery Innovation Programme</a>
                </h3>
                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span>Barcelona, Spain</span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card event-cards">
              <div class="card-img">
                <a href=""><img class="img-fluid card-img-top" src="images/stickers/DHI-2024.webp" alt="World BI Events" /></a>
                <div class="event-date">
                  <span class="date"><span>07-09</span> <span>Oct-24</span></span>
                </div>
              </div>
              <div class="events-description">
                <span class="category dhi-bgcolor">Digital Health</span>
                <h3 class="card-title title">
                  <a href="">Digital Health & AI Innovation Summit</a>
                </h3>
                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> Massachusetts, USA</span></span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card event-cards">
              <div class="card-img">
                <a href=""><img class="img-fluid card-img-top" src="images/stickers/BPC-2.webp" alt="World BI Events" /></a>
                <div class="event-date">
                  <span class="date"><span>16-17</span> <span>Oct-24</span></span>
                </div>
              </div>
              <div class="events-description">
                <span class="category bpc-bgcolor">Brand Protection</span>
                <h3 class="card-title title">
                  <a href="">10<sup>th</sup> Brand Protection Congress</a>
                </h3>
                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> Nice, France</span></span>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-12">
        <div class="featured-more text-center">
          <a class="btn-2" href="">More Featured Events</a>
        </div>
      </div>
    </div>
  </section>

  <section class="sponsors-section">
    <div class="container">
      <div class="events-title text-center">
        <h2 class="main-title">
          Event by <shape class="title-shape-1">Organizer</shape>
        </h2>
      </div>

      <div class="sponsors-wrapp my-5">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12 borders">
            <div class="sponsers-inner-wrapp sponsor-box-1">
              <div class="premium-sponsors sponsor-logo-1">
                <img class="img-fluid" src="images/sponsors/platinum-partners/esko.png" alt="World BI Sponsors" />
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-12 borders">
            <div class="sponsers-inner-wrapp sponsor-box-1">
              <div class="premium-sponsors sponsor-logo-1">
                <!-- \sponsors\gold-partners\insightsoftware.png -->
                <img class="img-fluid" src="images/sponsors/platinum-partners/GlobalBlock_Black.png"
                  alt="World BI Sponsors" />
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-12 borders">
            <div class="sponsers-inner-wrapp sponsor-box-1">
              <div class="premium-sponsors sponsor-logo-1">
                <!-- \sponsors\gold-partners\insightsoftware.png -->
                <img class="img-fluid" src="images/sponsors/platinum-partners/tracelink.png"
                  alt="World BI Sponsors" />
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-12 borders">
            <div class="sponsers-inner-wrapp sponsor-box-2">
              <div class="premium-sponsors sponsor-logo-1">
                <!-- \sponsors\gold-partners\insightsoftware.png -->
                <img class="img-fluid" src="images/sponsors/platinum-partners/veratrak.svg"
                  alt="World BI Sponsors" />
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-12 borders">
            <div class="sponsers-inner-wrapp sponsor-box-1">
              <div class="premium-sponsors sponsor-logo-2">
                <img class="img-fluid" src="images/sponsors/gold-partners/insightsoftware.png"
                  alt="World BI Sponsors" />
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-12 borders">
            <div class="sponsers-inner-wrapp sponsor-box-1">
              <div class="premium-sponsors sponsor-logo-2">
                <img class="img-fluid" src="images/sponsors/gold-partners/sapio.jpg" alt="World BI Sponsors" />
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-12 borders">
            <div class="sponsers-inner-wrapp sponsor-box-1">
              <div class="premium-sponsors sponsor-logo-2">
                <img class="img-fluid" src="images/sponsors/silver-partners/Agilent.jpg" alt="World BI Sponsors" />
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-12 borders">
            <div class="sponsers-inner-wrapp sponsor-box-1">
              <div class="premium-sponsors sponsor-logo-2">
                <img class="img-fluid" src="images/sponsors/silver-partners/il-groupss.png"
                  alt="World BI Sponsors" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include "footer.php" ?>

  <div class="progress-wrap active-progress">
    <!-- <i class="fas fa-sharp fa-light fa-arrow-up"></i> -->
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 9.98604;
          "></path>
    </svg>
  </div>

  <!-- <script>
  // var swiper = new Swiper(".mySwiper", {
  //   slidesPerView: 3,
  //   spaceBetween: 30,
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //   },
  // });
  // var swiper = new Swiper(".mySwiper", {
  //     slidesPerView: 1,
  //     spaceBetween: 10,
  //     pagination: {
  //       el: ".swiper-pagination",
  //       clickable: true,
  //     },
  //     breakpoints: {
  //       640: {
  //         slidesPerView: 2,
  //         spaceBetween: 20,
  //       },
  //       768: {
  //         slidesPerView: 4,
  //         spaceBetween: 40,
  //       },
  //       1024: {
  //         slidesPerView: 5,
  //         spaceBetween: 50,
  //       },
  //     },
  //   });
</script> -->

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/backToTop.js"></script>
</body>

</html>