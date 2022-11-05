
	<footer>
		<div class="container footer-container">
			<?php if ( dynamic_sidebar('footer-desc') ) : else : ?><?php endif; ?>
			<?php if ( dynamic_sidebar('footer-menus') ) : else : ?><?php endif; ?>
			<div class="footer-col">
					<div class="widget-title">Suivez-nous</div>
				<?php
					if( have_rows('reseaux_sociaux', 'option') ):
					while ( have_rows('reseaux_sociaux', 'option') ) : the_row();
				?>
					<a class="footer-social" href="<?php the_sub_field('url_du_reseau', 'option'); ?>" target="_blank">
						<i class="icon icon--<?php the_sub_field('reseau', 'option'); ?>"></i>
					</a>
				<?php
					endwhile;
					endif;
				?>
				<div class="footer-newsletter">
						<div class="widget-title">Recevoir la newsletter</div>
						<?php echo do_shortcode("[sibwp_form id=1]"); ?>
				</div>
			</div><!-- End .footer-col -->
		</div><!-- End .footer-container -->
		
		<div class="footer-bottom">
			&copy; <a href="<?php bloginfo(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <?php echo date('Y'); ?>  -
			<a href="<?php bloginfo(); ?>/mentions-legales-et-conditions-generales-dutilisation/">Mentions légales</a>
		</div>
	</footer>

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
	<script async="async" src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
	<script defer src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
	<?php
		wp_footer();
	?>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-28782686-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-28782686-1');
		gtag('config', 'AW-962379492');
		</script>
		
		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '693436517874437');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=693436517874437&ev=PageView&noscript=1"/></noscript>
		<!-- End Facebook Pixel Code -->

</body>
</html>