				<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>

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