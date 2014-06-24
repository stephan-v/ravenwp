<?php 
/*
	Template Name: Home
*/
?>

<?php get_header(); ?>

	<div class="hero-unit index">
		<div class="vert-text slogan animated bounceInDown">
			<h1>Wij ontwerpen <strong>professionele websites</strong> en <strong>identiteiten</strong></h1>
			<p>Elegante en unieke oplossing om van te genieten</p>
		</div><!-- end .vert-text -->
	</div><!-- end .photo-wrapper -->

	<div class="container">	
		<section class="categories animated bounceInUp">		
			<div class="row">
				<div class="column-4">
					<img src="<?php bloginfo('template_directory'); ?>/images/responsive.jpg" alt="Responsive Webdesign">
					<div class="description">
						<h1>Webdesign</h1>
						<p>Smartphone, tablet of desktop pc, uw website zal zich moeiteloos aanpassen voor een geweldige ervaring op elk platform.</p>
					</div>
				</div><!-- end .column-4 -->

				<div class="column-4">
					<img src="<?php bloginfo('template_directory'); ?>/images/branding.jpg" alt="Logo design merken schets">
					<div class="description">
						<h1>Grafische Vormgeving</h1>
						<p>Een logo, illustratie of zelfs een complete huisstijl nodig? Wij leveren het snel en gereed voor het web of de drukkerij.</p>
					</div>
				</div><!-- end .column-4 -->

				<div class="column-4">
					<img src="<?php bloginfo('template_directory'); ?>/images/marketing.jpg" alt="Marketing optimalisatie en social media strategie">
					<div class="description">
						<h1>Marketing</h1>
						<p>Door zoekmachine optimalisatie en de juiste social media strategie kunt u optimaal gebruik maken van uw website.</p>
					</div>
				</div><!-- end .column-4 -->

			</div><!-- end row -->
		</section><!-- end .categories -->

		<div class="row clients">
			<div class="column-2">
				<img src="<?php bloginfo('template_url'); ?>/images/matrassenhemel.png" alt="">
			</div>

			<div class="column-2">
				<img src="<?php bloginfo('template_url'); ?>/images/inzetrooster.png" alt="">
			</div>

			<div class="column-2">
				<img src="<?php bloginfo('template_url'); ?>/images/cicoshop.png" alt="">
			</div>

			<div class="column-2">
				<img src="<?php bloginfo('template_url'); ?>/images/adlglas.png" alt="">
			</div>

			<div class="column-2">
				<img src="<?php bloginfo('template_url'); ?>/images/pepermolen.png" alt="">
			</div>

			<div class="column-2">
				<img src="<?php bloginfo('template_url'); ?>/images/rcshop.png" alt="">
			</div>
		</div>


	</div><!-- end container -->

<?php get_footer(); ?>