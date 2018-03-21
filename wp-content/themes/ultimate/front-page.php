<?php get_header(); ?>

<!-- slide -->
<section class="box-content box-slide">

		<div class="slide">
			<div class="carousel slide" data-ride="carousel" data-interval="60000" id="slide">

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

													<a class="btn btn-slide" href="#">

														saiba mais
															
													</a>

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
			<div class="col-3 item-ico-home">
				<i class="icons fa fa-leaf"></i>
				<p class="subtitulo">Produção</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec.</p>
			</div>

			<div class="col-3 item-ico-home">
				<i class="icons fa fa-check"></i>
				<p class="subtitulo">Seleção</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec.</p>
			</div>

			<div class="col-3 item-ico-home">
				<i class="icons fa fa-truck"></i>
				<p class="subtitulo">Coleta</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec.</p>
			</div>

			<div class="col-3 item-ico-home">
				<i class="icons fa fa-tags"></i>
				<p class="subtitulo">Vendas</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec.</p>
			</div>
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
			<div class="col-6" style="padding-left: 50px;">
				<p class="subtitulo" style="margin-top: 80px;"><?php the_field('subtitulo',get_page_by_path('quem-somos')->ID); ?></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque. Sed risus tortor, porttitor non nunc eget, finibus vulputate nibh.</p>
				<a href="<?php echo get_home_url(); ?>/quem-somos" class="btn btn-saiba-mais">Saiba mais</a>
			</div>
		</div>

	</div>
</section>

<section class="box-content bege">
	<div class="container">

		<h2 class="center">Nossos Produtos</h2>
		<p class="center mini">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque. Sed risus tortor, porttitor non nunc eget, finibus vulputate nibh.</p>

		<div class="row">
			<div class="col-4">
				<div class="prod-list">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ovo_branco.jpg">
					<h3 class="center">Ovo Branco</h3>
					<p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque.</p>
					<a href="<?php echo get_home_url(); ?>" class="btn btn-produto">Saiba mais</a>
					<div class="mask"></div>
				</div>
			</div>

			<div class="col-4">
				<div class="prod-list">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ovo_caipira.jpg">
					<h3 class="center">Ovo Caipira</h3>
					<p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque.</p>
					<a href="<?php echo get_home_url(); ?>" class="btn btn-produto">Saiba mais</a>
					<div class="mask"></div>
				</div>
			</div>

			<div class="col-4">
				<div class="prod-list">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ovo_branco.jpg">
					<h3 class="center">Ovo Branco</h3>
					<p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque.</p>
					<a href="<?php echo get_home_url(); ?>" class="btn btn-produto">Saiba mais</a>
					<div class="mask"></div>
				</div>
			</div>
		</div>

	</div>
</section>

<section class="box-content azul-celeste row-img-cover">


		<div class="row">
			<div class="col-5 img-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/granja-frango.jpg');"></div>
			<div class="col-6">
				<div class="middle">
					<h2><?php the_field('subtitulo',get_page_by_path('quem-somos')->ID); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque. Sed risus tortor, porttitor non nunc eget, finibus vulputate nibh.</p>
					<a href="<?php echo get_home_url(); ?>/quem-somos" class="btn btn-saiba-mais">Saiba mais</a>
				</div>
			</div>
		</div>

	
</section>

<section class="box-content">
	<div class="container">

		<h2 class="center">Dicas e Receitas</h2>
		<p class="center mini">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque. Sed risus tortor, porttitor non nunc eget, finibus vulputate nibh.</p>

		<div class="row">
			<div class="col-6 list-blog">
				
				<div class="img-blog">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.jpg'); ?>">
				</div>

				<h3 class="center">Consectetur adipiscing elit nam et mauris</h3>
				<p class="center mini">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque. Sed risus tortor, porttitor non nunc eget, finibus vulputate nibh.</p>

				<a href="<?php echo get_home_url(); ?>" class="btn btn-produto">Saiba mais</a>

			</div>

			<div class="col-6 list-blog">
				
				<div class="img-blog">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.jpg'); ?>">
				</div>

				<h3 class="center">Consectetur adipiscing elit nam et mauris</h3>
				<p class="center mini">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et mauris condimentum, congue augue nec, congue neque. Sed risus tortor, porttitor non nunc eget, finibus vulputate nibh.</p>

				<a href="<?php echo get_home_url(); ?>" class="btn btn-produto">Saiba mais</a>

			</div>
		</div>

	</div>
