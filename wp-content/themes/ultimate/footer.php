<footer class="footer">
	<div class="container">

		<div class="row">
			<div class="col-6">

				<div class="info-header info-contato">
					<div class="item-info-header fale-conosco">
						<i class="fa  fa-headphones"></i>
						<span class="title">Atendimento</span>
						<span class="subtitle"><?php the_field('telefone', 'option'); ?></span>
					</div>

					<div class="item-info-header">
						<i class="fa  fa-envelope-o"></i>
						<span class="title">Escreva-nos</span>
						<span class="subtitle"><?php the_field('email', 'option'); ?></span>
					</div>

					<div class="item-info-header escreva">
						<i class="fa fa-map-marker"></i>
						<span class="title">Endereço</span>
						<span class="subtitle"><?php the_field('endereco', 'option'); ?></span>
					</div>
				</div>

			</div>

			<div class="col-3 categorias-produtos">

				<a href="<?php echo get_home_url(); ?>" class="link-footer"><i class="icons fa fa-chevron-right"></i>Home</a>
				<a href="<?php echo get_home_url(); ?>/quem-somos" class="link-footer"><i class="icons fa fa-chevron-right"></i>Quem Somos</a>
				<?php
					$my_wp_query = new WP_Query();
					$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));
					$paginas = get_page_children( get_page_by_path('quem-somos')->ID, $all_wp_pages );

					if(count($paginas)){
						foreach ($paginas as $key => $pagina) { ?>

							<a href="<?php echo get_permalink($pagina->ID); ?>" class="link-footer" title="<?php echo $pagina->post_title; ?>">
								<i class="icons fa fa-chevron-right"></i><?php echo $pagina->post_title; ?>
							</a>

						<?php }
					}
				?>
				<a href="<?php echo get_home_url(); ?>/produtos" class="link-footer"><i class="icons fa fa-chevron-right"></i>Produtos</a>
				<a href="<?php echo get_home_url(); ?>" class="link-footer"><i class="icons fa fa-chevron-right"></i>Cadastro</a>
				<a href="<?php echo get_home_url(); ?>" class="link-footer"><i class="icons fa fa-chevron-right"></i>Dicas e Receitas</a>
				<a href="<?php echo get_home_url(); ?>/trabalhe-conosco" class="link-footer"><i class="icons fa fa-chevron-right"></i>Trabalhe Conosco</a>
				<a href="<?php echo get_home_url(); ?>/fale-conosco" class="link-footer"><i class="icons fa fa-chevron-right"></i>Fale Conosco</a>
			</div>

			<?php if( have_rows('redes_sociais','option') ): ?>
				<div class="col-3 categorias-produtos">
					<h3>SIGA-NOS</h3>
					<div class="redes">

						<?php while ( have_rows('redes_sociais','option') ) : the_row(); ?>

							<a href="<?php the_sub_field('url'); ?>" title="<?php the_sub_field('nome'); ?>"><?php the_sub_field('icone'); ?></a>

						<?php endwhile; ?>

					</div>
				</div>
			<?php endif; ?>
			
		</div>
	</div>
	
	<div class="copy">
		<div class="container">
			<p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y').' '; the_field('titulo', 'option'); ?> - Todos os direitos reservados.</p>
		</div>
	</div>
</footer>