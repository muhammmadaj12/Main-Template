<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Template</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style/style.css" />
    <style>
       ol.breadcrumb{
            max-width: 230px;
        }
        .main-title {
            font-size: 40px;
            line-height: 50px;
            font-family: "Archivo", sans-serif;
            font-weight: 700;
        }
        .main-title .title-shape-1 {
            position: relative;
            z-index: 1;
        }.main-title .title-shape-1::before {
            position: absolute;
            left: 22px;
            bottom: -48px;
            content: '';
            width: 100%;
            height: 100%;
            background-image: url('images/events/title-shape.png');
            background-repeat: no-repeat;
            z-index: -1;
        }
        .space-above{
            margin-top: 5rem;
        }
        .testimonials-banner {
            padding-top: 150px;
            padding-bottom: 150px;
        }
        .bg-img{
            background-image: url('images/backgrounds/test-6.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            /* min-height: 75vh; */
        }
    </style>
</head>

<body>

    <?php include "header.php" ?>

    <section class="bg-img testimonials-banner">
        <div class="container">
            <div class="testimonials-banner-content text-center">
                <h2 class="title">Testimonials</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="testimonials-feedback">
        <div class="container">
           <div class="row">
            <div class="col-12">
                <div class="text-center pb-5">
                    <h3 class="main-title"> <span class="title-shape-1">Speakers</span> Testimonials</h3>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header">
                            <div class="intro">
                                <h3>Celia Almeda</h3>
                            </div>
                            <div class="image"></div>
                        </div>
                        <div class="feedback-shape"> <img class="img-fluid" alt="Shape for Header" src="images/icons/testimonials.webp" /> </div>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.</p>
                    </div>    
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header">
                            <div class="intro">
                                <h3>Frank Kinney</h3>
                            </div>
                            <div class="image"></div>
                        </div>
                        <div class="feedback-shape"> <img class="img-fluid" alt="Shape for Header" src="images/icons/testimonials.webp" /> </div>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.</p>
                    </div>    
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header">
                            <div class="intro">
                                <h3>Nick Jhonson</h3>
                            </div>
                            <div class="image"></div>
                        </div>
                        <div class="feedback-shape"> <img class="img-fluid" alt="Shape for Header" src="images/icons/testimonials.webp" /> </div>
                    </div> 
                    <div class="card-body">
                        <p class="text-justify">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.</p>
                    </div>   
                </div>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div style="margin-top: 4rem;">
                    <iframe width="100%" style="height: 20rem;" src="https://www.youtube.com/embed/V_EU1h-MRww?si=6GS-EaQfmtCjzXav" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin" ></iframe>
                </div>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div style="margin-top: 4rem;">
                    <iframe width="100%" style="height: 20rem;"  src="https://www.youtube.com/embed/GwKTLXLxIBE?si=kpJ7QC_RSoFKNt9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin" ></iframe>
                </div>
           </div>
           <!-- =========================================================================== -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 space-above">
                <div class="card">
                    <div class="card-header">
                        <div class="header">
                            <div class="intro">
                                <h3>Celia Almeda</h3>
                            </div>
                            <div class="image"></div>
                        </div>
                        <div class="feedback-shape"> <img class="img-fluid" alt="Shape for Header" src="images/icons/testimonials.webp" /> </div>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.</p>
                    </div>    
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 space-above">
                <div class="card">
                    <div class="card-header">
                        <div class="header">
                            <div class="intro">
                                <h3>Frank Kinney</h3>
                            </div>
                            <div class="image"></div>
                        </div>
                        <div class="feedback-shape"> <img class="img-fluid" alt="Shape for Header" src="images/icons/testimonials.webp" /> </div>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.</p>
                    </div>    
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 space-above">
                <div class="card">
                    <div class="card-header">
                        <div class="header">
                            <div class="intro">
                                <h3>Nick Jhonson</h3>
                            </div>
                            <div class="image"></div>
                        </div>
                        <div class="feedback-shape"> <img class="img-fluid" alt="Shape for Header" src="images/icons/testimonials.webp" /> </div>
                    </div> 
                    <div class="card-body">
                        <p class="text-justify">Proin sed libero enim sed faucibus turpis. At imperdiet dui accumsan sit amet nulla facilisi morbi tempus. Ut sem nulla pharetra diam sit amet nisl.</p>
                    </div>   
                </div>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div style="margin-top: 4rem;">
                    <iframe width="100%" style="height: 20rem;" src="https://www.youtube.com/embed/V_EU1h-MRww?si=6GS-EaQfmtCjzXav" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin" ></iframe>
                </div>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div style="margin-top: 4rem;">
                    <iframe width="100%" style="height: 20rem;"  src="https://www.youtube.com/embed/GwKTLXLxIBE?si=kpJ7QC_RSoFKNt9I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin" ></iframe>
                </div>
           </div>
        </div>
    </section>

    <?php include "footer.php" ?>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 9.98604;"></path>
        </svg>
    </div>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/backToTop.js"></script>

</body>

</html>
