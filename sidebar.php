<!-- Sidebar -->
<aside class="col-lg-4 aside-sidebar">
	
	<div class="widget js-sticky-widget">
		
		<div class="row-titulo">
			<h3 class="titulo-row">Temas de interés</h3>
			<div class="borde-hr"><hr></div>
		</div>
	
	
		<div class="swiper" id="sidebar-temas-interes">
			<div class="swiper-wrapper">
			
				<div class="swiper-slide">
					
					<?php if( have_rows('tema_uno', 'options') ): while( have_rows('tema_uno', 'options') ): the_row();  ?>
								
						
						<div class="item-tema">
							
							<?php
								$attachment_id = get_sub_field('imagen');
								$size = 'prensa';
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$link = get_sub_field('link');
							?>
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $link['title']; ?>" class="img-fluid"></a>
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><h4 class="text-center"><?php echo $link['title']; ?></h4></a>
					
						</div>
					
					<?php endwhile; endif; ?>
					
				</div>
				
				<div class="swiper-slide">
					
					<?php if( have_rows('tema_dos', 'options') ): while( have_rows('tema_dos', 'options') ): the_row();  ?>

						<div class="item-tema">
							
							<?php
								$attachment_id = get_sub_field('imagen');
								$size = 'prensa';
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$link = get_sub_field('link');
							?>
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $link['title']; ?>" class="img-fluid"></a>
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><h4 class="text-center"><?php echo $link['title']; ?></h4></a>
					
						</div>
					
					<?php endwhile; endif; ?>
					
				</div>
				
				<div class="swiper-slide">
											
					<?php if( have_rows('tema_tres', 'options') ): while( have_rows('tema_tres', 'options') ): the_row();  ?>

						<div class="item-tema">
							
							<?php
								$attachment_id = get_sub_field('imagen');
								$size = 'prensa';
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$link = get_sub_field('link');
							?>
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $link['title']; ?>" class="img-fluid"></a>
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><h4 class="text-center"><?php echo $link['title']; ?></h4></a>
					
						</div>
					
					<?php endwhile; endif; ?>
					
				</div>
				
				<div class="swiper-slide">
											
					<?php if( have_rows('tema_cuatro', 'options') ): while( have_rows('tema_cuatro', 'options') ): the_row();  ?>

						<div class="item-tema">
							
							<?php
								$attachment_id = get_sub_field('imagen');
								$size = 'prensa';
								$image = wp_get_attachment_image_src( $attachment_id, $size );
								$link = get_sub_field('link');
							?>
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $link['title']; ?>" class="img-fluid"></a>
							
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ? $link['target'] : '_self'; ?>"><h4 class="text-center"><?php echo $link['title']; ?></h4></a>
					
						</div>
					
					<?php endwhile; endif; ?>
					
				</div>

			</div>
			<div class="swiper-pagination"></div>
		</div>
		
		<?php
					
			$argsboletin = array(
									
				'post_type' 		=> 'post',
				'posts_per_page'	=> 4,
				'meta_query' 		=> array('key' => '_thumbnail_id')
			);
			
			$boletin = new WP_Query( $argsboletin );
			
			if ( $boletin->have_posts() ) {
			
		?>
		
		<div class="row-titulo">
			<h3 class="titulo-row">Boletines de Prensa</h3>
			<div class="borde-hr"><hr></div>
		</div>
		
		<div id="sidebar-boletin-prensa">
			
			<?php 
				while ( $boletin->have_posts() ) { $boletin->the_post();
			?>
		
			<div class="item-boletin">
				<div class="card">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail', array( 'alt' => get_the_title(), 'class' => 'img-boletin' ) ); ?></a>
					<div class="card-body p-0">
						<h5 class="card-date"><?php echo get_the_date(); ?></h5>
						<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
					</div>
				</div>
			</div>
			
			<?php } ?>
			
			<a class="btn btn-md w-100 text-white bg-primario fw-light" href="<?php bloginfo('url') ?>/prensa"> Ir a la Sala de Prensa </a>
		</div>
		
		<?php } else { } wp_reset_postdata(); ?>
	
	</div>
	
</aside>
<!-- /Sidebar -->