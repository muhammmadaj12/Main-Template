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
            max-width: 265px;
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
        .event-cards{
            height: 21.2rem;
        }
    </style>
</head>

<body>

    <?php include "header.php" ?>
    <!-- 
        style="background-image: url('images/backgrounds/banners/BPC-2023.jpg');" 
        style="background-image: url('images/backgrounds/banners/cts.jpg');"
    -->

    <section class="bg-img overlay conferences-banner">
        <div class="container">
            <div class="conferences-banner-content text-center">
                <h2 class="title">Brand Protection Conferences</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Brand Protection</li>
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
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> The Resorts World Sentosa, Singapore</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item present-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href=""><img class="img-fluid card-img-top" src="images/conferences/BPC-2.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span>16-17</span> <span>Oct-24</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="">10<sup>th</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> Hotel Le Negresco Nice, France</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item present-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href=""><img class="img-fluid card-img-top" src="images/conferences/BPC-3.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span>29-30</span> <span>Oct-24</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="">11<sup>th</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span style="font-size: 18px"> New York City, New York</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href=""><img class="img-fluid card-img-top" src="images/conferences/BPC-4.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span>07-08</span> <span>Nov-23</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="">USA Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span>New York Marriott at The Brooklyn Bridge, USA</span></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href=""><img class="img-fluid card-img-top" src="images/conferences/BPC-5.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span>09-10</span> <span>Oct-23</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="">European Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> Steigenberger Frankfurter Hof Frankfurt, Germany</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href="javascript:void(0)"><img class="img-fluid card-img-top" src="images/conferences/BPC-6.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span></span> <span>Oct-22</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="javascript:void(0)">7<sup>th</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span>Hotel Le Negresco Nice, France</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href="javascript:void(0)"><img class="img-fluid card-img-top" src="images/conferences/BPC-7.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span></span> <span>Nov-21</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="javascript:void(0)">6<sup>th</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> This conference is held Online.</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href="javascript:void(0)"><img class="img-fluid card-img-top" src="images/conferences/BPC-8.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span></span> <span>Oct-20</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="javascript:void(0)">5<sup>th</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> This conference is held Online.</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href="javascript:void(0)"><img class="img-fluid card-img-top" src="images/conferences/BPC-9.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span></span> <span>Oct-19</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="javascript:void(0)">4<sup>th</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span> This conference is held Online.</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href="javascript:void(0)"><img class="img-fluid card-img-top" src="images/conferences/BPC-10.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span></span> <span>Sep-19</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="javascript:void(0)">3<sup>rd</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span>China</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href="javascript:void(0)"><img class="img-fluid card-img-top" src="images/conferences/BPC-11.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span></span> <span>Dec-18</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="javascript:void(0)">2<sup>nd</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span>Frankfurt, Germany</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href="javascript:void(0)"><img class="img-fluid card-img-top" src="images/conferences/BPC-12.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span></span> <span>Nov-17</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category bpc-bgcolor">Brand Protection</span>
                                <h3 class="card-title title">
                                    <a href="javascript:void(0)">1<sup>st</sup> Brand Protection Congress</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> <span>Munich, Germany</span></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
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
