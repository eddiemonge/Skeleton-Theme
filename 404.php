<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">

		<article id="post-0" class="post error404 not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'Page Not Found' ); ?></h1>
			</header>

			<div class="entry-content">
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.' ); ?></p>

				<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>

				<div class="widget">
					<h2 class="widgettitle"><?php _e( 'Most Used Categories' ); ?></h2>
					<ul>
					<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
					</ul>
				</div>

				<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</div>
		</article>

	</div>
	
	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
