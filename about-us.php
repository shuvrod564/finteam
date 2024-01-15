<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>About Us</title>
 
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
                ABOUT FINTEAM
            </h1>
        </div><!--.//container-->
    </header>
    <!-- header section end --> 

    <!-- About Finteam Section Start -->
    <section class="py-5 text-center text-lg-start"> 
        <div class="container">
            <span class="fs-4 d-block text-27 text-primary fw-semibold mb-3">About Finteam</span>
            <div class="row gx-4 gx-xl-5">
                <div class="col-lg-6">
                    <h2 class="fs-2 text-dark fw-semibold">
                        FinTeam was developed by a team of experienced financial planners and technology experts.
                    </h2> 
                </div><!--.//col-->
                <div class="col-lg-6">
                    <p class="text-dark">
                        Welcome to <strong class="fw-bold">FINTEAM</strong>, your trusted partner for professional accounting and bookkeeping services. With a team of highly skilled and experienced professionals, we are committed to helping businesses of all sizes manage their financial needs efficiently and effectively.
                    </p>
                </div>
            </div><!--.//row-->
            <div class="pt-4 pt-xl-5"> 
                    <img  
                        srcset="assets/images/partners/about-us/successful-business-finteam-sm.webp 575w,
                        assets/images/partners/about-us/successful-business-finteam-lg.webp 992w,
                        assets/images/partners/about-us/successful-business-finteam.webp 1200w
                        "
                        src="assets/images/partners/about-us/successful-business-finteam.webp" 
                        sizes="(max-width:991px) 900px, (max-width:575px) 400px"
                        alt="business-team"
                        class="img-fluid"
                        width="1739" height="594"
                    />
                </div>
            </div>
        </div><!--.//container-->
    </section>
    <!-- About Finteam Section End -->

    <!-- Our Core Values section Start -->
    <section class="py-3">
        <div class="container">
            <h2 class="fs-2 fw-semibold text-dark text-center">Our Core Values</h2>
            <div class="owl-carousel scrviceTopslider mt-4 mt-xl-5">
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <img src="assets/images/icon/taxes.svg" width="40" height="40" class="img-fluid icon" alt="taxes">
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        People
                    </h3>
                    <p class="fs-15">
                        Keeping track of financial transactions is crucial for any business. Our expert bookkeepers will meticulously record your income and expenses, maintain ledgers, and ensure that your financial records are accurate and up-to-date.
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <img src="assets/images/icon/rocket.svg" width="40" height="40" class="img-fluid icon" alt="rocket">
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        Inovation
                    </h3>
                    <p class="fs-15">
                        Keeping track of financial transactions is crucial for any business. Our expert bookkeepers will meticulously record your income and expenses, maintain ledgers, and ensure that your financial records are accurate and up-to-date.
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <img src="assets/images/icon/contract.svg" width="40" height="40" class="img-fluid icon" alt="contract">
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        Personal Connection
                    </h3>
                    <p class="fs-15">
                        Keeping track of financial transactions is crucial for any business. Our expert bookkeepers will meticulously record your income and expenses, maintain ledgers, and ensure that your financial records are accurate and up-to-date.
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <img src="assets/images/icon/taxes.svg" width="40" height="40" class="img-fluid icon" alt="taxes">
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        Transparency
                    </h3>
                    <p class="fs-15">
                        Keeping track of financial transactions is crucial for any business. Our expert bookkeepers will meticulously record your income and expenses, maintain ledgers, and ensure that your financial records are accurate and up-to-date.
                    </p>
                </div><!--.//card-->
            </div><!--.//owl-carousel-->
        </div><!--.//container-->  
    </section>
    <!-- Our Core Values section End -->

    <!-- Join the Team section Start -->
    <section class="py-3"> 
        <div class="container py-lg-4">
            <div class="row g-4 gx-xl-5 align-items-center">
                <div class="col-xl-7 order-lg-2 text-center text-lg-start">
                    <h2 class="fs-2 text-dark fw-semibold">
                        <span class="fs-4 d-block text-27 text-primary fw-semibold mb-3">Join the Team</span>
                        FinTeam was developed by a team of experienced financial planners and technology experts.
                    </h2>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <div class="btns mt-3 pt-lg-4">
                        <a href="#" class="btn__service btn btn-white px-4 height z-index rounded-pill" aria-label="Careers">
                            <span class="fw-semibold">Careers</span> 
                        </a>
                    </div>  
                </div><!--//.col-->
                <div class="col-xl-5 order-lg-1">
                    <img 
                        class="img-fluid w-100 object-cover" 
                        width="512" height="580" 
                        srcset="assets/images/partners/about-us/join-team-sm.webp 575w, 
                        assets/images/partners/about-us/join-team.webp 1200w, 
                        "
                        src="assets/images/partners/about-us/join-team.webp" 
                        sizes="(max-width:1199px) 700px, (max-width:576px) 400px"
                        alt="join-team"
                    > 
                </div><!--.//col-->
            </div><!--.//row-->        
        </div><!--.//container-->
    </section>
    <!-- Join the Team section End -->
    
    <!-- Our Team section Start -->
    <section class="py-4 py-xl-5"> 
        <div class="container-fluid">
            <h2 class="fs-2 fw-semibold text-dark text-center">Our Team</h2>
            <p class="text-center pb-3">
                FinTeam was developed by a team of experienced financial planners and technology experts.
            </p>
            <div class="owl-carousel teamslider">
                <div class=""> 
                    <figure class="mb-0">
                        <img src="assets/images/partners/about-us/team-man-06.webp" class="img-fluid w-100" width="418" height="469" alt="team-man">
                    </figure> 
                </div>
                <div class=""> 
                    <figure class="mb-0">
                        <img src="assets/images/partners/about-us/team-man-01.webp" class="img-fluid w-100" width="418" height="469" alt="team-man">
                    </figure> 
                </div>
                <div class=""> 
                    <figure class="mb-0">
                        <img src="assets/images/partners/about-us/team-man-02.webp" class="img-fluid w-100" width="418" height="469" alt="team-man">
                    </figure> 
                </div>
                <div class=""> 
                    <figure class="mb-0">
                        <img src="assets/images/partners/about-us/team-man-03.webp" class="img-fluid w-100" width="418" height="469" alt="team-man">
                    </figure> 
                </div>
                <div class=""> 
                    <figure class="mb-0">
                        <img src="assets/images/partners/about-us/team-man-04.webp" class="img-fluid w-100" width="418" height="469" alt="team-man">
                    </figure> 
                </div>
                <div class=""> 
                    <figure class="mb-0">
                        <img src="assets/images/partners/about-us/team-man-05.webp" class="img-fluid w-100" width="418" height="469" alt="team-man">
                    </figure> 
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team section End -->
   
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>