<?php
	global $flexible_count;
	$title		= get_sub_field('title');
	$bgcolor	= get_sub_field('bg_color');
	$desc		= get_sub_field('resume_de_la_section');
	$size		= get_sub_field('featured_size');
	$featcolor	= get_sub_field('featured_color');
	$featsurtit	= get_sub_field('surtitre');
	$feattitle	= get_sub_field('titre_du_cadre');
	$blocs		= get_sub_field('blocs');
?>
<section id="section-<?php echo $flexible_count; ?>" class="cbo-sectionfeatured cbo-bg-<?php echo $bgcolor ?>">
	<div class="section-inner sectionnumber-inner">
		<div class="cbo-container container-padding paddingtop-<?php echo $paddingtop ?>">
			<?php if( get_sub_field('title') ): ?>
				<h2 class="cbo-title-2">
					<?php echo $title ?>
				</h2>
			<?php endif; ?>

			<?php if( get_sub_field('resume_de_la_section') ): ?>
				<div class="cbo-chapo slide-up">
					<?php echo $desc ?>
				</div>
			<?php endif; ?>
			
			<div class="cg-featured slide-up <?php echo $size ?> featured-<?php echo $featcolor ?>">
				<span class="featured-surtitre">
					<?php echo $featsurtit ?>
				</span>
				<span class="featured-title">
					<?php echo $feattitle ?>
				</span>
				<div class="blocs-container">
					<?php foreach($blocs as $bloc): ?>
						<div class="bloc">
							<span class="featured-round"></span>
							<span class="bloc-txt"><?php echo $bloc["txt"]; ?></span>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>