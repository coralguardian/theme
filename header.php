<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<title><?php wp_title(' - '); ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta property="og:url" content="<?php site_url('/adopte-corail/');?>" />
		<meta property="og:title" content="Adoptez un corail"/>
		<meta property="og:description" content="Adoptez un corail et agissez pour la biodiversité marine 🌊" />
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/library/img/share_social_networks.jpg" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/library/img/fav/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/library/img/fav/favicon-16x16.png">
		<?php wp_head(); ?>		
	</head>
	<body <?php body_class(''); ?> itemscope itemtype="http://schema.org/WebPage">
		<header>
			<div class="header-top">
				<a class="cbo-button green-button header-button" href="<?php the_field('donation_url', 'option'); ?>">
					<i class="icon icon--donation"></i>Faire un don
				</a>
				<a class="cbo-button border-button header-button" href="<?php the_field('gift_url', 'option'); ?>">
					<i class="icon icon--gift"></i>J'ai un bon cadeau
				</a>
				<a class="cbo-button border-button header-button" href="<?php the_field('adoption_url', 'option'); ?>">
					<i class="icon icon--certificat"></i>Adoptez un corail
				</a>
			</div>

			<div class="header-main">
				<a class="header-logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
					<img class="logo-mobile" src="<?php bloginfo('template_directory'); ?>/library/img/logo-coral-guardian-small-white.svg" alt="Coral Guardian" itemprop="logo" width="120" height="54" loading="lazy"/>
					<img class="logo-desktop" src="<?php bloginfo('template_directory'); ?>/library/img/logo-coral-guardian.svg" alt="Coral Guardian" itemprop="logo" width="120" height="54" loading="lazy"/>
				</a>

				<a class="cbo-button green-button header-button" href="<?php the_field('donation_url', 'option'); ?>">
					<i class="icon icon--donation"></i>Faire un don
				</a>

				<button type="button" class="burger-menu">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</button>
				<nav class="header-nav">
					<a class="cbo-button border-button header-button" href="<?php the_field('gift_url', 'option'); ?>">
						<i class="icon icon--gift"></i>J'ai un bon cadeau
					</a>
					<a class="cbo-button border-button header-button" href="<?php the_field('adoption_url', 'option'); ?>">
						<i class="icon icon--certificat"></i>Adoptez un corail
					</a>
					<?php wp_nav_menu( array(
						'container' => false,
						'container_class' => '',
						'menu_class' => 'main-menu',
						'theme_location' => 'main-nav',
					)); ?>
				</nav>
			</div>
		</header>

		<div class="cg-overlay-search">
			<button type="button" class="search-close">
				<i class="icon icon--close"></i>
			</button>
		</div>