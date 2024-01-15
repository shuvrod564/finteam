<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>FINANCIAL ANALYSIS & BUSINESS ADVISORY SERVICES</title>
 
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
                FINANCIAL ANALYSIS & BUSINESS ADVISORY SERVICES
            </h1>
        </div><!--.//container-->
    </header>
    <!-- header section end --> 
    
    <!-- vat services  section start --> 
    <section class="py-4 py-sm-5">
        <div class="container">
            <div class="row g-4 gx-xl-5 align-items-center">
                <div class="col-lg-5">
                    <img 
                        class="img-fluid w-100 object-cover" 
                        width="512" height="535" 
                        srcset="assets/images/partners/vat-services.webp ,
                        assets/images/partners/contact/vat-services.webp 1200w 
                        "
                        src="assets/images/partners/vat-services.webp" 
                        sizes=""
                        alt="vat-services"
                    > 
                </div><!--.//col-->
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="fs-2 text-dark fw-semibold">
                        <span class="fs-4 d-block text-27 text-primary fw-semibold mb-3">Services</span>
                        VAT Services
                    </h2>
                    <p class="fs-15">
                        Our team of experienced and dedicated VAT specialists are equipped to handle all aspects of VAT compliance, from registration and filing to record-keeping and advisory services. With a deep understanding of local and international VAT regulations, we ensure timely and accurate submissions, helping clients minimize tax liabilities and avoid potential penalties. By entrusting us with their VAT responsibilities, businesses can focus on their core operations, knowing that their VAT matters are in capable hands. We strive to provide personalized solutions tailored to each client’s unique needs, fostering long-term partnerships built on trust and excellence in VAT management.
                    </p>
                </div><!--.//col-->
            </div>
        </div>
    </section>
    <!-- vat services section end -->
    
    <!-- Promo section start -->
    <?php include_once('includes/promo-section.php'); ?> 
    <!-- Promo section End --> 
       
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>