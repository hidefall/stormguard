<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StormGuard
 */
$header_bg_image = (is_home()) ? get_field('header_background_image')['sizes'][''] : get_field('header_background_image')['sizes']['header_general_bg_image'] ;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if(is_home() || is_front_page()) : ?>
<header class="st_header">
	<div id="top_bar">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
  				<a class="navbar-brand find_location" href="#">Find Your Local Storm guard</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'top_bar',
				'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'top_menu collapse navbar-collapse',
				'container_id'    => 'bs-example-navbar-collapse-1',
				'menu_class'      => 'top_menu_list navbar-nav',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			</ul>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg main_navigation">
		<div class="container">
  			<a class="navbar-brand logo" href="#"><img src="http://localhost:8080/stormguard/wp-content/themes/stormguard/stormguard/img/logo.png"/></a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
			<?php
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'depth'	          => 0, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse header_main_menu',
				'container_id'    => 'bs-example-navbar-collapse-1',
				'menu_class'      => 'navbar-nav',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
			?>
			</div>
			</nav><!-- #site-navigation -->
		</div>
	 </div>
	 <?php if( get_field('home_page_header_image', 'options') ): ?>
			<div class="header_image" style="background-image: url('<?php the_field('home_page_header_image', 'options'); ?>')";>
				<div class="contact_heading_block">
					<p class="heading_block_description">Does Your Home or Property<br/> Have <span>Storm Damage</span> or<br/> 
					<span>Need an Update?</span></p>
					<a href="#" class="heading_block_link">Contact Us Today</a>
				</div>
			</div>

		<?php endif; ?>
</header><!-- #masthead -->
<?php elseif(is_single()) : ?>
<?php get_header('multiimage');?>
<?php  endif;?>
	<div id="content" class="site-content">
