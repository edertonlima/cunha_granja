<?php get_header(); ?>

<!-- slide -->
<section class="box-content box-slide">

		<div class="slide">
			<div class="carousel slide" data-ride="carousel" data-interval="5000" id="slide">

				<div class="carousel-inner" role="listbox">

					<?php
						$slide = 0;
						while ( have_rows('slide',$id_slide) ) : the_row();

							if(get_sub_field('imagem')){
								$slide = $slide+1; ?>

								<div class="item <?php if($slide == 1){ echo 'active'; } ?>" style="background-image: url('<?php the_sub_field('imagem'); ?>');">
									<div class="mask-slide">
										<div class="container">
											<div class="container-slide">
											
												<h2><?php the_sub_field('titulo'); ?></h2>
												<p><?php the_sub_field('texto'); ?></p>
												<?php if(get_sub_field('url')){ ?>
													<a class="btn btn-slide" href="<?php the_sub_field('url'); ?>">

														<?php if(get_sub_field('titulo_url')){ 
															the_sub_field('titulo_url');
														}else{
															echo 'saiba mais';
														} ?>
															
													</a>
												<?php } ?>

													<?php /*<a class="btn btn-slide" href="#">

														saiba mais
															
													</a> */ ?>

											</div>
										</div>
									</div>
								</div>

							<?php }

						endwhile;
					?>

				</div>

				<ol class="carousel-indicators">
					
					<?php for($i=0; $i<$slide; $i++){ ?>
						<li data-target="#slide" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0){ echo 'active'; } ?>"></li>
					<?php } ?>
					
				</ol>

			</div>
		</div>

</section>

<section class="box-content bege-claro">
	<div class="container">

		<div class="row">

			<?php if( have_rows('icone_home') ): ?>
				
				<?php while ( have_rows('icone_home') ) : the_row(); ?>

					<div class="col-3 item-ico-home">
						<?php the_sub_field('icone'); ?>
						<p class="subtitulo"><?php the_sub_field('titulo'); ?></p>
						<p><?php the_sub_field('texto'); ?></p>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>

	</div>
</section>

<section class="box-content">
	<div class="container">

		<div class="row">
			<div class="col-6">
				<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id(get_page_by_path('quem-somos')->ID), '' ); ?>

				<?php if($imagem[0]){ ?>					
					<img src="<?php echo $imagem[0]; ?>">
				<?php } ?>	
			</div>
			<div class="col-6 home-quem-somos">
				<p class="subtitulo"><?php the_field('subtitulo',get_page_by_path('quem-somos')->ID); ?></p>
				<p><?php echo get_page_by_path('quem-somos')->post_excerpt; ?></p>
				<a href="<?php echo get_home_url(); ?>/quem-somos" class="btn btn-saiba-mais">Saiba mais</a>
			</div>
		</div>

	</div>
</section>

<section class="box-content bege">
	<div class="container">

		<h2 class="center">Nossos Produtos</h2>
		<?php /*<p class="center mini">Conheça os nosso ovos</p> */?>

		<div class="produtos row">

			<?php query_posts(
				array(
					'post_type' => 'produtos',
					'posts_per_page' => 3
				)
			); 

			while ( have_posts() ) : the_post(); 
				$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

				<div class="col-4">
					<div class="prod-list">
						<?php if($imagem[0]){ ?>
							<img src="<?php echo $imagem[0]; ?>">
						<?php } ?>
						
						<h3 class="center"><?php the_title(); ?></h3>
						<p class="center"><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>" class="btn btn-produto">Saiba mais</a>
						<div class="mask"></div>
					</div>
				</div>

			<?php endwhile;
			wp_reset_query(); ?>

		</div>

	</div>
</section>

<section class="box-content row-img-cover">
	<div class="container">
		<h2 class="center">Ovo e Saúde</h2>
		<p class="center mini">O ovo é uma fonte de proteína animal. Foi considerado alimento referência, comparável ao leite materno.</p>
	

		<div class="slide">
			<div class="carousel slide" data-ride="carousel" data-interval="500000" id="slide2">

				<ol class="carousel-indicators">

					<?php if( have_rows('conteudo_ovo_saude') ): 
						$qtd_cont = 0; ?>						
						<?php while ( have_rows('conteudo_ovo_saude') ) : the_row(); ?>

							<li data-target="#slide2" data-slide-to="<?php echo $qtd_cont; ?>" class="btn btn-slide <?php if($qtd_cont == 0){ echo 'active'; } ?>"><?php the_sub_field('titulo'); ?></li>	

							<?php $qtd_cont = $qtd_cont+1;
						endwhile; ?>
					<?php endif; ?>
		
				</ol>

				<div class="carousel-inner" role="listbox">

					<?php if( have_rows('conteudo_ovo_saude') ): 
						$qtd_cont = 0; ?>						
						<?php while ( have_rows('conteudo_ovo_saude') ) : the_row(); ?>

							<div class="item <?php if($qtd_cont == 0){ echo 'active'; } ?> row">
								<div class="col-6 img-cover" style="background-image: url('<?php the_sub_field('imagem'); ?>');"></div>
								<div class="col-6">
									<div class="middle">
										<h3><?php the_sub_field('titulo'); ?></h3>
										<p class="txt-slide-home"><?php the_sub_field('texto'); ?></p>
									</div>
								</div>
							</div>

							<?php $qtd_cont = $qtd_cont+1;
						endwhile; ?>
					<?php endif; ?>


				</div>

			</div>
		</div>

	</div>
</section>

<section class="box-content">
	<div class="container">

		<h2 class="center">Dicas e Receitas</h2>
		<?php /*<p class="center mini">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque. Sed risus tortor, porttitor non nunc eget, finibus vulputate nibh.</p>*/ ?>

		<div class="row">

				<?php query_posts(
					array(
						'post_type' => 'post',
						'posts_per_page' => 2
					)
				); ?>


				<?php while ( have_posts() ) : the_post(); 
					$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

					<div class="col-6 list-blog">
						
						<?php if($imagem[0]){ ?>
							<div class="img-blog">
								<img src="<?php echo $imagem[0]; ?>">
							</div>
						<?php } ?>

						<h3 class="center"><?php the_title(); ?></h3>
						<p class="center mini"><?php the_excerpt(); ?></p>

						<a href="<?php the_permalink(); ?>" title="Saiba mais" class="btn btn-produto">Saiba mais</a>

					</div>

				<?php endwhile;
				wp_reset_query(); ?>

		</div>

	</div>
</section>

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery('.owl-carousel.startups').owlCarousel({
		loop: false,
		center: false,
		nav: false,
		margin: 20,
		responsive: {
			500: {
				items: 1
			},
			768: {
				items: 3
			}
		}
	});
</script>


