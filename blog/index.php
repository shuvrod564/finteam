<?php include_once('../includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php echo $base_url;?>assets/images/favicon.ico" type="image/x-icon"> 
    <title>Blogs | Finteam</title>
 
    <!-- All Stylesheets -->
    <?php $folder='blog'; include_once('../includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='inside'; include_once('../includes/header.inc.php'); ?> 

    <!-- Header Wrapper Start -->
    <header class="page__header d-flex align-items-center bgi py-5" style="background-image: url('<?php echo $base_url;?>assets/images/home/startup-meting.webp');background-position: center bottom;">
        <div class="container-fluid py-3 py-sm-5 mt-md-5">
            <h1 class="display-4 text-white fw-semibold text-center mb-0 pt-lg-5 text-uppercase">Blogs</h1>
        </div>
    </header>
    <!-- Header Wrapper End -->

    <!-- Blog Wrapper Start -->
    <section class="py-5">
        <div class="container">
            <div class="row g-3 g-xl-4">
                <div class="col-lg-4">
                    <div class=" border bg-white p-2 p-sm-3 rounded-3">
                        <a href="small-and-medium-businesses.php">
                            <img 
                                class="img-fluid w-100 rounded-3" 
                                width="377" height="241" 
                                src="<?php echo $base_url;?>blog/images/small-and-medium-businesses-sm.webp" 
                                alt="small-and-medium-businesses"
                            >  
                        </a>
                        <div class="pt-3"> 
                            <p class="mb-2 opacity-25 fw-semibold">February 20, 2024</p>
                            <h3 class="lead fw-bold">
                                <a href="small-and-medium-businesses.php" class="link">
                                    Small and Medium Businesses: Significance of Management Information Systems
                                </a>
                            </h3>
                            <p class="fs-15 ellipsis-3">
                                Operating a small business involves juggling numerous responsibilities, from attending to customer
                                inquiries to managing supplier relations and resolving employee disputes. However, crucial
                                questions like the aging of receivables, inventory turnover rates, or last month&#39;s gross profit margin
                                might remain unanswered.
                            </p>
                        </div>
                    </div>
                </div><!--//.col--> 
                
            </div><!--//.row--> 

            <!-- Pagination -->
            <?php 
                // $firstArrow="false"; $lastArrow="true"; 
                // $prevPageUrl="index.php";
                // $nextPageUrl="page-2.php"; 
                // $active="1";
                // include_once('_pagination.inc.php'); 
            ?>
 
        </div><!--.//container-->
    </section>
    <!-- Blog Wrapper End -->
 

    <!-- Footer and Script List --> 
    <?php $folder='inside'; include_once('../includes/footer.inc.php'); ?>
    
</body>
</html>