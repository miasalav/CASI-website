<?php
/**
 * Template Name: Conference Page
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/conference-section' );?>

	</main><!-- #main -->


<?php get_footer();
