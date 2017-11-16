<?php
/**
 * Template Name: Events Page
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

get_header(); ?>

	<main id="main" class="site-main" role="main">

		<?php get_template_part( 'template-parts/events-section' );?>

	</main><!-- #main -->


<?php get_footer();
