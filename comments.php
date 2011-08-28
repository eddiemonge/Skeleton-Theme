<div id="comments">
	<?php if ( post_password_required() ) : ?>
			<p class="nopassword"><?php __( 'This post is password protected. Enter the password to view any comments.' ); ?></p>
		</div><!-- #comments -->
		<?php return; ?>
	<?php endif; ?>

	<?php if ( have_comments() ) : ?>
		<h3 id="comments-title">
		<?php 
			printf( 
				__( 
					'One Response to %2$s',
					'%1$s Responses to %2$s', 
					get_comments_number() 
				), 
				number_format_i18n( get_comments_number() ),
				'<em>' . get_the_title() . '</em>' 
			);
		?>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>' ) ); ?></div>
			</div> <!-- .navigation -->
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist">
			<?php wp_list_comments(); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>' ) ); ?></div>
			</div><!-- .navigation -->
		<?php endif; // check for comment navigation ?>

	<?php else : ?>
		<?php if ( ! comments_open() ) : ?>
			<p class="nocomments"><?php __( 'Comments are closed.' ); ?></p>
		<?php endif; // end ! comments_open() ?>
	<?php endif; // end have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->

