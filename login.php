<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head -->
   <?php require 'includes/head.php'; ?>
</head>

<body>
    <!-- Navbar -->
    <?php require 'includes/nav.php'; ?>

    <!-- Login Form -->
    <div class="container-fluid">
        <div class="card col-4 offset-4">
            <h1 style="color: white; padding-top:20px; padding-left:20px">Login</h1>
            <!-- Error Message if Login attemp is wrong -->
            <?php if (isset($_SESSION['loginErrorMsg'])) {echo '<p style="color:red;">'.$_SESSION['loginErrorMsg'].'</p>';};?>
            <form action="scripts/loginScript.php" method="post" class="d-flex justify-content-center form-signin mt-5">
                <div class="col-md-11">
                    <div class="text-center">
                        <div class="form-group">
                            <input type="text" name="loginUser" id="loginUser" class="form-control mb-3" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="loginPass" id="loginPass" class="form-control mb-3" placeholder="Password">
                        </div>
                        <button type="submit" value="Login" class="btn btn-primary mb-3">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JS Bootstrap -->
    <?php require 'includes/bootstrapjs.php';?>
</body>
</html>