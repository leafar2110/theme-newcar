
<?php

get_header();
?>

<?php
if(have_posts()){
	
	while(have_posts()){
		the_post();
		?>

		<div id="banner-header page-nav">
			<div class="navbar-main">             
				<div class="container">
					<div id="navbar" class="navbar-collapse collapse">
						<?php
						$args = array(
							'theme_location' => 'primary',
							'menu' => 'top_menu',
							'depth' => 2,
							'container' => false,
							'menu_class' => 'nav navbar-nav'
						);
						
						?>
						
						<?php wp_nav_menu($args); ?>
					</div> 
				</div>   
			</div>  
		</div>

		<div class="page-heading text-center">

			<div class="container zoomIn animated">
				<div class="nc_links">
					<a href="<?php echo get_home_url()?>">Inicio</a>
					<a class="arrow">></a>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>

				<h2 class="page-title"><?php the_title(); ?><span class="title-under"></span></h2>
				
			</div>

		</div>
		
		<div class="container p-soli">
			<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 9, 'title' => false, 'description' => false ) ); ?>

		</div>
		
		<?php	
	}
}else {
	
	?>
	<article class="post page <?php if(has_post_thumbnail()) { echo 'has-thumbnail'; }?> archive">
		
		<h2>Esta pagina no existe</h2>
		<br>
		<a href="<?php bloginfo("url")?>" style="padding: 10px 0;">Volver a la pagina principal</a>
		<p></p>
		
	</article>
	<?php
}	
?>

<?php
get_footer();
?>