<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" data-bs-theme="dark">
    
    <!-- Logo (Text for now) -->
    <a class="navbar-brand" style="margin-left:15px;" href="index.php">Gibjohn</a>
    
    <!-- Phone Level of Display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar Contents -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="bookTutor.php">Book a Tutor</a></li>
            <li class="nav-item"><a class="nav-link" href="resources.php">Resource</a></li>
            <li class="nav-item"><a class="nav-link" href="progress.php">Progress</a></li>
            <li class="nav-item"><a class="nav-link" href="rewards.php">Rewards</a></li>
            <li class="nav-item"><a class="nav-link" href="support.php">Support</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="sessionCheck.php">Session Check</a></li>
        </ul>
    </div>

    <!-- Dynamic User Reg Buttons -->
    <?php       
        if (!isset($_SESSION['loggedin'])) {
            echo '<div class="navbar-nav">
                    <form action="login.php"><button class="btn btn-primary" style="margin-right:4px" type="submit">Login</button></form>
                    <form action="register.php"><button class="btn btn-primary" style="margin-right:7px" type="submit">Register</button></form>
                </div>';
        } elseif (loginCheck()===1) {
            echo '<div class="navbar-nav">
                    <form action="dashboard.php"><button class="btn btn-primary" style="margin-right:4px" type="submit">Dashboard</button></form>
                    <form action="scripts/logoutScript.php"><button class="btn-danger btn" style="margin-right:7px" type="submit">Logout</button></form>
                </div>';
        };
    ?>
</nav>