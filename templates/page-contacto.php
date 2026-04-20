<?php 
	
	/* Template Name: Contacto */
	get_header();
	include(dirname(__DIR__).'/inc/breadcrumbs.php');
?>

<div id="contenido-principal" class="sidebar seccion page">
	<div class="container-lg">
	
		<section class="row">
			
			<?php while( have_posts() ) : the_post(); ?>
			
			<article  class="col-lg-8 article-content">
				
				<div class="row-titulo">
					<h1 class="titulo-row"><?php the_title(); ?></h1>
					<div class="borde-hr"><hr></div>
				</div>
				
				<?php if ( shortcode_exists('addtoany') ) : ?>
				
					<div id="compartir-nota" class="d-flex d-inline">
						<?php echo '<div class=compartir>Compartir</div>'; echo do_shortcode('[addtoany]'); ?>
					</div>
					
				<?php endif; ?>
				
				<div class="entry">
					
					<h3>Ayuntamiento de <?php the_field( 'identidad_nombre', 'options' ); ?></h3>
					
					<blockquote style="mb-5">
						<p>
							<?php the_field('contacto_direccion', 'options'); ?><br>
							<?php if( have_rows('contacto_telefonos', 'option') ): while( have_rows('contacto_telefonos', 'option') ): the_row(); ?>
								<?php the_sub_field('contacto_prefijo', 'options'); ?> <?php the_sub_field('contacto_telefono', 'options'); ?><br>
							<?php endwhile; endif; ?>
						</p>
					</blockquote>
					
					<div class="google_map mb-5">
						<?php echo get_field('contacto_mapa', 'options'); ?>
					</div>
				
					<?php the_content(); ?>
					
				</div>
				
			</article>
			
			<?php endwhile; ?>
			
			<?php get_sidebar(); ?>
			
		</section>
		
	</div>
</div>

<?php get_footer(); ?>