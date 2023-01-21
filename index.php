<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head -->
   <?php require 'includes/head.php'; ?>
</head>
<body>
    <!-- Navbar -->
    <?php require 'includes/nav.php'; ?>
    <!-- Connection -->
    <?php require 'scripts/connect.php'; ?>

    <!-- Content -->
    <div class="container-fluid d-flex align-items-center mb-5" id="landingHeader">
        <div class="container rounded p-5" id="headerContent">
            <div class="row">
                <h1>Welcome to Gibjohn!</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum cumque illo dolorum similique itaque laborum voluptatem natus modi ex in.</p>
            </div>
            <div class="row">
                <div class="col">
                    <a href="resources.php" class="btn btn-primary float-start me-1"> View Resources </a>
                    <a href="viewTutors.php" class="btn btn-primary flaot-start"> Book a tutor </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid d-flex">
        <div class="container" id="mainContent">
            <div class="row d-flex align-items-center" id="whoAreWe">
                <div class="col">
                    <h1>Who are we?</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum cumque illo dolorum similique itaque laborum voluptatem natus modi ex in.</p>
                    <a href="about.php" class="btn btn-primary float-start me-1">About us</a>
                </div>
                <div class="col">
                    <img src="images/aboutUsImage.jpg" class="rounded img-fluid" alt="Teacher teaching class">
                </div>
            </div>
            
            <div class="row d-flex align-items-center " id="contactUs">
                <div class="col">
                    <img src="images\contactUs.jpg" class="rounded img-fluid" alt="Pile of books" data-pagespeed-url-hash="580512417" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="col">
                    <h1>Get in contact</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum cumque illo dolorum similique itaque laborum voluptatem natus modi ex in.</p>
                    <a href="contact.php" class="btn btn-primary float-start me-1"> Contact us </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>

    <!-- JS Bootstrap -->
    <?php require 'includes/bootstrapjs.php'; ?>
</body>
</html>