<?php
/**
 * The front page template file
 *
 * @package Elearning Academy Education
 * @subpackage elearning_academy_education
 */

get_header(); ?>

<main id="tp_content" role="main">
	<div class="section-bundle">
		<?php get_template_part( 'template-parts/home/slider' ); ?>

		<?php get_template_part( 'template-parts/home/education-services' ); ?>
	</div>

	<?php get_template_part( 'template-parts/home/courses' ); ?>

	<?php get_template_part( 'template-parts/home/home-content' ); ?>

<?php get_footer();