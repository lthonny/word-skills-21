<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 * 
 * Template Name: Экспонаты
 */
?>

<?php get_header(); ?>

<section class="exhibits">
	<div class="wrapper">
		<div class="exhibits-content">
			<div class="exhibits-content-title"><?php the_title(); ?></div>
			<!-- <div class="exhibits-content-text">
			</div> -->
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="exhibits-content-text"><?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>