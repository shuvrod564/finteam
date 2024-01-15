<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Contact Us</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 
    
    <!-- header section start -->
    <header class="header__section d-flex align-items-center position-relative">  
        <img  
            srcset="assets/images/home/startup-meting.webp 575w,
            assets/images/home/startup-meting.webp 992w,
            assets/images/home/startup-meting.webp 1200w
            "
            src="assets/images/home/startup-meting.webp" 
            sizes="(max-width:991px) 1000px, (max-width:575px) 400px"
            alt="startup-meting"
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0 "
            width="1739" height="594"
        />
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity:.73"></div>
        <div class="container position-relative">
            <h1 class="fs-1 text-white fw-semibold text-center position-relative">
                CONTACT US
            </h1>
        </div><!--.//container-->
    </header>
    <!-- header section end --> 
    
    <!-- Say Heloo section start --> 
    <section class="py-4">
        <div class="container py-lg-5">
            <div class="row g-4 gx-xl-5 align-items-center">
                <div class="col-xl-5">
                    <img 
                        class="img-fluid w-100 object-cover" 
                        width="512" height="614" 
                        srcset="assets/images/partners/contact.webp ,
                        assets/images/partners/contact.webp 1200w 
                        "
                        src="assets/images/partners/contat.webp"
                        sizes=""
                        alt="contact"
                    > 
                </div><!--.//col-->
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="fs-2 text-dark fw-semibold">
                        <span class="fs-4 d-block text-27 text-primary fw-semibold mb-3">SAY HELOO !</span>
                        We’d pleased to hear
                    </h2>
                    <form class="form-bg mt-4" id="contact-form" method="post" action="contact-from">
                        <div class="messages"></div>
                        <div class="controls row g-3">
                            <div class="col-6 pb-4 mb-1">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6 pb-4 mb-1">
                                <div class="form-group">
                                    <input id="form_phone" type="text" name="phone number" class="form-control"
                                    placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6 pb-4 mb-1">
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control"
                                    placeholder="Email" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6 pb-4 mb-1">
                                <div class="form-group">
                                    <input id="form_services" type="services" name="services" class="form-control"
                                    placeholder="Services" required="required" data-error="Valid services is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-1">
                                <div class="form-group pb-4">
                                    <textarea id="form_message" name="any message" class="form-control"
                                    placeholder="Any Message" rows="4"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="#" class="btn__service btn btn-white px-4 height z-index rounded-pill" aria-label="Enquiry Now">
                                    <span class="fw-semibold">Enquiry Now</span> 
                                </a>
                            </div>
                        </div>
                    </form>
                </div><!--.//col-->
            </div>
        </div>
    </section>
    <!-- Say Heloo section end --> 
    
    <!-- Map -->
        <?php include_once "includes/map.inc.php"; ?> 
    <!-- Footer -->
       
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>