<?php get_header(); ?>
<!-- .......................................................... ............... -->
		<section id="main-content" class="wrapper">
			<div class="container">
				<div class="col">
					<h1>index.php</h1>
					<!-- la boucle-->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ): the_post(); ?>  
							<a href="<?php the_permalink(); ?>">
							<h2 class="entry_title">
								<?php the_title(); ?>
							</h2></a>
							<p class="post-info">
								<!--affiche l'auteur et la date de publication-->
								Posté le <?php echo get_the_date(); ?> dans <?php the_category(', ') ?>
								par <?php the_author(); ?>
								<!--affiche le contenue de l'article-->
							<div class="entry-content">
								<?php if (!is_singular() ) : ?>
								<?php the_excerpt(); ?>
							<?php else : ?>
								<?php the_content(); ?>
							<?php endif; ?>
							</div>
							<?php endwhile; ?>
						<!-- fin de la boucle-->

						<!-- S'il n'y rein à afficher-->
					<?php else : ?>
						<p class="nothing">
						Aucun contenue à afficher
						</p>
					<?php endif; ?>
				</div>
			</div>
		</section>
<!-- ........................................................................... -->
<?php get_footer(); ?>