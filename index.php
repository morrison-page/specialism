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
    <div class="container-fluid d-flex align-items-center mb-3" id="landingHeader">
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

    <!-- Footer -->
    <?php require 'includes/footer.php'; ?>

    <!-- JS Bootstrap -->
    <?php require 'includes/bootstrapjs.php'; ?>
</body>
</html>