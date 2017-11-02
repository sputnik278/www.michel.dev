<?php get_header(); ?>
<!-- .......................................................... ............... -->
		<section id="main-content" class="wrapper">
			<div class="container">
				<div class="col">
					<!-- la boucle-->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>  
							<a href="<?php the_permalink(); ?>">
							<h2 class="entry_-itle">
								<?php the_title(); ?>
							</h2></a>
							<div class="entry-content">
								<?php the_content(); ?>
								
						<?php endwhile; ?>
						<!-- fin de la boucle-->

						<!-- S'il n'y rein à afficher-->
					<?php else: ?>
						<p>Aucun contenue à afficher </p>
					<?php endif; ?>
				</div>
			</div>
		</section>
<!-- ........................................................................... -->
<?php get_footer(); ?>