<!-- Temas de interés -->
<section id="temas-interes" class="seccion">
	<div class="container-lg items-temas">
	
		<div class="row">
		
			<div class="col-lg-12 row-titulo">
				<h2 class="titulo-row">Temas de interés</h2>
				<div class="borde-hr"><hr></div>
			</div>
			
		</div>
			
		<div class="row">
			
			<?php if( have_rows('tema_uno', 'options') ): while( have_rows('tema_uno', 'options') ): the_row();  ?>
			
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3">
				<div class="item-tema">
					
					<?php
						$attachment_id = get_sub_field('imagen');
						$size = 'post-thumbnail';
						$image = wp_get_attachment_image_src( $attachment_id, $size );
						$link = get_sub_field('link');
					?>
					
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $link['title']; ?>" class="img-fluid"></a>
					
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><h4 class="text-center"><?php echo $link['title']; ?></h4></a>
			
				</div>
			</div>
			
			<?php endwhile; endif; ?>
			
			<?php if( have_rows('tema_dos', 'options') ): while( have_rows('tema_dos', 'options') ): the_row();  ?>
						
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3">
				<div class="item-tema">
					
					<?php
						$attachment_id = get_sub_field('imagen');
						$size = 'post-thumbnail';
						$image = wp_get_attachment_image_src( $attachment_id, $size );
						$link = get_sub_field('link');
					?>
					
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $link['title']; ?>" class="img-fluid"></a>
					
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><h4 class="text-center"><?php echo $link['title']; ?></h4></a>
						
			
				</div>
			</div>
			
			<?php endwhile; endif; ?>
			
			<?php if( have_rows('tema_tres', 'options') ): while( have_rows('tema_tres', 'options') ): the_row();  ?>
									
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3">
				<div class="item-tema">
					
					<?php
						$attachment_id = get_sub_field('imagen');
						$size = 'post-thumbnail';
						$image = wp_get_attachment_image_src( $attachment_id, $size );
						$link = get_sub_field('link');
					?>
					
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $link['title']; ?>" class="img-fluid"></a>
					
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><h4 class="text-center"><?php echo $link['title']; ?></h4></a>
			
				</div>
			</div>
				
			<?php endwhile; endif; ?>
			
			<?php if( have_rows('tema_cuatro', 'options') ): while( have_rows('tema_cuatro', 'options') ): the_row();  ?>
									
			<div class="col-sm-6 col-md-6 col-lg-3 mt-3 mb-3">
				<div class="item-tema">
					
					<?php
						$attachment_id = get_sub_field('imagen');
						$size = 'post-thumbnail';
						$image = wp_get_attachment_image_src( $attachment_id, $size );
						$link = get_sub_field('link');
					?>
					
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $link['title']; ?>" class="img-fluid"></a>
					
					<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><h4 class="text-center"><?php echo $link['title']; ?></h4></a>
			
				</div>
			</div>
			
			<?php endwhile; endif; ?>
	
		
		</div>
	
	</div>  
</section>
<!-- /Temas de interés -->