<?php global $post, $nest_options; ?>
<h2 class="post-title">
	<?php if( is_single() || is_page() || is_attachment() ) : ?>
		<?php the_title(); ?>
	<?php else : ?>
		<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
	<?php endif; ?>
</h2>
