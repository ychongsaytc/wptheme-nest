<?php

// all items of theme options
$nest_options_items = array (
	array(
		'id' => 'sidebar_pos_home',
		'name' => __( 'Sidebar Position: Homepage', 'nest' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'nest' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'nest' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'nest' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in homepage.', 'nest' )
	),
	array(
		'id' => 'sidebar_pos_archive',
		'name' => __( 'Sidebar Position: Archives', 'nest' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'nest' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'nest' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'nest' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in archives page.', 'nest' )
	),
	array(
		'id' => 'sidebar_pos_single',
		'name' => __( 'Sidebar Position: Single Post', 'nest' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'On the left', 'nest' ), 'value' => 'left' ), array( 'name' => __( 'On the right', 'nest' ), 'value' => 'right' ), array( 'name' => __( 'Hide sidebar (wide column)', 'nest' ), 'value' => 'none' ) ),
		'desc' => __( 'Select where your sidebar will be in single post and standard pages.', 'nest' )
	),
	array(
		'id' => 'logo_url',
		'name' => __( 'Logo URL', 'nest' ),
		'type' => 'text',
		'desc' => __( 'Put your website logo URL here. (leave it blank for displaying site name and site description.)', 'nest' )
	),
	array(
		'id' => 'menu_effect',
		'name' => __( 'Multi-level Menu Effect', 'nest' ),
		'type' => 'select',
		'data' => array( array( 'name' => __( 'None', 'nest' ), 'value' => 'none' ), array( 'name' => __( 'Fade', 'nest' ), 'value' => 'fade' ), array( 'name' => __( 'Slide', 'nest' ), 'value' => 'slide' ), array( 'name' => __( 'Flexible', 'nest' ), 'value' => 'flexible' ) ),
		'desc' => __( 'Select the effect of multi-level navigation menu.', 'nest' )
	),
	array(
		'id' => 'is_display_homepage_menuitem',
		'name' => __( 'Homepage menu item in navigation menu', 'nest' ),
		'type' => 'checkbox',
		'data' => __( 'Display homepage menu item', 'nest' ),
		'desc' => __( 'Enabling this will display the index page menu item in the header navigation menu.', 'nest' )
	),
	array(
		'id' => 'is_display_author_info',
		'name' => __( 'Author Information', 'nest' ),
		'type' => 'checkbox',
		'data' => __( 'Display author information', 'nest' ),
		'desc' => __( 'Enabling this will display your author information in a single post page. (avatars visibility required)', 'nest' )
	),
	array(
		'id' => 'is_display_by-nc-sa',
		'name' => __( 'BY-NC-SA License Notice', 'nest' ),
		'type' => 'checkbox',
		'data' => __( 'Display BY-NC-SA license notice', 'nest' ),
		'desc' => __( 'Enabling this will display the BY-NC-SA License Notice in a singular page.', 'nest' )
	),
	array(
		'id' => 'is_display_post_meta_in_page',
		'name' => __( 'Post meta in pages', 'nest' ),
		'type' => 'checkbox',
		'data' => __( 'Display post meta-information in pages', 'nest' ),
		'desc' => __( 'Enabling this will display the post meta-information under the post title in pages.', 'nest' )
	),
	array(
		'id' => 'is_display_posts_navi_links_in_single',
		'name' => __( 'Posts navigation links in single posts', 'nest' ),
		'type' => 'checkbox',
		'data' => __( 'Display posts navigation in single posts', 'nest' ),
		'desc' => __( 'Enabling this will display the posts navigation links (previous and next post) in a single post.', 'nest' )
	),
	array(
		'id' => 'rss_url',
		'name' => __( 'RSS URL', 'nest' ),
		'type' => 'text',
		'desc' => __( 'Put your full RSS subscribe URL here. (with http://, leave it blank for displaying the standard URL.)', 'nest' )
	),
	array(
		'id' => 'twitter_url',
		'name' => __( 'Twitter URL', 'nest' ),
		'type' => 'text',
		'desc' => __( 'Put your full Twitter URL here. (with http://, leave it blank for displaying none.)', 'nest' )
	),
	array(
		'id' => 'facebook_url',
		'name' => __( 'Facebook URL', 'nest' ),
		'type' => 'text',
		'desc' => __( 'Put your full Facebook URL here. (with http://, leave it blank for displaying none.)', 'nest' )
	),
	array(
		'id' => 'sina_url',
		'name' => __( 'Sina WeiBo URL', 'nest' ),
		'type' => 'text',
		'desc' => __( 'Put your full Sina WeiBo URL here. (with http://, leave it blank for displaying none.)', 'nest' )
	),
	array(
		'id' => 'code_siteinfo',
		'name' => __( 'Custom Website Info String', 'nest' ),
		'type' => 'textarea',
		'desc' => __( 'Some HTML code replaced the footer\'s website information.', 'nest' )
	)
);

