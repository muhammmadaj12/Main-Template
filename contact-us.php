<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Website Template</title>
    
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="style/style.css" />
    <style>
        .info-cards-wrap p a{
            text-decoration: none;
            color: #666666;
        }
        .info-cards-wrap p a:hover,
        .contact-banner a:hover{
            text-decoration: underline;
        }
        @media screen (min-width: 992px) and (max-width: 1199px){
            .info-cards-wrap{
                min-height: 160px;
            }
        }
    </style>
</head>

<body>
<?php include "header.php" ?>

<section class="bg-img contact-banner">
    <div class="container">
            <div class="contact-banner-content text-center">
                <h2 class="title">Contact Us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
          </div>
        </div>
    </div>
</section>

<section class="contact-form-section">
    <div class="container">
        <div class="contact-wrap">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="form-title text-center">
                    <h2 class="title">Sent Us A Message</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form action="#" method="post" style="padding-top: 20px;">
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-form">
                                    <div class="form-floating">
                                        <select class="form-select" id="enquiry" aria-label="enquiry type">
                                            <option hidden="hidden" value="" disabled selected>Select Enquiry Type</option>
                                            <option value="Attendee Enquiry">Attendee Enquiry</option>
            			                    <option value="Media Enquiry">Media Enquiry</option>
            			                    <option value="Speaker Opportunity">Speaker Opportunity</option>
            			                    <option value="Sponsorship Opportunity">Sponsorship Opportunity</option>
            			                    <option value="Other">Other</option>
                                        </select>
                                        <label for="enquiry">Enquiry</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <div class="form-floating">
                                        <select class="form-select" id="industry" name="industry">
                                            <option hidden="hidden" value="" disabled selected>Select Event</option>
                                            <option value="Digital Health & AI Innovation Summit">Digital Health & AI Innovation Summit</option>
                                            <option value="28th Clinical Trials Innovation Programme">28th Clinical Trials Innovation Programme</option>
                                            <option value="6th Clinical Trial Supply Forum">6th Clinical Trial Supply Forum</option>
                                            <option value="23rd Drug Discovery Innovation Programme">23rd Drug Discovery Innovation Programme</option>
                                            <option value="24th Drug Discovery Innovation Programme">24th Drug Discovery Innovation Programme</option>
                                            <option value="7th Pharma Packaging and Labelling Forum">7th Pharma Packaging and Labelling Forum</option>                            
                                            <option value="8th Pharma & Device Packaging & Labelling Forum">8th Pharma & Device Packaging & Labelling Forum</option>
                                            <option value="Asian Brand Protection Congress">Asian Brand Protection Congress</option>
                                            <option value="10th Brand Protection Congress">10th Brand Protection Congress</option>
                                            <option value="11th Brand Protection Congress">11th Brand Protection Congress</option>
                                            <option value="10th Pharma Supply Chain & Logistics Innovation Programme">10th Pharma Supply Chain & Logistics Innovation Programme</option>
                                            <option value="11th Pharma Supply Chain & Logistics Innovation Programme">11th Pharma Supply Chain & Logistics Innovation Programme</option>
                                            <option value="Digital Tranformation in Hotel Technology">Digital Tranformation in Hotel Technology</option>
                                        </select>
                                        <label for="industry">Conferences</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input class="form-control" id="first_name" autocomplete="off" name="first_name" type="text" required placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input class="form-control" id="last_name" autocomplete="off" name="last_name" type="text" required placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input class="form-control" type="email" autocomplete="off" name="email" required placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input class="form-control" name="subject" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input class="form-control" type="text" autocomplete="off" name="company" required placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input class="form-control" type="text" autocomplete="off" name="job" required placeholder="Job Title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <input class="form-control" min="0" type="number" autocomplete="off" name="number" placeholder="Phone(Optional)">
                                </div>    
                            </div>
                            
                            <div class="col-md-12">
                                <div class="single-form">
                                    <textarea class="form-control" name="message"   placeholder="Write A Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-btn text-center">
                                <a type="button" class="btn buy-btn">Submit Now</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-info-section">
    <div class="container">
        <div class="contact-info-wrap">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card info-cards">
                        <div class="info-cards-wrap">
                        <div class="info-icon color-2">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Telephone</h5>
                            <p><a href="tel:020 3004 8847">020 3004 8847</a></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card info-cards">
                    <div class="info-cards-wrap">
                        <div class="info-icon color-1">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Drop Your Mail</h5>
                            <p><a href="mailto:info@worldbigroup.com">info@worldbigroup.com</a></p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card info-cards">
                    <div class="info-cards-wrap">
                        <div class="info-icon color-3">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div class="info-content">
                            <h5 class="title">Location</h5>
                            <p style="font-size: 17px;"> <a href="javascript:void(0)">WorldBI, Office 7, 35-37 Ludgate Hill, London. EC4M 7JN</a></p>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-map-section">
    <div class="contact-map-wrap">
        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9684410347313!2d-0.10432168434271526!3d51.5137949796362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604acdd1bfe65%3A0x7e8f2bfbc708edd2!2sWorld%20BI!5e0!3m2!1sen!2s!4v1637223942773!5m2!1sen!2s"></iframe>
    </div>
</section>

<?php include "footer.php" ?>

<div class="progress-wrap active-progress">
    <!-- <i class="fas fa-sharp fa-light fa-arrow-up"></i> -->
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 9.98604;"></path>
    </svg>
</div>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/backToTop.js"></script>
</body>

</html>