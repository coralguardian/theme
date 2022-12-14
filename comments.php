<?php
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
    wp_enqueue_script( 'comment-reply' ); 
}
?>
<div class="cbo-container">
	<div class="cg-comments">
		<?php if ( have_comments() ) : ?>
			<h2 class="main-title">
				<?php echo get_comments_number(); ?> Commentaire(s)
			</h2>
			<ul class="cg-comments-list">
				<?php
					wp_list_comments( array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 74,
					) );
				?>
			</ul>
			<?php 
				if ( ! comments_open() && get_comments_number() ) :
			?>
				<p class="cg-cms">
					Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
				</p>
			<?php endif; ?>
		<?php endif; ?>

		<?php comment_form(); ?>
	</div>
</div>