</section>

<?php /*
<section class="box-content">
	<div class="container">

		<div class="row">
			<div class="col-8">
				<h2 class="tit-area"><?php the_field('subtitulo',get_page_by_path('empresa')->ID); ?></h2>

				<div class="row">

					<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id(get_page_by_path('empresa')->ID), 'medium' );
						if($imagem[0]){ ?>
							<img src="<?php echo $imagem[0]; ?>" class="img-page col-8">
						<?php }
					?>

					<div class="col-4">
						<img src="<?php the_field('logo_header', 'option'); ?>" alt="<?php the_field('titulo', 'option'); ?>" class="img-home-sobre" style="display: none;">
						<p></p>
						<p><?php echo get_the_excerpt(get_page_by_path('empresa')->ID); ?></p>
						<a href="<?php echo get_home_url(); ?>/empresa" title="Mais Notícias" class="mais-item">
							<i class="fa fa-caret-right" aria-hidden="true"></i> Saiba mais
						</a>
					</div>

				</div>
			</div>

			<div class="col-4 sidebar">

				<?php include 'sidebar-noticias.php'; ?>

			</div>
		</div>

	</div>
</section>

<section class="box-content no-padding-top">
	<div class="container">

		<div class="row">
			<div class="col-8">
				<h2 class="tit-area">NOSSOS PRODUTOS</h2>

				<div class="row">

					<div class="col-12">
						<p><?php the_field('resumo_produtos'); ?></p>

						<ul class="row categoria-prod-home">
							<?php
								$args = array(
								    'taxonomy'      => 'produtos_taxonomy',
								    'parent'        => 0,
								    'orderby'       => 'name',
								    'order'         => 'ASC',
								    'hierarchical'  => 1,
								    'pad_counts'    => true,
								    'hide_empty'    => 0
								);
								$categories = get_categories( $args );
								foreach ( $categories as $categoria ){ ?>

									<li class="col-4">
										<a href="<?php echo get_category_link($categoria->term_id); ?>" title="<?php echo $categoria->name; ?>">
											- <?php echo $categoria->name; ?>
										</a>
									</li>

									<?php
								}
							?>
						</ul>

						<a href="<?php echo get_home_url(); ?>/produtos" title="Mais Notícias" class="mais-item">
							<i class="fa fa-caret-right" aria-hidden="true"></i> Saiba mais
						</a>
					</div>

				</div>
			</div>

			<div class="col-4 sidebar">

				<?php include 'sidebar-projeto-ecoeter.php'; ?>

			</div>
		</div>

	</div>
</section>

<section class="box-content no-padding-top">
	<div class="container">

		<div class="row">

			<div class="col-8">
				<div class="col-6">					
					<?php include 'sidebar-central-vendas.php'; ?>
				</div>

				<div class="col-6">					
					<?php include 'sidebar-trabalhe-conosco.php'; ?>
				</div>

				<div class="col-12">
					<?php include 'sidebar-cartao-bndes.php'; ?>
				</div>
			</div>

			<div class="col-4 sidebar">

				<?php include 'sidebar-responsabilidade-social.php'; ?>

			</div>
		</div>

	</div>
</section>

<section class="box-content no-padding-top">
	<div class="container">

		<div class="row">
			<div class="col-8">
				
				

			</div>

		</div>

	</div>
</section>

<?php /*
<section class="box-content box-comofunciona" id="goScrollOn">
	<div class="container">

		<h2>Como Funciona</h2>
		<h3>Somos Venture Builders</h3>

		<div class="row">
			<div class="col-4 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-1.png">
				<h4>Recrutamento Founders</h4>
				<p>Buscamos pessoas com o espírito empreendedor, motivados a gerar impacto através da tecnologia, resolvendo problemas reais.</p>
			</div>

			<div class="col-4 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-2.png">
				<h4>Formamos um Time</h4>
				<p>Juntos co-criamos, formamos um time, prototipamos soluções, validamos modelos de negócios escaláveis.</p>
			</div>

			<div class="col-4 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-3.png">
				<h4>Investimos para Crescer</h4>
				<p>Investimos no negócio para desenvolver produtos incríveis e trilhar o caminho do crescimento.</p>
			</div>
		</div>

	</div>
</section>

<section class="box-content box-comofunciona cinza">
	<div class="container">

		<div class="row">
			<div class="col-10 metodologia">
				<h2>Também investimos em Construtechs</h2>
				<h4>Procuramos Startups que estejam desenvolvendo soluções para a cadeia da construção e mercado imobiliário. O que avaliamos?</h4>
			</div>
		</div>

	</div>
</section>

<section class="box-content no-padding-top box-comofunciona">
	<div class="container">

		<div class="row">
			<div class="col-4 mar-left-1 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-1.png">
				<h4>Recrutamento Founders</h4>
				<p>Buscamos pessoas com o espírito empreendedor, motivados a gerar impacto através da tecnologia, resolvendo problemas reais.</p>
			</div>

			<div class="col-4 mar-left-2 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-2.png">
				<h4>Formamos um Time</h4>
				<p>Juntos co-criamos, formamos um time, prototipamos soluções, validamos modelos de negócios escaláveis.</p>
			</div>

			<div class="col-4 mar-left-1 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-1.png">
				<h4>Recrutamento Founders</h4>
				<p>Buscamos pessoas com o espírito empreendedor, motivados a gerar impacto através da tecnologia, resolvendo problemas reais.</p>
			</div>

			<div class="col-4 mar-left-2 ico-comofunciona">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/como-funciona/ico-2.png">
				<h4>Formamos um Time</h4>
				<p>Juntos co-criamos, formamos um time, prototipamos soluções, validamos modelos de negócios escaláveis.</p>
			</div>
		</div>

	</div>	
</section>

<section class="box-content">
	<div class="container">

		<h2>Construtechs</h2>
		<h3><?php the_field('subtitulo',79); ?></h3>

		<?php if( have_rows('portfolio',79) ): ?>
			
			<div class="owl-carousel owl-theme startups">
				<?php while ( have_rows('portfolio',79) ) : the_row(); ?>
					<a href="<?php the_sub_field('link',79); ?>" target="_blank" title="<?php the_sub_field('titulo',79); ?>" class="item">
						<img src="<?php the_sub_field('imagem',79); ?>" alt="<?php the_sub_field('titulo',79); ?>">
					</a>
				<?php endwhile; ?>
			</div>		

		<?php endif; ?>

	</div>	
</section>

<?php get_template_part( 'content-contato', 'page' ); ?>

<section class="box-content">
	<div class="container">

		<h2>Construtechs</h2>
		<h3>na mídia</h3>

		<?php query_posts(
			array(
				'post_type' => 'na-midia',
				'posts_per_page' => 12
			)
		); ?>

		<div class="owl-carousel owl-theme na-midia">
			<?php while ( have_posts() ) : the_post(); 
				$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="item">
					<img src="<?php echo $imagem[0]; ?>" alt="<?php the_title(); ?>">
				</a>

			<?php endwhile;
			wp_reset_query(); ?>
		</div>

	</div>	
</section>

<?php */ get_footer(); ?>

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


