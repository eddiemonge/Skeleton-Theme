<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>

			<?php comments_template(); ?>

			<nav id="nav-single">
				<span class="nav-previous alignleft"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous Post' ) ); ?></span>
				<span class="nav-next alignright"><?php next_post_link( '%link', __( 'Next Post <span class="meta-nav">&rarr;</span>' ) ); ?></span>
			</nav>
		<?php endwhile; ?>

	</div>

	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
