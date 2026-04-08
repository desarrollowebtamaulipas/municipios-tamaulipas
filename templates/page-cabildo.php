<?php 
	
	/* Template Name: Cabildo */
	get_header();
	include(dirname(__DIR__).'/inc/breadcrumbs.php');
?>

<div id="contenido-principal" class="seccion page">
	<div class="container-lg">
	
		<section class="row">
			
			<article  class="col-lg-12 article-content">
				
				<div class="row-titulo">
					<h1 class="titulo-row"><?php the_title(); ?></h1>
					<div class="borde-hr"><hr></div>
				</div>
				
				<?php if ( shortcode_exists('addtoany') ) : ?>
				
					<div id="compartir-nota" class="d-flex d-inline">
						<?php echo '<div class=compartir>Compartir</div>'; echo do_shortcode('[addtoany]'); ?>
					</div>
					
				<?php endif; ?>
				
				<?php if( have_rows('cabildo_regidor', 'option') ): ?>
				
				<div id="directorio" class="">
				
					<div class="row">
								
						<?php
						
							while( have_rows('cabildo_regidor', 'option') ): the_row();
							$foto   = get_sub_field('regidor_foto', 'option');
							$nombre = get_sub_field('regidor_nombre', 'option');
							$puesto = get_sub_field('regidor_puesto', 'option');
						
						?>
						
						<div class="col-sm-6 col-md-6 col-lg-4 item-directorio">
							
							<div class="card">
								<?php if($foto): ?>
									<img src="<?php echo wp_get_attachment_image_url($foto, 'post-thumbnail'); ?>" class="img-regidor " alt="<?php echo esc_html($nombre); ?>">
								<?php else : ?>
									<span class="img-regidor escudo">
										<img src="<?php the_field('identidad_logo_blanco', 'option'); ?>" alt="<?php echo esc_html($puesto); ?>"> 
									</span>
								<?php endif; ?>
								<div class="card-body">
									<h5 class="card-title"><?php echo esc_html($nombre); ?></h5>
									<p class="card-text"><?php echo esc_html($puesto); ?></p>
								</div>
							</div>
							
						</div>
						
						<?php endwhile; ?>
					
					</div>
					
				</div>
				
				<?php endif; ?>
				
			</article>
			
		</section>
		
	</div>
</div>

<?php get_footer(); ?>