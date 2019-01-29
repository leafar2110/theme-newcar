<?php get_header();?>


<?php if ( have_posts() ) : the_post(); ?>
	<div class=" container separador-offertas">
		<div class="row">
			
			<div class="col-md-6">
				<img src="<?php the_post_thumbnail_url('full');?>" width="100%" height="auto" style="margin-top: 30px;">

			</div>

			<div class="col-md-5 text-ofer">
				<div>
					<h2 class="single-text-title">
						<?php the_title(); ?>
					</h2>
				</div>
				<hr>
				<div class="single-text-ofer">
					<p><?php the_excerpt(); ?></p>
				</div>

			</div>
		</div>
	</div>

	<?php else : ?>
		<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
	<?php endif; ?>

	<?php get_footer();?>