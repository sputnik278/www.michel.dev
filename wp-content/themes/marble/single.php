<?php get_header(); ?>
<!-- .......................................................... ............... -->
		<section id="main-content" class="wrapper">
			<div class="container">
				<div class="col">
					<h1>single.php</h1>
					<!-- la boucle-->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ): the_post(); ?>  

							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'signle-thumbnails' ); ?>
							<?php endif; ?>
							<a href="<?php the_permalink(); ?>">
							<h2 class="entry_title">
								<?php the_title(); ?>
							</h2></a>

							<p class="post-metas">
								<!--affiche l'auteur et la date de publication-->
								Posté le <?php echo get_the_date(); ?> dans <?php the_category(', ') ?>
								par <?php the_author(); ?>

							<div class="entry-content">
								<?php the_content(); ?>
								<p><?php echo get_post_meta ( get_the_ID (), true ); ?></p>
							</div>

							<?php endwhile; ?>
						<!-- fin de la boucle-->
						
						<!-- S'il n'y rein à afficher-->
					<?php else : ?>
						<p class="nothing">
						Aucun contenue à afficher
						</p>
					<?php endif; ?>
					<!-- fin -->
					
				</div>
				<div class="col" style="max-width: 400px">
					<?php dynamic_sidebar( 'right-sidebar' ); ?>
				</div>
			</div>
		</section>
<!-- ........................................................................... -->
<?php get_footer(); ?>