<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label for="s" class="assistive-text"><?php _e( 'Search' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search' ); ?>" />
		<button type="submit" name="submit" value="<?php esc_attr_e( 'Search' ); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/images/search.png" alt="<?php esc_attr_e( 'Search' ); ?>" />
		</button>
	</div>
</form>
