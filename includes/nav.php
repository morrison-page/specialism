<!-- Start of Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" data-bs-theme="dark">
    
    <!-- Logo (Text for now) -->
    <a class="navbar-brand" style="margin-left:7px;" href="index.php">GibJohn Tutoring</a>
    
    <!-- Misc Boostrap Stuff to get it working -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Navbar Contents -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Book a Tutor</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Resource</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Progress</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Rewards</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Support</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
        </ul>
    </div>

    <!-- Dynamic User Reg Buttons -->
    <?php if (loginCheck()===1) {};?>
    <div class="navbar-nav ml-auto">
        <form action="login.php"><button class="btn btn-primary" style="margin-right:7px" type="submit">Login</button></form>
        <form action="register.php"><button class="btn btn-primary" style="margin-right:7px" type="submit">Register</button></form>
    </div>
    <div class="navbar-nav ml-auto">
        <form action="logout.php"><button class="btn btn-primary" style="margin-right:7px" type="submit">Logout</button></form>
    </div>
</nav>

<!-- End of Navbar -->