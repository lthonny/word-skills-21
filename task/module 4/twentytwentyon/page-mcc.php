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
 * Template Name: МЦК “КТИТС”
 */
?>

<?php get_header(); ?>

	<section class="mcc">
		<div class="wrapper">
			<div class="mcc-content">
				<div class="mcc-content-title"><?php the_title(); ?></div>
				<!-- <div class="mcc-content-text">
					Международный центр компетенций - Казанский техникум информационных технологий и связи один из крупнейших средних профессиональных учебных заведений в Республике Татарстан.
					Организован он был 31 августа 1932 года постановлением СНК СССР от 31 августа 1932 года № 1332 «Об укреплении и подготовки кадров органов связи» на базе учебно - производственного комбината связи. С тех пор в стенах техникума получили образование более 35 тысяч человек, которых можно встретить во всех уголках страны. Около 80% специалистов среднего звена, работающих на Казанских предприятиях связи - выпускники техникума.
					Для первого приема студентов в техникум 1 марта 1932 года на базе существовавшего учебно-производственного комбината связи были открыты курсы, а с 1 октября того же года на базе этих курсов был открыт Казанский электротехникум связи.
				</div> -->
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="mcc-content-text"><?php the_content(); ?>
				<?php endwhile; ?>
				<!-- <div class="mcc-content-photo"></div> -->
			</div>
		</div>
	</section>

<?php get_footer(); ?>