// default values of theme options
$nest_options_default_data = array(
	'sidebar_pos_home'                      => 'right',
	'sidebar_pos_archive'                   => 'right',
	'sidebar_pos_single'                    => 'right',
	'menu_effect'                           => 'fade',
	'is_display_homepage_menuitem'          => '1',
	'is_display_author_info'                => '0',
	'is_display_by-nc-sa'                   => '0',
	'is_display_post_meta_in_page'          => '0',
	'is_display_posts_navi_links_in_single' => '1',
);

add_action( 'admin_init', 'nest_options_init' );
add_action( 'admin_menu', 'nest_options_add_page' );
add_action( 'init', 'nest_options_make_default' );

function nest_options_init(){
	register_setting( 'nest_theme_options', 'nest_theme_options', 'nest_options_validate' );
}
function nest_options_add_page() {
	add_theme_page( __( 'Theme Options', 'nest' ), __( 'Theme Options', 'nest' ), 'edit_theme_options', 'theme_options', 'nest_options_do_page' );
}
function nest_options_validate( $input ) {
	global $nest_options_items;
	foreach ( $nest_options_items as $item ) {
		if( !isset( $input[$item['id']] ) ) $input[$item['id']] = '';
		switch ( $item['type'] ) {
			case 'text':
				$input[$item['id']] = wp_filter_nohtml_kses( $input[$item['id']] );
				break;
			case 'textarea':
				$input[$item['id']] = htmlspecialchars( $input[$item['id']] );
				break;
			case 'checkbox':
				$input[$item['id']] = ( $input[$item['id']] == 1 ? 1 : 0 );
				break;
		}
	}
	return $input;
}
function nest_options_make_default() {
	global $nest_options_items, $nest_options_default_data;
	$nest_options = get_option( 'nest_theme_options' );
	foreach ( $nest_options_items as $item ) {
		if ( ! isset( $nest_options[$item['id']] ) ) {
			if ( isset ( $nest_options_default_data[$item['id']] ) ) {
				$nest_options[$item['id']] = $nest_options_default_data[$item['id']];
			} else {
				$nest_options[$item['id']] = '';
			}
		}
	}
	update_option( 'nest_theme_options', $nest_options );
}

// display admin theme options page
function nest_options_do_page() {

	global $nest_options_items;

	if( isset( $_REQUEST['_wpnonce'] ) ) {
		if ( ! wp_verify_nonce( $_REQUEST['_wpnonce'], 'nest_theme_options-options' ) ) die( 'Security check' );
	}

	if ( ! isset( $_GET['settings-updated'] ) ) $_GET['settings-updated'] = false;

	?>
	<div class="wrap">

		<?php screen_icon(); echo "<h2>" . wp_get_theme() . ' ' . __( 'Theme Options', 'nest' ) . "</h2>"; ?>

		<?php if ( false !== $_GET['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved.', 'nest' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'nest_theme_options' ); ?>
			<?php $nest_options = get_option( 'nest_theme_options' ); ?>
			<table class="form-table">
				<?php foreach( $nest_options_items as $item ) { ?>
				<tr valign="top">
					<th scope="row"><?php echo esc_attr( $item['name'] ); ?></th>
					<td>
						<?php if( $item['type'] == 'text' ) : ?>
						<input name="<?php echo 'nest_theme_options['.$item['id'].']'; ?>" type="text" value="<?php if( $nest_options[$item['id']] ) echo esc_attr( $nest_options[$item['id']] ); ?>" size="80" />
						<?php elseif( $item['type'] == 'textarea' ) : ?>
						<textarea name="<?php echo 'nest_theme_options['.$item['id'].']'; ?>" rows="5" cols="60"><?php if( $nest_options[$item['id']] ) echo esc_textarea( $nest_options[$item['id']] ); ?></textarea>
						<?php elseif( $item['type'] == 'select' ) : ?>
						<select name="<?php echo 'nest_theme_options['.$item['id'].']'; ?>">
							<?php foreach( $item['data'] as $select_data ) : ?>
							<option value="<?php echo $select_data['value']; ?>"<?php selected( $nest_options[$item['id']], $select_data['value'] ); ?>><?php echo esc_attr( $select_data['name'] ); ?></option>
							<?php endforeach; ?>
						</select>
						<?php elseif( $item['type'] == 'checkbox' ) : ?>
							<label for="<?php echo 'nest_theme_options['.$item['id'].']'; ?>"><input name="<?php echo 'nest_theme_options['.$item['id'].']'; ?>" id="<?php echo 'nest_theme_options['.$item['id'].']'; ?>" type="checkbox" value="1"<?php checked( '1', $nest_options[$item['id']] ); ?> /> <?php echo $item['data']; ?></label>
						<?php endif; ?>
						<?php if( ! empty( $item['desc'] ) ) : ?>
						<br/><label class="description" for="<?php echo 'nest_theme_options['.$item['id'].']'; ?>"><?php echo esc_attr( $item['desc'] ); ?></label>
						<?php endif; ?>
					</td>
				</tr>
				<?php } // endforeach; ?>
			</table>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'nest' ); ?>" />
			</p>

		</form>

	</div>
	<?php
}

// initialize theme options variable array
$nest_options = get_option( 'nest_theme_options' );

