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

        ol.breadcrumb {
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

        @media (max-width: 250px) {
            .tab-data {
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
                <h2 class="title">Webinars</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Webinars</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="webinar-events">
        <div class="container">
            <div class="webinar-events-wrapp">
                <div id="tabs" class="filter-box buttons text-center" style="margin-bottom: 20px;">
                    <button class="tab-data mb-4" data-tab="present-events">Upcoming Conferences</button>
                    <button class="tab-data active mb-4" data-tab="past-events">Past Conferences</button>
                </div>
                <div class="row" style="justify-content: center;">
                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href=""><img class="img-fluid card-img-top" src="images/events/webinars/food.jpg" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span>23 Nov</span> <span>2023</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category color-4">Food Packaging</span>
                                <h3 class="card-title title">
                                    <a href="">Food and Beverages Packaging Forum</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fa-solid fa-clock"></i> 1:00 CET</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item past-events mb-4">
                        <div class="card event-cards">
                            <div class="card-img">
                                <a href=""><img class="img-fluid card-img-top" src="images/events/webinars/BPC Sticker.jpg" alt="World BI Events" /></a>
                                <div class="event-date">
                                    <span class="date"><span>22 June</span> <span>2023</span></span>
                                </div>
                            </div>
                            <div class="events-description">
                                <span class="category color-4">Brand Protection</span>
                                <h3 class="card-title title font-style">
                                    <a href="">Brand Protection Innovation Day</a>
                                </h3>
                                <span class="card-subtitle location"><i class="fa-solid fa-clock"></i> 9:00 CET</span>
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
        // JavaScript for tab functionality
        document.addEventListener("DOMContentLoaded", function () {
            const tabs = document.querySelectorAll(".tab-data");
            const items = document.querySelectorAll(".portfolio-item");

            function showActiveTab() {
                tabs.forEach(tab => {
                    if (tab.classList.contains("active")) {
                        const tabContent = tab.getAttribute("data-tab");
                        items.forEach(item => {
                            if (item.classList.contains(tabContent)) {
                                item.style.display = "block";
                            } else {
                                item.style.display = "none";
                            }
                        });
                    }
                });
            }

            tabs.forEach(tab => {
                tab.addEventListener("click", () => {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove("active"));
                    // Add active class to the clicked tab
                    tab.classList.add("active");

                    // Show items that match the tabContent
                    showActiveTab();
                });
            });

            // Initialize by showing the active tab
            showActiveTab();
        });
    </script>
</body>

</html>
