<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
?>

<?php get_header(); ?>

<?php  while ( have_posts() ) :
	the_post(); ?>
	<div class="page-home-content">
		<div class="wrapper">
			<div class="single-page-content">
				<?php the_content(); ?>
			</div>
			<?php get_contacts ?>
		</div>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>
