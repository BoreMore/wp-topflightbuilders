<?php 
    get_header(); 
?>

        <!-- Splash Header -->
        <div class="splash-header navbar-margin text-center">
            <img src="<?php echo esc_url( get_header_image() ); ?>" />
            <div class="img-overlay"></div>
            <div class="hero-text container">
                <h1 class="my-md-3 my-2"><?php echo get_theme_mod('topflightbuilders-header-h1'); ?></h1>
                <p class="h5 my-md-3 my-2"><?php echo get_theme_mod('topflightbuilders-header-description'); ?></p>
                <button class="btn btn-lg my-md-3 my-2" style="border-color: <?php echo get_theme_mod('topflightbuilders-header-button-border-color'); ?>; background-color: <?php echo get_theme_mod('topflightbuilders-header-button-color'); ?>">
                    <a href="<?php echo esc_url(get_permalink(get_theme_mod('topflightbuilders-header-link'))); ?>">
                        <?php echo get_theme_mod('topflightbuilders-header-button-text'); ?>
                    </a>
                </button>
            </div>
        </div>

        <!-- Services -->
        <?php if (is_active_sidebar('services-sidebar')): ?>
        <div class="services site-section text-center">
            <div class="container">
                <div class="row mb-5 pb-5">
                    <div class="col-md-12">
                        <h2>Our Services</h2>
                    </div>
                </div>
                <div class="row">
                    <?php dynamic_sidebar('services-sidebar'); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Testimonials -->
        <?php if (is_active_sidebar('testimonials-sidebar')): ?>
        <div class="testimonials site-section text-center">
            <div class="container">
                <div class="row mb-5 pb-5">
                    <div class="col-md-12">
                        <h2>Testimonials</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="reviewsCarousel" class="carousel">
                            <?php dynamic_sidebar('testimonials-sidebar'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Contact -->
        <?php if (is_active_sidebar('quote-sidebar')): ?>
            <div class="contact site-section">
                <div class="container">
                    <div class="row mb-5 pb-5 text-center">
                        <div class="col-md-12">
                            <h2>Contact Us!</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php dynamic_sidebar('quote-sidebar'); ?>
                            <!-- <form class="contact-form" id="contactForm">
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
                                    <label class="label" for="subject">Subject</label>
                                </div>
                                <div class="form-field col x-100">
                                    <textarea name="message" id="message" class="input-text js-input" rows="3" type="text" required></textarea>
                                    <label class="label" for="message">Message</label>
                                </div>
                                <div class="form-field col x-100">
                                    <button type="submit" class="submit-btn btn btn-block mx-auto"><b>Submit</b></button>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php 
            /*if (have_posts()) {
                while(have_posts()) {
                    // the title is: the_title();
                    the_post();
                    the_content();
                }
            }*/
        ?>

<?php 
    get_footer();
?>