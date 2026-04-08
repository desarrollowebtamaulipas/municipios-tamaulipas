<?php if( have_rows('cabildo_regidor', 'option') ): ?>

<!-- Directorio -->
<section id="directorio" class="seccion">
	<div class="container-lg directorio">
		
		<div class="row">
			
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Cabildo</h2>
				<div class="borde-hr"><hr></div>
			</div>
		
		</div>
		
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
</section>
<!-- /Directorio -->
	
<?php endif; ?>