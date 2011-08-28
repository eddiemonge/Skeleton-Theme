<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<hgroup>
			<h2 class="entry-title">
				<a 
					href="<?php the_permalink(); ?>" 
					title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" 
					rel="bookmark">
						<?php the_title(); ?>
				</a>
			</h2>

			<?php if ( is_sticky() ) : ?>
				<h3 class="entry-format featured"><?php _e( 'Featured Article' ); ?></h3>
			<?php endif; ?>
		</hgroup>



		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
				<span class="meta-date"><?php the_time('M j, Y'); ?></span>
				 by 
				<?php the_author_posts_link(); ?>
				<div class="entry-social">
					<a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
					<iframe src="http://www.facebook.com/plugins/like.php?app_id=140830466005153&amp;href=<?php the_permalink(); ?>&amp;send=false&amp;layout=button_count&amp;width=110&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px;" allowTransparency="true"></iframe>
				</div>
			</div>
		<?php endif; ?>

	</header>



	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Read More ...' ) ); ?>
		</div>
	<?php endif; ?>

	<?php if ( 'post' === get_post_type() ) : // Hide category and tag text for pages on Search ?>
		<footer class="entry-footer"> 
			<?php $categories_list = get_the_category_list( ', ' ); ?>
			<?php if ( $categories_list ): ?>
				<span class="cat-links">
					<?php printf( __( '<span class="%1$s">Filed Under:</span> %2$s' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list ); ?>
				</span>
			<?php endif; ?>

			<?php
				$tags_list = get_the_tag_list( '', __( ', ' ) );
				if ( $tags_list ): ?>
					<span class="tag-links">
						<?php printf( __( '<span class="%1$s">Tagged:</span> %2$s' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
				</span> 
			<?php endif; ?>
		</footer>
	<?php endif; ?>

</article>
