<?php
/*
Template Name: My Custom Page
*/

get_header(); ?>
<div class="row main-content">

    <?php
    // Start the Loop.
    while ( have_posts() ) : the_post();

        // Include the page content template.
        get_template_part( 'content', 'page' );

    endwhile;
    ?>

</div>
<?php
get_footer();