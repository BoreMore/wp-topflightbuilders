<?php 
    get_header();
?>

<article class="p-5 navbar-margin container">
    <?php 
        if (have_posts()) {
            while(have_posts()) {
                // the title is: the_title();
                the_post();
                //the_content();
                get_template_part('template-parts/content', 'page');                
            }
        }
    ?>
</article>

<?php 
    get_footer();
?>