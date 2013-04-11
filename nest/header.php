<?php global $nest_options, $nest_options_default_data; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page">

	<div id="header">

		<header id="header-inner" class="inner">

			<hgroup>
				<?php if( ! empty( $nest_options['logo_url'] ) ) : ?>
				<h1 class="site-logo"><a href="<?php echo esc_attr( home_url( '/' ) ); ?>"><img src="<?php echo $nest_options['logo_url']; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ) . ' - ' . esc_attr( get_bloginfo( 'description' ) ); ?>" /></a></h1>
				<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_attr( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ) ?></a></h1>
				<h4 class="site-description"><?php bloginfo( 'description' );?></h4>
				<?php endif; ?>
			</hgroup>

		</header><!-- #header-inner -->

	</div><!-- #header -->

	<div id="nav">

		<nav id="nav-inner" class="inner">

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			<div id="nav-sns">
				<?php if( ! empty( $nest_options['twitter_url'] ) ) : ?><a class="btn-sns btn-twitter" href="<?php echo $nest_options['twitter_url']; ?>" target="_blank" rel="nofollow">Twitter</a><?php endif; ?>
				<?php if( ! empty( $nest_options['facebook_url'] ) ) : ?><a class="btn-sns btn-facebook" href="<?php echo $nest_options['facebook_url']; ?>" target="_blank" rel="nofollow">Facebook</a><?php endif; ?>
				<?php if( ! empty( $nest_options['sina_url'] ) ) : ?><a class="btn-sns btn-sina" href="<?php echo $nest_options['sina_url']; ?>" target="_blank" rel="nofollow">Sina</a><?php endif; ?>
				<a class="btn-sns btn-sns-rss" href="<?php if( ! empty( $nest_options['rss_url'] ) ) : ?><?php echo $nest_options['rss_url']; ?><?php else : ?><?php bloginfo('rss2_url'); ?><?php endif; ?>" target="_blank">RSS</a>
			</div>

		</nav><!-- #nav-inner -->

	</div><!-- #nav -->

	<div id="main">

		<div id="content" class="inner">
