<?php global $nest_options; ?>
<?php if( is_single() && $nest_options['is_display_by-nc-sa'] ) : ?>
<div class="page-meta">
	<?php printf( __( '<strong>Notice:</strong> This work is licensed under a <a rel="license nofollow external" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><abbr title="Attribution-NonCommercial-ShareAlike">BY-NC-SA</abbr></a>. Permalink: %s', 'nest'), '<a href="' . get_permalink().'">' . get_the_title() . '</a>' ); ?>
</div>
<?php endif; ?>
