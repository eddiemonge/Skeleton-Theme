<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( get_previous_posts_link() ) : ?>
				<nav class="posts-navigation title-box">
					<?php previous_posts_link('&laquo; Newer Entries') ?>
				</nav>
			<?php endif; ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content' ); ?>
			<?php endwhile; ?>

			<?php if ( get_next_posts_link() ) : ?>
				<nav class="posts-navigation title-box">
					<?php next_posts_link('&laquo; Older Entries') ?>
				</nav>
			<?php endif; ?>
		<?php else : ?>
			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>

		<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
