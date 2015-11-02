<?php
/**
 * @package Jerome
 */
?>
<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" lang="en-US">
<![endif]-->
<!--[if (gte IE 9) | !(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body id="page" <?php body_class(); ?>>
	<!--[if lt IE 9]>
		<div class="chromeframe">Your browser is out of date. Please <a href="http://browsehappy.com/">upgrade your browser </a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a>.</div>
	<![endif]-->
<div class="container">
	<header id="page-header" class="row">
		<hgroup id="site-title-description">
			<h1 id="site-title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>

			<?php if ( frank_tweet_post_attribution() ): ?>
			<a href="https://twitter.com/<?php echo frank_tweet_post_attribution(); ?>" title="Suivez-moi sur Twitter">
				<div class="logo-twitter-small">
					<div class="body"></div>
					<div class="body-none"></div>
					<div class="beak-bottom"></div>
					<div class="beak-bottom-none"></div>
					<div class="wing-bottom"></div>
					<div class="wing-bottom-none"></div>
					<div class="wing-middle"></div>
					<div class="wing-middle-none"></div>
					<div class="wing-top"></div>
					<div class="wing-top-none"></div>
					<div class="beak-top"></div>
					<div class="beak-top-none"></div>
					<div class="head"></div>
				</div>
			</a>
			<?php endif; ?>

		</hgroup>

		<?php
			$header_image = get_header_image();
			if ( $header_image ) :
				if ( function_exists( 'get_custom_header' ) ) {
					$header_image_width = get_theme_support( 'custom-header', 'width' );
				} else {
					$header_image_width = HEADER_IMAGE_WIDTH;
				}
				?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php
				if ( is_singular() && has_post_thumbnail( $post->ID ) &&
						( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
						$image[1] >= $header_image_width ) :
					echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
				else :
					if ( function_exists( 'get_custom_header' ) ) {
						$header_image_width  = get_custom_header()->width;
						$header_image_height = get_custom_header()->height;
					} else {
						$header_image_width  = HEADER_IMAGE_WIDTH;
						$header_image_height = HEADER_IMAGE_HEIGHT;
					}
					?>
				<img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
			<?php endif; ?>
		</a>
		<?php endif; ?>
		<nav id="site-nav">
			<?php if ( !dynamic_sidebar( 'Navigation' ) ) : ?>
				<?php wp_nav_menu( array( 'theme_location' => 'frank_primary_navigation', 'container' => false ) ); ?>
			<?php endif; ?>
		</nav>
	</header>
