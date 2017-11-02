	</main>
	<!-- ./main -->
	<?php if( is_front_page()): ?>
	<section id="section-testimony">
		<blockquote class="wrapper">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque voluptatum, quibusdam temporibus voluptas repudiandae hic maiores eligendi repellendus, accusamus nobis laboriosam</p>
		</blockquote>
	</section>
    <?php endif; ?>
	<!-- ./testimony -->

	<footer class="main-footer">
		<div class="wrapper">
			<div class="container">
				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
	
			</div>
			<!-- ./container -->

			<hr />
			
			<div class="copyrights container">
				<!-- ./copyrights -->
				<div class="col">&copy; 2016 Marble. All rights reserved. Theme by elemis.</div>
				<div class="col">
				<?php wp_nav_menu( array
					( 'theme_location' => 'footer_menu'
					) );
					?></div>
			</div>

		</div>
	</footer>
	<!-- ./main-footer -->
	<?php wp_footer(); ?>
	
</body>
</html>