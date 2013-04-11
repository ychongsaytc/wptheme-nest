<?php global $post, $nest_options; ?>
<?php if( !is_page() || $nest_options['is_display_post_meta_in_page'] ) : ?>
<div class="post-meta">
	<div class="meta-pri">
		<?php printf( __( 'Posted on %1$s by %2$s', 'nest' ),
			sprintf( '<time class="date time published updated sc" datetime="%s" title="%s">%s</time> ', get_the_time( 'Y-m-d\TH:i:s.uP' ), get_the_time(), get_the_date() ),
			sprintf( '<a href="%s" title="%s">%s</a> ', get_author_posts_url( get_the_author_meta( 'ID' ) ), esc_attr( get_the_author() ), esc_html( get_the_author() ) )
		); ?>
		<?php edit_post_link( __( 'Edit', 'nest' ), ' | ', '' ); ?>
	</div>
	<div class="meta-sec">
		<span class="comments_popup_link"><?php comments_popup_link( __( 'No Comments', 'nest' ), __( '1 Comment', 'nest' ), __( '% Comments', 'nest' ), '', __( 'Comments off', 'nest' ) ); ?></span>
		<?php if( is_singular() && comments_open() ) : ?><span class="comments_link"><a href="#respond"><?php _e( 'Leave a comment', 'nest' ); ?></a></span><?php endif; ?>
	</div>
	<div class="clearfix"></div>
</div><!-- .post-meta -->
<?php endif; ?>
