<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>Finteam</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 
 
    <!-- header section start -->
    <header class="header__wraper d-flex align-items-center position-relative">  
        <img  
            srcset="assets/images/home/business-team-small.webp 575w,
            assets/images/home/business-team-medium.webp 992w,
            assets/images/home/business-team.webp 1200w
            "
            src="assets/images/home/business-team.webp" 
            sizes="(max-width:991px) 1000px, (max-width:575px) 400px"
            alt="business-team"
            class="img-fluid position-absolute top-0 start-0 w-100 h-100 object-cover z-0"
            width="1739" height="594"
        />
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity:.73"></div>
        <div class="container position-relative">
            <div class="row g-4 align-items-center justify-content-center">
                <div class=" col-lg-9">
                    <div class="content z-index ">
                        <h1 class="fs-1 text-white mb-3 fw-normal text-center position-relative">
                            <span class="fs-5 d-block fw-normal mb-2 text-uppercase">Welcome to FINTEAM,</span>
                             where expertise meets 
                            <span class="display-4 text-white mb-3 fw-bold text-center d-block">your financial aspirations.</span>
                        </h1>
                        <p class="lead-sm text-white text-center mx-auto col-lg-12">
                            At FINTEAM, we understand that navigating the complexities of finance can be daunting. That&#39;s why our team of seasoned professionals is dedicated to
                            providing tailored solutions to meet your unique needs. Whether you&#39;re a budding entrepreneur seeking guidance on investment strategies or a seasoned
                            corporation aiming for financial optimization, we&#39;re here to guide you every step of the way. With a commitment to excellence and a passion for results, let us
                            
                            empower you to unlock your financial potential.
                        </p>
                        <div class="btns pt-4 d-flex flex-wrap justify-content-center gap-3">
                            <a href="contact-us.php" class="btn btn-white height z-index py-3 px-4 px-md-5 rounded-pill">
                                <span class="fw-semibold">ENQUIRY NOW</span> 
                            </a> 
                            <a href="tel:+447872908711" class="btn btn-outline-white height fs-5 py-3 px-4 px-md-5 rounded-pill"> 
                                <span class="fw-semibold">+44 7872 908711</span> 
                            </a>  
                        </div>
                    </div><!--//.content-->
                </div><!--.//col--> 
            </div><!--.//row-->
        </div><!--.//container-->
    </header>
    <!-- header section end -->

    <!-- Our Services section Start -->
    <section class="py-5">
        <div class="container py-lg-4">
            <h2 class="fs-2 fw-semibold text-dark text-center text-lg-start">OUR SERVICES</h2>
            <p class="text-dark text-center text-lg-start">FinTeam was developed by a team of experienced financial planners and technology experts.</p>
            <div class="owl-carousel scrviceTopslider mt-4 mt-xl-5">
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <img src="assets/images/icon/taxes.svg" width="40" height="40" class="img-fluid icon" alt="taxes">
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        <a href="accounting-bookkeeping.php">Accounting & Bookkeeping</a>
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
                        <a href="business-start-up.php">Business Start-Up & Business Development</a>
                    </h3>
                    <p class="fs-15">
                        Our Accounting Firm is proud to offer comprehensive Business Start-Up and Development Support Services tailored to meet the unique needs of entrepreneurs and budding businesses.  
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <img src="assets/images/icon/contract.svg" width="40" height="40" class="img-fluid icon" alt="contract">
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        <a href="company-formation.php">Company Formation</a>
                    </h3>
                    <p class="fs-15">
                        Company Formation and Secretarial Service provided by our Firm offers a comprehensive and seamless solution to entrepreneurs and businesses looking to establish their ventures.
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 32 32"><path fill="#019E57" d="M2 28h28v2H2zm25-17a1 1 0 0 0 1-1V7a1 1 0 0 0-.66-.94l-11-4a1 1 0 0 0-.68 0l-11 4A1 1 0 0 0 4 7v3a1 1 0 0 0 1 1h1v13H4v2h24v-2h-2V11zM6 7.7l10-3.64L26 7.7V9H6zM18 24h-4V11h4zM8 11h4v13H8zm16 13h-4V11h4z"/></svg>
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        <a href="payroll-management.php">Payroll Management</a>
                    </h3>
                    <p class="fs-15">
                        Let us handle your payroll processing, tax withholding, and direct deposits, so you can focus on growing your business while ensuring your employees are paid accurately and on time. 
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 24 24"><path fill="#019E57" d="m6 16.5l-3 2.94V11h3m5 3.66l-1.57-1.34L8 14.64V7h3m5 6l-3 3V3h3m2.81 9.81L17 11h5v5l-1.79-1.79L13 21.36l-3.47-3.02L5.75 22H3l6.47-6.34L13 18.64"/></svg>
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        <a href="financial-analysis.php">Financial Analysis & Business Advisory Services</a>
                    </h3>
                    <p class="fs-15">
                        Gain valuable insights into your business’s financial performance with our in-depth financial analysis. We’ll identify areas for improvement and recommend strategies to help you achieve your financial goals.
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <img src="assets/images/icon/vat.svg" width="40" height="40" class="img-fluid icon" alt="VAT Services ">
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        <a href="vat-services.php">VAT Services</a>
                    </h3>
                    <p class="fs-15">
                        Our team of experienced and dedicated VAT specialists are equipped to handle all aspects of VAT compliance, from registration and filing to record-keeping and advisory services. 
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.75em" height="2.75em" viewBox="0 0 24 24"><path fill="#019E57" d="M12.005 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.96 9.96 0 0 1-6.383-2.302l-.244-.209l.901-1.902a8 8 0 1 0-2.27-5.837l-.004.25h2.5l-2.706 5.716A9.954 9.954 0 0 1 2.005 12c0-5.523 4.477-10 10-10m1 4v2h2.5v2h-5.5a.5.5 0 0 0-.09.992l.09.008h4a2.5 2.5 0 0 1 0 5h-1v2h-2v-2h-2.5v-2h5.5a.5.5 0 0 0 .09-.992l-.09-.008h-4a2.5 2.5 0 1 1 0-5h1V6z"/></svg>
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        <a href="tax-planning.php">Tax Planning and Preparation </a>
                    </h3>
                    <p class="fs-15">
                        Minimize your tax liabilities and maximize your returns with our tax planning and preparation services. Our tax experts stay up-to-date with the latest tax laws and regulations to ensure you are in compliance and take advantage of all available deductions. 
                    </p>
                </div><!--.//card-->
                <div class="service__card p-3 p-xl-4 rounded-0 transition">
                    <figure class="icon__box d-flex position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" viewBox="0 0 1024 1024"><path fill="#019E57" d="M296 250c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h384c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm184 144H296c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h184c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8m-48 458H208V148h560v320c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8V108c0-17.7-14.3-32-32-32H168c-17.7 0-32 14.3-32 32v784c0 17.7 14.3 32 32 32h264c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8m440-88H728v-36.6c46.3-13.8 80-56.6 80-107.4c0-61.9-50.1-112-112-112s-112 50.1-112 112c0 50.7 33.7 93.6 80 107.4V764H520c-8.8 0-16 7.2-16 16v152c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16V780c0-8.8-7.2-16-16-16M646 620c0-27.6 22.4-50 50-50s50 22.4 50 50s-22.4 50-50 50s-50-22.4-50-50m180 266H566v-60h260z"/></svg>
                    </figure>
                    <h3 class="fs-6 text-primary title mt-4 lead fw-bold mb-3">
                        <a href="auditing-services.php">Auditing Services</a>
                    </h3>
                    <p class="fs-15">
                        Minimize your tax liabilities and maximize your returns with our tax planning and preparation services. Our tax experts stay up-to-date with the latest tax laws and regulations to ensure you are in compliance and take advantage of all available deductions. 
                    </p>
                </div><!--.//card-->
                 
            </div><!--.//owl-carousel-->
        </div><!--.//container-->  
    </section>
    <!-- Our Services  section End -->

    <!-- About Finteam Section Start -->
    <section class="py-5  bg-primary text-center text-lg-start"> 
        <div class="container">
            <span class="fs-4 d-block text-27 text-white fw-normal mb-3">About Finteam</span>
            <div class="row gx-4 gx-xl-5">
                <div class="col-lg-6">
                    <h2 class="fs-2 text-white fw-semibold">
                        FinTeam was developed by a team of experienced financial planners and technology experts.
                    </h2> 
                </div><!--.//col-->
                <div class="col-lg-6">
                    <p class="text-white">
                        Welcome to <strong class="fw-bold">FINTEAM</strong>, your trusted partner for professional accounting and bookkeeping services. With a team of highly skilled and experienced professionals, we are committed to helping businesses of all sizes manage their financial needs efficiently and effectively.
                    </p>
                    <div class="mt-3">
                        <a href="contact-us.php" class="btn btn-white height sm z-index px-4 fw-semibold rounded-pill" aria-label="KNOW MORE">
                            KNOW MORE
                        </a> 
                    </div> 
                </div>
            </div><!--.//row-->
          
        </div><!--.//container-->
    </section>
    <!-- About Finteam Section End -->

    <!-- Why Choose Us section Start -->
    <section class="py-5"> 
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-xl-5">
                    <img 
                        class="img-fluid w-100 object-cover" 
                        width="624" height="747" 
                        srcset="assets/images/home/why-chooes-us-finteam-small.webp 575w, 
                        assets/images/home/why-chooes-us-finteam-medium.webp 1199w, 
                        assets/images/home/why-chooes-us-finteam.webp 1400w, 
                        "
                        src="assets/images/home/why-chooes-us-finteam.webp" 
                        sizes="(max-width:1199px) 700px, (max-width:576px) 400px"
                        alt="chooes-us"
                    > 
                </div><!--//.col-->
                <div class="col-xl-7">
                    <div class="text-center text-lg-start">
                        <p class="fs-4 fw-semibold text-primary mb-2">Why Choose Us?</p>
                        <h2 class="fs-2 fw-semibold">FinTeam was developed by a team of experienced financial planners and technology experts.</h2>
                        <div class="mt-3 mt-lg-4 text-center text-md-start">
                            <div class="row g-3 g-lg-4">
                                <div class="col-md-6">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            Expertise
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            Our team consists of certified and experienced professionals who are well-versed in the latest accounting practices and regulations.
                                        </p>
                                    </div>
                                </div><!--./col-->
                                <div class="col-md-6">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            Personalised Solutions
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            We understand that each business is unique, which is why we tailor our services to meet your specific needs and challenges.
                                        </p>
                                    </div>
                                </div><!--./col-->
                                <div class="col-md-6">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            Timely and Reliable
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            Punctuality is at the core of our values. You can trust us to meet deadlines and deliver accurate results on time, every time.
                                        </p>
                                    </div>
                                </div><!--./col-->
                                <div class="col-md-6">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            Client-Centric Approach
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            We value our clients and strive to build long-lasting relationships by providing exceptional service and support.
                                        </p>
                                    </div>
                                </div><!--./col-->
                                <div class="col-md-6">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            Affordable Services
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            Our competitive pricing ensures that you receive top-notch services without breaking the bank.
                                        </p>
                                    </div>
                                </div><!--./col-->
                                <div class="col-md-6">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            Technology-Driven
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            We leverage cutting-edge accounting software and technology to streamline processes and enhance efficiency.
                                        </p>
                                    </div>
                                </div><!--./col-->
                                <div class="col-md-6">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            Single point of contact
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            You&#39;ll be assigned a dedicated point of contact to handle your daily inquiries and offer continuous suggestions for enhancing your business.
                                        </p>
                                    </div>
                                </div><!--./col-->
                                <div class="col-md-6">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            National and Global Reach
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            We maintain connections with professional firms within the UK and worldwide to aid us in providing support to your businesses.
                                        </p>
                                    </div>
                                </div><!--./col-->
                                <div class="col-md-12">
                                    <div class="info__card">
                                        <h3 class="fs-5 title text-primary fw-bold mb-2">
                                            Swift responses
                                        </h3>
                                        <p class="fs-15 mb-0">
                                            We are accessible for communication whenever you require assistance, be it via phone or email. You&#39;ll never experience delays in receiving a response to your inquiries.
                                        </p>
                                    </div>
                                </div><!--./col-->
                            </div><!--.//row--> 
                        </div>
                    </div> 
                </div><!--.//col-->
            </div><!--.//row-->        
        </div><!--.//container-->
    </section>
    <!-- Why Choose Us section End -->

    <!-- Promo section start -->
    <?php include_once('includes/promo-section.php'); ?> 
    <!-- Promo section End --> 
    
    <!-- Blogs section start --> 
    <?php include_once('includes/blog-section.inc.php'); ?>
    <!-- Blogs section end -->
 
   
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
 
</body>
</html>
 