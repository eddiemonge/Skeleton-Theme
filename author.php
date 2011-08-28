<?php get_header(); ?>

<section id="primary">
	<div id="content" role="main">

		<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

			<?php if ( get_query_var('paged') < 2 ) : ?>
				<section class="page">
					<div id="author-avatar">
						<?php echo get_avatar( $curauth->user_email, 150 ); ?>
					</div>
					<h1 class="page-title author"><?php printf( __( '%s' ), '<span>' . $curauth->display_name . '</span>' ); ?></h1>

					<div id="author-info">
						<br />
						<dl>
							<?php if ( $curauth->nickname ) : ?>
								<dt id="author-nickname">Nickname:</dt>
								<dd>
									<?php echo $curauth->nickname; ?>
								</dd>
							<?php endif; ?>

							<?php if ( $curauth->user_url ) : ?>
								<br />
								<dt id="author-website">Website:</dt>
								<dd>
									<a href="<?php echo $curauth->user_url; ?>" class="external"><?php echo $curauth->user_url; ?></a>
								</dd>
							<?php endif; ?>

							<?php if ( $curauth->aim ) : ?>
								<br />
								<dt id="author-aim">AIM:</dt>
								<dd>
									<?php echo $curauth->aim; ?>
								</dd>
							<?php endif; ?>

							<?php if ( $curauth->jabber ) : ?>
								<br />
								<dt id="author-jabber">Jabber:</dt>
								<dd>
									<?php echo $curauth->jabber; ?>
								</dd>
							<?php endif; ?>

							<?php if ( $curauth->yim ) : ?>
								<br />
								<dt id="author-yim">Yahoo:</dt>
								<dd>
									<?php echo $curauth->yim; ?>
								</dd>
							<?php endif; ?>
						</dl>
					</div>

					<?php if ( $curauth->description ) : ?>
						<hr />

						<div id="author-description">
							<h3>Biography:</h3>
							<?php echo $curauth->description; ?>
						</div>
					<?php endif; ?>

					
				</section>
			<?php endif; ?>

			<?php $posts = query_posts( $query_string . '&showposts='.get_option('posts_per_page_author') ); ?>

			<?php if ( have_posts() ) : ?>			
				<h2 class="title-box"><?php printf( __( "%s's Posts" ), '<span>' . ( $curauth->first_name ? $curauth->first_name : $curauth->display_name ) . '</span>' ); ?></h2>
				
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
						<p><?php _e( 'This author has not written any posts yet.' ); ?></p>
					</div>
				</article>
			<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
