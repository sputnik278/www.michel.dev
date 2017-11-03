<?php get_header(); ?>

		<section id="section-icons" class="wrapper">
			<div class="container">
				<div class="col">
					<i class="icon lamp"></i>
					<h4>Pellentesque</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quasi facere, animi maxime natus cupiditate</p>
				</div>
				<!-- ./col1 -->
				<div class="col">
					<i class="icon clock"></i>
					<h4>Consectetur</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quasi facere, animi maxime natus cupiditate</p>
				</div>
				<!-- ./col2 -->
				<div class="col">
					<i class="icon flask"></i>
					<h4>Tristiquet</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quasi facere, animi maxime natus cupiditate</p>
				</div>
				<!-- ./col3 -->
				<div class="col">
					<i class="icon ticket"></i>
					<h4>Fermentum</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, quasi facere, animi maxime natus cupiditate</p>
				</div>
				<!-- ./col4 -->
			</div>

			<hr />

		</section>
		

		<!-- requête à ma base de donnée avec la fonction WP_Query() -->
		<?php 
		$args = array(
			'post_type'		 => 'post',
			'posts_per_page' => 3
		);
		// the query
		$the_query = new WP_Query( $args ); ?>
		 
		<!-- si j'ai des résultats -->
		<?php if ( $the_query->have_posts() ) : ?>
			
			<section id="section-latest-work" class="wrapper">
				
				<h3>Our latest works</h3>
				
				<div class="container">
					<!-- boucle personnalisée -->
					<?php while ( $the_query->have_posts() ) : 
						$the_query->the_post(); ?>
						<article class="col">
							<?php if(has_post_thumbnail()) : ?>
								<?php the_post_thumbnail( 'home-thumbnail'); ?><!-- 380x270 -->
							<?php else: ?>
								<img src="<?= get_template_directory_uri(); ?>/img/image1.jpg" alt="Business Card">
							<?php endif; ?>
							<h4><?php the_title(); ?></h4>
							<!-- <h5><?php /*the_category(', ');*/ ?></h5> -->
							<p><?php the_excerpt(); ?></p>
						</article>

					<!-- fin de boucle -->
					<?php endwhile; ?>
				</div>
			</section>

		<!-- fin de si j'ai des résultats -->
		<?php endif; ?>

		<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>