<?php 
    get_header();
?>

<article class="mt-5 p-5">
    <?php 
        if (have_posts()) {
            while(have_posts()) {
                // the title is: the_title();
                the_post();
                //the_content();
                get_template_part('template-parts/content', 'article');
                the_date();
                the_tags('code before', 'end tag, beginning of next tag', 'close tag');
                comments_number();
                
            }
        }
    ?>
</article>

<?php 
    get_footer();
?>