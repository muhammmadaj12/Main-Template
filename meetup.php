

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World BI Meetup App</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="style/style.css" />
    <style>
        .conferences-banner{
            margin-top: 5rem;
        }
        .hero-section {
            height: 60vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: relative;
            z-index: 1;
            padding-top: 190px;
            padding-bottom: 265px;
        }

        .hero-section .hero-content .title {
            text-transform: capitalize;
            font-size: 3.5rem;
            padding-bottom: 10px;
            font-weight: 700;
        }

        .hero-section .hero-content .title-wrap .title::before {
            content: none;
        }

        ol.breadcrumb{
            max-width: 280px;
        }

        @media (max-width: 330px) {
            .hero-section .hero-content .title {
                font-size: 4rem;
            }
        }

        @media (max-width: 220px) {
            .hero-section .hero-content .title {
                font-size: 3rem;
            }
        }

        .tab-data {
            background-color: #fff;
            border: 1px solid #dee2e6;
            color: #495057;
            padding: 10px 20px;
            font-size: 16px;
            margin: 0 5px;
            cursor: pointer;
            display: inline-block;
            transition: 1s ease;
        }
        .tab-data:hover,
        .tab-data.active {
            background-color: #0C134F;
            color: #fff;
            border-color: #0C134F;
            transition: all 1s ease;
        }
        @media (max-width: 250px){
            .tab-data{
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <?php include "header.php" ?>

    <section class="bg-img conferences-banner">
        <div class="container">
            <div class="conferences-banner-content text-center">
                <h2 class="title">Meetup App</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Meetup App</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- <section class="conferences-events">
        <div class="container">
            <div class="events-cards-wrapp">
                <div id="tabs" class="filter-box buttons text-center" style="margin-bottom: 20px;">
                    <button class="tab-data mb-4 active" data-filter="present-events">Upcoming Conferences</button>
                    <button class="tab-data mb-4" data-filter="past-events">Past Conferences</button>
                </div>
                <div class="row" style="justify-content: center;">

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item present-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href=""><img class="img-fluid card-img-top" src="images/conferences/DHI-2024.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span>07-09</span> <span>Oct-24</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category dhi-bgcolor">Digital Health</span>
                                <h3 class="card-title title">
                                    <a href="">Digital Health & AI Innovation Summit</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span>Boston Marriott Cambridge, Massachusetts</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href=""><img class="img-fluid card-img-top" src="images/conferences/DHI-2023.webp" alt="World BI Events"  /></a>
                                <div class="event-date">
                                    <span class="date"><span>06-07</span> <span>Jun-23</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category dhi-bgcolor">Digital Health</span>
                                <h3 class="card-title title">
                                    <a href="">Digital Health Innovation Summit</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span>San Francisco, California</span></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->

    <section class="meetup-section" style="padding-top: 85px;" >
        <div class="container">
            <div class="row g-2" style="align-items: center;">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2>Unleash the Power of Connection</h2>
                    <p>With the Meetup app, attendees can effortlessly network, collaborate, and forge invaluable partnerships. Explore the Meetup App! Dive into a world of networking and collaboration possibilities with our user-friendly app. Join the community that's shaping the future of networking!</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row" style="align-item: center;">
                    <div class="col">
                        <span class="mb-2 d-block">
                            <a style="cursor: pointer" href="https://play.google.com/store/apps/details?id=com.sw3solutions.worldbi">
                                <img src="images/backgrounds/Play_Store_Badge.svg" class="img-fluid" alt="Google Play Store" />
                            </a>
                        </span>
                    </div>
                    <div class="col">
                        <span class="mb-2 d-block">
                            <a style="cursor: pointer" href="https://apps.apple.com/app/world-bi/id6448930862">
                                <img src="images/backgrounds/App_Store_Badge.svg"  alt="Apple App Store" class="img-fluid" />
                            </a>
                        </span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="meetup-videos" style="padding-top: 40px;">
        <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <iframe  width="100%" height="280" src="https://www.youtube.com/embed/Q-eL5sV6oIw?si=hEDpGozd7i4SikuA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 col-sm-12">
                <iframe width="100%" height="280" src="https://www.youtube.com/embed/KNnf7H-z6KY?si=yeppZCilBw3I4tm5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 col-sm-12">
                <iframe width="100%" height="280" src="https://www.youtube.com/embed/aqbikDuhikE?si=dFp4CwjD7cSzqZLu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/backToTop.js"></script>
    

</body>

</html>
