<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">

		<header class="page-header post">
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>

		<?php if ( have_posts() ) : ?>

			<?php if ( get_previous_posts_link() ) : ?>
				<nav class="posts-navigation title-box">
					<?php previous_posts_link('&laquo; Newer Entries') ?>
				</nav>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php if ( get_next_posts_link() ) : ?>
				<nav class="posts-navigation title-box">
					<?php next_posts_link('&laquo; Older Entries') ?>
				</nav>
			<?php endif; ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>

		<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
