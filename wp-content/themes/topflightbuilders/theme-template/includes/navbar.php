<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="home">
            <img src="assets/images/logo.jpg" alt="TopFlight Builders Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse highlightTextIn" id="navbarNav">
            <ul class="navbar-nav ml-auto my-2">
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : '' ?>" href="home" data-text="Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : '' ?>" href="about" data-text="About">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'estimate.php') ? 'active' : '' ?>" href="estimate" data-text="Get An Estimate">Get An Estimate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'gallery.php') ? 'active' : '' ?>" href="gallery" data-text="Gallery">Gallery</a>
                </li>
            </ul>
        </div>
    </div>
</nav>