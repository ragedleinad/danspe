<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package annina
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
?>
<div id="page" class="hfeed site">
<?php 
	$hideSearch = get_theme_mod('annina_theme_options_hidesearch', '1');
	$facebookURL = get_theme_mod('annina_theme_options_facebookurl', '#');
	$twitterURL = get_theme_mod('annina_theme_options_twitterurl', '#');
	$googleplusURL = get_theme_mod('annina_theme_options_googleplusurl', '#');
	$linkedinURL = get_theme_mod('annina_theme_options_linkedinurl', '#');
	$instagramURL = get_theme_mod('annina_theme_options_instagramurl', '#');
	$youtubeURL = get_theme_mod('annina_theme_options_youtubeurl', '#');
	$pinterestURL = get_theme_mod('annina_theme_options_pinteresturl', '#');
	$vkURL = get_theme_mod('annina_theme_options_vkurl', '#');
	$soundcloudURL = get_theme_mod('annina_theme_options_soundcloudurl', '');
	$redditURL = get_theme_mod('annina_theme_options_redditurl', '');
	$emailURL = get_theme_mod('annina_theme_options_emailurl', '#');
?>
<?php if ( $hideSearch == 1 ) : ?>
<!-- Start: Search Form -->
	<div id="search-full">
		<div class="search-container">
			<form method="get" id="search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
				<label>
					<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'annina' ); ?></span>
					<input type="search" name="s" id="search-field" placeholder="<?php esc_attr_e('Type here and hit enter...', 'annina'); ?>">
				</label>
			</form>
			<span><a id="close-search"><i class="fa fa-close spaceRight"></i><?php esc_html_e('Close', 'annina'); ?></a></span>
		</div>
	</div>
<!-- End: Search Form -->
<?php endif; ?>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'annina' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding annCenter">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$annina_description = get_bloginfo( 'description', 'display' );
			if ( $annina_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $annina_description; /* // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */ ?></p>
			<?php
			endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle"><?php esc_html_e( 'Main Menu', 'annina' ); ?><i class="fa fa-align-justify"></i></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->

			<div class="socialLine annCenter">
				<?php if (!empty($facebookURL)) : ?>
					<a href="<?php echo esc_url($facebookURL); ?>" title="<?php esc_attr_e( 'Facebook', 'annina' ); ?>"><i class="fa fa-facebook spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($twitterURL)) : ?>
					<a href="<?php echo esc_url($twitterURL); ?>" title="<?php esc_attr_e( 'Twitter', 'annina' ); ?>"><i class="fa fa-twitter spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($googleplusURL)) : ?>
					<a href="<?php echo esc_url($googleplusURL); ?>" title="<?php esc_attr_e( 'Google Plus', 'annina' ); ?>"><i class="fa fa-google-plus spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Google Plus', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($linkedinURL)) : ?>
					<a href="<?php echo esc_url($linkedinURL); ?>" title="<?php esc_attr_e( 'Linkedin', 'annina' ); ?>"><i class="fa fa-linkedin spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Linkedin', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($instagramURL)) : ?>
					<a href="<?php echo esc_url($instagramURL); ?>" title="<?php esc_attr_e( 'Instagram', 'annina' ); ?>"><i class="fa fa-instagram spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Instagram', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($youtubeURL)) : ?>
					<a href="<?php echo esc_url($youtubeURL); ?>" title="<?php esc_attr_e( 'YouTube', 'annina' ); ?>"><i class="fa fa-youtube spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'YouTube', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($pinterestURL)) : ?>
					<a href="<?php echo esc_url($pinterestURL); ?>" title="<?php esc_attr_e( 'Pinterest', 'annina' ); ?>"><i class="fa fa-pinterest spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Pinterest', 'annina' ); ?></span></i></a>
				<?php endif; ?>
						
				<?php if (!empty($vkURL)) : ?>
					<a href="<?php echo esc_url($vkURL); ?>" title="<?php esc_attr_e( 'VK', 'annina' ); ?>"><i class="fa fa-vk spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'VK', 'annina' ); ?></span></i></a>
				<?php endif; ?>
				
				<?php if (!empty($soundcloudURL)) : ?>
					<a href="<?php echo esc_url($soundcloudURL); ?>" title="<?php esc_attr_e( 'SoundCloud', 'annina' ); ?>"><i class="fa fa-soundcloud spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'SoundCloud', 'annina' ); ?></span></i></a>
				<?php endif; ?>
				
				<?php if (!empty($redditURL)) : ?>
					<a href="<?php echo esc_url($redditURL); ?>" title="<?php esc_attr_e( 'Reddit', 'annina' ); ?>"><i class="fa fa-reddit spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Reddit', 'annina' ); ?></span></i></a>
				<?php endif; ?>
				
				<?php if (!empty($emailURL)) : ?>
					<a href="mailto:<?php echo esc_attr(antispambot($emailURL)); ?>" title="<?php esc_attr_e( 'Email', 'annina' ); ?>"><i class="fa fa-envelope spaceRightDouble" aria-hidden="true"><span class="screen-reader-text"><?php esc_html_e( 'Email', 'annina' ); ?></span></i></a>
				<?php endif; ?>
				
				<?php if ( $hideSearch == 1 ) : ?>
					<div id="open-search" class="top-search"><i class="fa spaceRightDouble fa-search" aria-hidden="true"></i></div>
				<?php endif; ?>
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
