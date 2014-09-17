<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<div id="primary" class="row content-area">

        <header class="page-header">
            <h1 class="page-title"><?php _e( 'Not Found', 'wpkc' ); ?></h1>
        </header>

        <div class="page-content">
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wpkc' ); ?></p>

            <?php get_search_form(); ?>
        </div><!-- .page-content -->

	</div><!-- #primary -->

<?php
get_footer();
