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
 * Template Name: Таттелеком
 */
?>

<?php get_header(); ?>

	<section class="tattelecom">
		<div class="wrapper">
			<div class="tattelecom-content">
				<div class="tattelecom-content-title"><?php the_title(); ?></div>
				<!-- <div class="tattelecom-content-text">ПАО «Таттелеком» — это крупнейший в Республике Татарстан оператор проводной электросвязи, 
					стабильно занимающий лидирующее положение на рынке оказания телекоммуникационных услуг.
					Мы предоставляем нашим абонентам весь комплекс современных услуг связи: местная и зоновая телефонная связь, доступ к сети Интернет, кабельное и интерактивное цифровое телевидение, мобильная связь.
					Услуги подвижной радиотелефонной связи оказывает ООО «Твои мобильные технологии».</div> -->
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="tattelecom-content-text"><?php the_content(); ?>
					<?php endwhile; ?>
				</div>
				<!-- <div class="tattelecom-content-photo"></div> -->
			</div>
		</div>
	</section>

<?php get_footer(); ?>


