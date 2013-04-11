<?php global $post, $nest_options; ?>
<?php if( !is_page() && !is_attachment() ) : ?>
<div class="post-footer">
	<?php _e( 'Categories: ', 'nest' ); ?><?php the_category( ', ' ); ?><?php the_tags( ' | '.__( 'Tags: ', 'nest' ), ', ', '' ); ?>
</div><!-- .post-footer -->
<?php endif; ?>
