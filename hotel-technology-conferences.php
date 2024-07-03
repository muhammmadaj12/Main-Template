

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
                <h2 class="title">Hotel Technology Conferences</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hotel Technology</li>
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
                                <a href=""><img class="img-fluid card-img-top" src="images/conferences/DHT-1.webp" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span>28-29</span> <span>Jan-25</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category dht-bgcolor">Hotel Technology</span>
                                <h3 class="card-title title">
                                    <a href="">Digital Transformation in Hotel Technology</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fas fa-map-marker-alt"></i> Nice, France</span>
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
