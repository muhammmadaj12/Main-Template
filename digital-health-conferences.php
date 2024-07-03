<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Template</title>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="style/style.css" />
    <style>
        /* .conferences-banner-container{
            display: flex;
            justify-content: center;
            align-items: center;
        } */
        .conferences-banner-content {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            width: 60%;
            margin: auto;
            padding: 3rem 1rem;
        }
        ol.breadcrumb{
            max-width: 250px;
        }
        .bg-img{
            /* background-image: url('images/backgrounds/DHI-Conferences.webp'); */
            /* background: #5c9d9e; */
            background:#009191;
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
        .conferences-events .event-cards .events-description {
            padding: 0;
        }
        @media (max-width: 250px){
            .tab-data{
                font-size: 16px;
            }
        }
        .event-cards {
            height: 14rem;
        }
        @media (max-width: 767px){
            .conferences-banner-content {
                width: 96%;
            }
        }
        @media (max-width: 555px){
            .conferences-banner .conferences-banner-content .title{
                font-size: 2.3rem;
            }
        }
        @media (max-width: 384px){
            .conferences-banner .conferences-banner-content .title{
                font-size: 2rem;
            }
        }
        .events-description {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .conferences-events .event-cards .events-description .title{
            font-size: 27px;
            line-height: 24px;
        }
        .conferences-events .event-cards .events-description .category {
            font-size: 13px;
            font-weight: 700;
            height: 26px;
            line-height: 26px;
            padding: 0 7px;
            color: #009091;
            border-radius: 40px;
            display: inline-block;
            transform: translateY(-15px);
        }
        .dhi-bgcolor {
            background: #fff;
        }
    </style>
</head>

<body class="dhi-conference">

    <?php include "header.php" ?>

    <section class="bg-img conferences-banner">
        <div class="container">
            <div class="conferences-banner-content text-center">
                <h2 class="title text-white" style="line-height: 1.5em;">Digital Health Conferences</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Digital Health</li>
                    </ol>
                </nav>
            </div>
        </div>    
    </section>

    <section class="conferences-events">
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
            
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 portfolio-item present-events mb-4">
                <div class="row g-0  position-relative event-cards">
                <div class="col-md-6 mb-md-0">
                    <div style="padding: 22px 0;">
                    <!-- <img src="images/pages/gallery/DHI-Event1.webp" class="img-fluid w-100" alt="..."> -->
                    <img src="images/conferences/DHI-2024.webp" class="img-fluid w-100" style="border-radius: 0px 16px 16px 0px" alt="...">
                    </div>
                </div>
                <div class="col-md-6 ps-md-0 events-description">
                    <div class="text-start" style="margin-left: 17px;">
                    <span class="category dhi-bgcolor" style="position: absolute;top: 48px;left: 5px;">Digital Health</span>
                    <h3 class="card-title title"><a href="">Digital Health AI Innovation Summit</a></h3>
                    <p class="card-subtitle location" style="margin: 7px 0;"><i class="fas fa-calendar-days"></i> &nbsp; <span>07-09 Oct-24</span></p>
                    <p class="card-subtitle location" style="margin: 7px 0;"><i class="fas fa-map-marker-alt"></i> &nbsp;   <span>Boston Marriott Cambridge, Massachusetts</span></p>
                    <a href="#" class="stretched-link">Go somewhere</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 portfolio-item present-events mb-4">
                <div class="row g-0  position-relative event-cards">
                <div class="col-md-6 mb-md-0">
                    <div style="padding: 22px 0;">
                    <img src="images/conferences/DHI-2024.webp" class="img-fluid w-100" style="border-radius: 0px 16px 16px 0px" alt="...">
                    </div>
                </div>
                <div class="col-md-6 ps-md-0 events-description">
                    <div class="text-start" style="margin-left: 17px;">
                    <span class="category dhi-bgcolor" style="position: absolute;top: 48px;left: 5px;">Digital Health</span>
                    <h3 class="card-title title"><a href="">Digital Health AI Innovation Summit</a></h3>
                    <p class="card-subtitle location" style="margin: 7px 0;"><i class="fas fa-calendar-days"></i> &nbsp; <span>07-09 Oct-24</span></p>
                    <p class="card-subtitle location" style="margin: 7px 0;"><i class="fas fa-map-marker-alt"></i> &nbsp;   <span>Boston Marriott Cambridge, Massachusetts</span></p>
                    <a href="#" class="stretched-link">Go somewhere</a>
                    </div>
                </div>
                </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const storeProducts = document.querySelectorAll('.portfolio-item');

            var header = document.getElementById("tabs");
            var btns = header.getElementsByClassName("tab-data");

            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.querySelectorAll(".tab-data.active");
                    current.forEach(tab => tab.classList.remove("active"));
                    this.classList.add("active");

                    const filter = this.getAttribute("data-filter");

                    storeProducts.forEach(product => {
                        if (product.classList.contains(filter)) {
                            product.style.display = 'block';
                        } else {
                            product.style.display = 'none';
                        }
                    });
                });
            }

            // Show only upcoming conferences by default
            const activeTab = document.querySelector('.tab-data.active');
            const activeFilter = activeTab.getAttribute("data-filter");

            storeProducts.forEach(product => {
                if (product.classList.contains(activeFilter)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    </script>

</body>

</html>
