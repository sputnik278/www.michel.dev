<?php get_header(); ?>
<!-- .......................................................... ............... -->
		<section id="main-content" class="wrapper">
			<div class="container">
				<div class="col">
					<h1>page-10.php/contact</h1>
					<!-- la boucle-->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ): the_post(); ?>  
							<a href="<?php the_permalink(); ?>">
							<h2 class="entry_title">
								<?php the_title(); ?>
							</h2></a>

							<div class="entry-content">
								<?php the_content(); ?>
							</div>
							<?php endwhile; ?>
						<!-- fin de la boucle-->
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1295.5343022397765!2d5.948928141578051!3d49.502098442928855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479535034c0a600b%3A0xe8b8bed0e26f33a!2sTechnoport+S.a.!5e0!3m2!1sde!2slu!4v1509699112376" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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