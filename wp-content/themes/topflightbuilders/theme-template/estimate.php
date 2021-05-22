<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/head.php'); ?>

        <!-- SEO/META -->
        <title>Get An Estimate - TopFlight Builders</title>
        <meta name="description" content="">
        <link rel="canonical" href="">
        <meta property="og:title" content="Get An Estimate - TopFlight Builders">
        <meta property="og:description" content="">
        <meta property="og:url" content="">
    </head>
    <body>
        <!-- Navbar -->
        <?php include('includes/navbar.php'); ?>

        <!-- Get An Estimate -->
        <div class="site-section navbar-margin estimate text-center">
            <div class="container">
                <div class="row mb-5 pb-5">
                    <div class="col-md-12">
                        <h1>Request an Estimate</h1>
                        <p>Tell us a little bit about your project!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form class="contact-form" id="contactForm">
                            <div class="form-field col x-50">
                                <input name="name" id="name" class="input-text js-input" type="text" required>
                                <label class="label" for="name">Name</label>
                            </div>
                            <div class="form-field col x-50">
                                <input name="email" id="email" class="input-text js-input" type="email" required>
                                <label class="label" for="email">Email</label>
                            </div>
                            <div class="form-field col x-100">
                                <input name="subject" id="subject" class="input-text js-input" type="text" required>
                                <label class="label" for="subject">Project Type (ex. patio build, door installation, etc...)</label>
                            </div>
                            <div class="form-field col x-100">
                                <textarea name="message" id="message" class="input-text js-input" rows="3" type="text" required></textarea>
                                <label class="label" for="message">Describe your project</label>
                            </div>
                            <div class="form-field col x-100">
                                <button type="submit" class="submit-btn btn btn-block mx-auto"><b>Submit</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include('includes/footer.php'); ?>

        <script src="assets/js/script.js"></script>
    </body>
</html>