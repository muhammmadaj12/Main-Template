<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Template</title>
    
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/demo.css">
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
            font-size: 6rem;
            padding-bottom: 10px;
        }
        .hero-section .hero-content .title-wrap .title::before{
            content: none;
        }
        
        @media (max-width: 330px){
            .hero-section .hero-content .title{
                font-size: 4rem;
            }
        }
        @media (max-width: 220px){
            .hero-section .hero-content .title{
                font-size: 3rem;
            }
        }
        
 
    </style>
</head>
<body>
    
    <?php include "header.php" ?>

    <section class="bg-img hero-section">
        <div class="container">
            <div class="hero-content text-center">
                <h2 class="title">FAQ's</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ's</li>
                    </ol>
                </nav>
            </div>
          </div>
        </div>
    </section>

    <!--FAQ's Section-->
    <section id="faq-section">
        <div class="container">
            <div class="text-center pb-5">
                <h1>Frequently Asked Questions</h1>
            </div>
            <div class="row" style="align-items: flex-start;">
                <div class="col-lg-6 col-sm-12">
                    <div class="accordion accordion-flush" id="accordionRegistration">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <span class="accordian-heading"> How do I register for the conference? </span>
                                    <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionRegistration">
                                <div class="accordion-body">Visit our <a href="https://worldbigroup.com/delegate-forms/28th-CTIP-DR/" rel="nofollow" target="_blank">Registration page</a> and follow the instructions to complete the online registration process. If you’re a service provider then go to vendor ticket page and if you’re a non-service provider then go to delegate ticket page.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                           <span class="accordian-heading"> Can I register on-site during the conference?</span>
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionRegistration">
                        <div class="accordion-body">On-site registration is available, but we encourage pre-registration to ensure a smoother check-in process. For registration, visit this link: <a rel="nofollow" target="_blank" href="https://worldbigroup.com/delegate-forms/28th-CTIP-DR/">Registration Form</a>
                            </div>
                    </div>
                </div>
                         <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                           <span class="accordian-heading"> Can I book accommodation independently, or is it exclusively through the conference?</span>
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionRegistration">
                        <div class="accordion-body">You are free to book accommodation independently, but we recommend checking our partner hotels for convenience and possible discounts.</div>
                    </div>
                </div>
                         <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            <span class="accordian-heading"> When will the list of conference speakers be available?</span>
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                        data-bs-parent="#accordionRegistration">
                        <div class="accordion-body">The list of confirmed speakers will be updated on the website as they are confirmed. Check the Speakers page for the latest information.</div>
                    </div>
                </div>
                        <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseSeven" aria-expanded="false"
                            aria-controls="flush-collapseSeven">
                           <span class="accordian-heading"> How can I contact the conference organizers for general inquiries?</span>
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                    <div id="flush-collapseSeven" class="accordion-collapse collapse"
                        data-bs-parent="#accordionRegistration">
                        <div class="accordion-body">Feel free to reach out to our support team through the <a rel="nofollow" target="_blank" href="https://worldbigroup.com/contact-us">Contact Us</a> page for any general questions or assistance.</div>
                    </div>
                </div>
                <div class="accordion-item">
                            <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseEight" aria-expanded="false"
                            aria-controls="flush-collapseEight">
                            <span class="accordian-heading"> Can I get a refund if I need to cancel my registration?</span>
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse"
                        data-bs-parent="#accordionRegistration">
                        <div class="accordion-body">Refund policies are outlined on the <a rel="nofollow" target="_blank" href="https://worldbigroup.com/delegate-forms/28th-CTIP-DR/">Presentation Form</a>. Check the specific terms and conditions for cancellations and refunds on registration page.</div>
                    </div>
                         </div>
            </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="accordion accordion-flush" id="accordionAccommodation">
                        <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFirst" aria-expanded="false" aria-controls="flush-collapseFirst">
                            <span class="accordian-heading"> What is the deadline for registration?</span>
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                    <div id="flush-collapseFirst" class="accordion-collapse collapse"
                        data-bs-parent="#accordionAccommodation">
                        <div class="accordion-body">Registration deadlines are specified on the <a rel="nofollow" target="_blank" href="https://worldbigroup.com/delegate-forms/28th-CTIP-DR/">Registration page</a>. We recommend registering before the early bird deadline for discounted rates. 20th April 2024 is the last date the early bird discount for ctip, cts and ddip
                        </div>
                    </div>
                </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSecond" aria-expanded="false" aria-controls="flush-collapseSecond">
                                   <span class="accordian-heading"> Does the conference provide recommendations for local accommodation?</span>
                                    <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                                </button>
                            </h2>
                            <div id="flush-collapseSecond" class="accordion-collapse collapse" data-bs-parent="#accordionAccommodation">
                                <div class="accordion-body">
                                    Yes, we have a list of recommended hotels on the Accommodation page. Check for special rates available to conference attendees.
                                </div>
                            </div>
                        </div>
                         <div class="accordion-item">
                            <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThird" aria-expanded="false"
                            aria-controls="flush-collapseThird">
                           <span class="accordian-heading"> How can I propose myself or someone else as a speaker for the conference?</span> 
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                            <div id="flush-collapseThird" class="accordion-collapse collapse"
                        data-bs-parent="#accordionAccommodation">
                        <div class="accordion-body">Speaker proposals can be submitted on the Speaker Opportunities page. Follow the guidelines provided for submission. Visit this link: <a rel="nofollow" target="_blank" href="https://worldbigroup.com/delegate-forms/28th-CTIP-DR/">Registration Form</a></div>
                    </div>
                         </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFourth" aria-expanded="false"
                            aria-controls="flush-collapseFourth">
                           <span class="accordian-heading"> How can my company become a sponsor for the conference?</span> 
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                            <div id="flush-collapseFourth" class="accordion-collapse collapse"
                        data-bs-parent="#accordionAccommodation">
                        <div class="accordion-body">Explore sponsorship opportunities on the Sponsorship page and contact our team for a customized package that suits your needs. Or contact us on this email <a href="mailto:info@worldbigroup.com">info@worldbigroup.com.</a></div>
                    </div>
                         </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFifth" aria-expanded="false"
                            aria-controls="flush-collapseFifth">
                            <span class="accordian-heading"> Where is the conference venue located?</span>
                            <span class="faq-button"><i class="fas fa-chevron-right"></i></span>
                        </button>
                    </h2>
                            <div id="flush-collapseFifth" class="accordion-collapse collapse"
                        data-bs-parent="#accordionAccommodation">
                        <div class="accordion-body">The venue details, including address and directions, are available on the Location page. Consider using public transportation or carpooling for convenience.</div>
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

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/backToTop.js"></script>

</body>
</html>
