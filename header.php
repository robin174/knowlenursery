<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package knowlenursery26
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"><!-- What is this? -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png?version=1.1">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" />

		<!-- Google Fonts: Titillium Web -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&family=Work+Sans:wght@400;500&display=swap" rel="stylesheet">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> style="background:url(<?php the_field('bg_image','option'); ?>); background-position: top center;">
		<header> 
			<nav class="navbar navbar-expand-md navbar-offcanvas"> 
				<div class="container-fluid">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1>Home</h1>
					<?php else : ?>
						<h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Home</a></h1>
					<?php endif; ?>
					
					<?php /* Toggle: And works with the below wp_nav_menu
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
						<span class="navbar-toggler-icon"></span> 
					</button>
					*/ ?>

					<div class="d-md-none">
						<button class="btn btn-primary atmButtonNav" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
							<svg class="icon icon-bars" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
								<line x1="3" y1="6" x2="21" y2="6"></line>
								<line x1="3" y1="12" x2="21" y2="12"></line>
								<line x1="3" y1="18" x2="21" y2="18"></line>
							</svg>
						</button>
					</div>
					
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
					 	<div class="offcanvas-header">
					    	<h2 id="offcanvasRightLabel" class="visually-hidden">Menu</h2>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
								<svg class="icon icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
									<line x1="6" y1="6" x2="18" y2="18"></line>
									<line x1="6" y1="18" x2="18" y2="6"></line>
								</svg>
							</button>
					 	</div>
						<div class="offcanvas-body">
							<?php knowlenursery26_nav(); ?>
					    </div>
					</div>
					
					<?php /*
						1. Set wrapper 
						2. Get Template part 
						3. 4 to choose from: offcanvas, offcanvas-topbar, title-bar, topbar 
						4. Pulls in '<?php joints_top_nav(); ?>abd that is then stipulated from 'functions.php' via:
							// Register custom menus and menu walkers
							require_once(get_template_directory().'/functions/menu.php'); 
					*/ ?>
				</div> 
			</nav> 
		</header>
		<main>
