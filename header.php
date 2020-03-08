<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- meta -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="AM2 test project - Onepager">
	<meta name="keywords" content="am2, development, web development, web project" />
	<!--/ meta -->
	<!-- title -->
	<title><?php if( is_home() ) bloginfo( 'name' ); else wp_title( '' ); ?></title>
	<!--/ title -->
	<!-- material icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet">
	<!--/ end material icons -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- main header -->
	<header class="main-header">
		<div class="container">
			<div class="main-header__inner">
				<a href="<?php echo site_url(); ?>" class="logo">
					<span>lo</span>
					<span>go</span>
				</a>
				<div class="main-header__nav">
					<i class="material-icons close-menu">close</i>
					<?php
						$menu_args = array(
							'menu'			=>	'main-menu',
							'items_wrap'	=>	'<nav id="%1$s" class="%2$s">%3$s</nav>'
						);
						wp_nav_menu( $menu_args );
					?>
				</div>
				<div class="mobile-menu-trigger">
					<i class="material-icons">menu</i>
				</div>
			</div>
		</div>
	</header>
	<!--/ main header -->