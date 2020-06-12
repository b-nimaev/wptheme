<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

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
<?php wp_body_open(); ?>
	
	<div class="headertop container">
		<div class="row">
			<div class="col-md-4">
				<h1>Logotype</h1>
			</div>
			<div class="col d-flex">
				<?php wp_nav_menu( array(
					'theme_location'  => 'navbar',
					'menu'            => 'navbar',
					'container'       => 'nav',
					'container_class' => 'navbar',
					'container_id'    => false,
					'menu_class'      => 'navbar-nav nav',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				) ); ?>
			</div>
		</div>
	</div>

	<header>
	  <div class="container">
	    <div class="row">
	      <div class="col">
	        <h1>Web Design and Develop</h1>
	        <h2>Web Design and Develop</h2>
	        <h3>Web Design and Develop</h3>
	        <h4>Web Design and Develop</h4>
	        <h5>Web Design and Develop</h5>
	        <h6>Web Design and Develop</h6>
	      </div>
	      <div class="col-md-5 ml-auto">
	        <h1>Web Design & Develop</h1>
	        <p>We are a new design studio based in USA. We have over 20 years of combined experience, and know a thing or two about designing wesites an mobile apps.</p>
	        <button>contact us</button>
	      </div>
	    </div>
	  </div>
	</header>
