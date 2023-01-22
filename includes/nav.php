<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" data-bs-theme="dark">
    
    <!-- Logo (Text for now) -->
    <a class="navbar-brand" style="margin-left:15px;" href="index">Gibjohn</a>
    
    <!-- Phone Level of Display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar Contents -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="bookTutor">Book Tutor</a></li>
            <li class="nav-item"><a class="nav-link" href="resources">Resource</a></li>
            <li class="nav-item"><a class="nav-link" href="progress">Progress</a></li>
            <li class="nav-item"><a class="nav-link" href="rewards">Rewards</a></li>
            <li class="nav-item"><a class="nav-link" href="support">Support</a></li>
            <li class="nav-item"><a class="nav-link" href="about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="sessionCheck">Session Check</a></li>
        </ul>
    </div>

    <!-- Dynamic User Reg Buttons -->
    <?php       
        if (!isset($_SESSION['loggedin'])) {
            echo '<div class="navbar-nav">
                    <form action="login"><button class="btn btn-primary" style="margin-right:4px" type="submit">Login</button></form>
                    <form action="register"><button class="btn btn-primary" style="margin-right:7px" type="submit">Register</button></form>
                </div>';
        } elseif (loginCheck()===1) {
            echo '<div class="navbar-nav">
                    <form action="dashboard"><button class="btn btn-primary" style="margin-right:4px" type="submit">Dashboard</button></form>
                    <form action="scripts/logoutScript.php"><button class="btn-danger btn" style="margin-right:7px" type="submit">Logout</button></form>
                </div>';
        };
    ?>
</nav>