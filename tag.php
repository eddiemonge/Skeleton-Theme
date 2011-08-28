<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">

		<?php $posts = query_posts( $query_string . '&showposts='.get_option('posts_per_page_tag') ); ?>

		<?php if ( have_posts() ) : ?>
			<header class="page-header page">
				<h1 class="page-title"><?php
					printf( __( 'Tag: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

				<?php
					$tag_description = tag_description();
					if ( ! empty( $tag_description ) )
						echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
				?>
			</header>
				
			<?php if ( get_previous_posts_link() ) : ?>
				<nav class="posts-navigation title-box">
					<?php previous_posts_link('&laquo; Newer Entries') ?>
				</nav>
			<?php endif; ?>

			<?php 
				while ( have_posts() ) {
					the_post();
					get_template_part( 'content', get_post_format() );
				}
			?>

			<?php if ( get_next_posts_link() ) : ?>
				<nav class="posts-navigation title-box">
					<?php next_posts_link('&laquo; Older Entries') ?>
				</nav>
			<?php endif; ?>

		<?php else : ?>
			<article id="post-0" class="post no-results not-found">
				<header class="entry-header page">
					<h1 class="entry-title"><?php _e( 'Nothing Found' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.' ); ?></p>
				</div>
			</article>

		<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
