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
            <p class="fs-1 text-white fw-semibold text-center position-relative text-uppercase">
                Financial Analysis & Business Advisory Services
            </p>
        </div><!--.//container-->
    </header>
    <!-- header section end --> 
    
    <!-- financial analysi  section start --> 
    <section class="py-4 py-sm-5">
        <div class="container">
            <div class="row g-4 gx-xl-5 align-items-center">
                <div class="col-lg-5">
                    <img 
                        class="img-fluid w-100 object-cover" 
                        width="512" height="535"  
                        src="assets/images/partners/payroll-management.webp" 
                        sizes=""
                        alt="payroll-management"
                    > 
                </div><!--.//col-->
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="fs-5 d-block text-27 text-primary fw-semibold mb-2">Services</span>
                    <h1 class="fs-2 text-dark fw-semibold mb-3">
                        Financial Analysis & Business Advisory Services
                    </h1>
                    <p class="fs-15">
                        Gain valuable insights into your business’s financial performance with our in-depth financial analysis. We’ll identify areas for improvement and recommend strategies to help you achieve your financial goals. Benefit from our strategic business advisory services that address specific challenges, identify opportunities, and pave the way for long-term success.
                    </p>
                    <div class="mt-4">
                        <a href="contact-us.php" class="btn btn-primary height rounded-pill px-4">Know More</a>
                    </div>
                </div><!--.//col-->
            </div>
        </div>
    </section>
    <!-- financial analysi  section end --> 
    
    <!-- Promo section start -->
    <?php include_once('includes/promo-section.php'); ?> 
    <!-- Promo section End --> 

    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>