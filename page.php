<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">
		<?php the_post(); ?>
		<?php get_template_part( 'content' ); ?>
		<?php comments_template( '', true ); ?>
	</div>

	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
