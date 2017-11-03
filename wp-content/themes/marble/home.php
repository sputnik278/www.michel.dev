<?php get_header(); ?>
<!-- .......................................................... ............... -->
		<section id="main-content" class="wrapper">
			<div class="container">
				<div class="col">
					<h1>home.php</h1>
					<!-- la boucle-->
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ): the_post(); ?>  
							<!--....................................................................-->
						<div class="post-item">
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="post-thumbnails">
								<?php the_post_thumbnail( 'list-tumbnail' ); ?>
								</div>
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
								<?php the_excerpt(); ?>
							</div>
						</div>
							<?php endwhile; ?>
						<!-- fin de la boucle-->
						<!--navigation-->
						<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
						<!-- S'il n'y rein à afficher-->
					<?php else : ?>
						<p class="nothing">
						Aucun contenue à afficher
						</p>
					<?php endif; ?>
					<!-- fin -->
					
				</div>
				<div id="sidebar-primary" class="col col-sidebar">
					<?php dynamic_sidebar( 'right-sidebar' ); ?>
				</div>
			</div>
		</section>
<!-- ........................................................................... -->
<?php get_footer(); ?>