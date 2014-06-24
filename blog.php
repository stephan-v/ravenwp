<?php 
/*
	Template Name: Blog
*/
?>

<?php get_header(); ?>

	<?php query_posts( 'category_name=Blog' ); ?>

	<div class="hero-unit blog">
		<div class="vert-text slogan animated bounceInDown">
			<h1>Ons <strong>laatste nieuws</strong></h1>
		</div><!-- end .vert-text -->
	</div><!-- end .photo-wrapper -->

	<div class="row ">
		<div class="container content animated bounceInUp">
			<!-- Custom wordpress loop for 3 column portfolio layout. -->		
			<?php $i = 0; ?>

			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					
					<?php if ($i == 0) :  ?>
						<div class="row blog">
					<?php elseif ($i % 3 == 0) :  ?>
						</div><!-- end portfolio row -->
						<div class="row blog">
					<?php endif; ?>
					
					<div class="column-4">
						<article class="article">

							<a href="<?php the_permalink(); ?>" class="image-holder">
								<?php the_post_thumbnail(); ?>
							</a>

							<div class="description">
								<div class="triangle"></div>

								<div class="date">
									<?php the_date('F Y'); ?>
								</div>

								<a href="<?php the_permalink(); ?>">
									<h1><?php the_title(); ?></h1>
								</a>	
								<a href="<?php the_permalink(); ?>">
									<h2>Lees meer</h2>
								</a>
							</div><!-- end .description -->

						</article>
					</div><!-- end column-4 -->

					<?php $i++; ?>

					<?php if($i == $count) : ?>
						</div><!-- end last portfolio row -->
					<?php endif; ?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- end .container -->
	</div><!-- end .row -->

<?php get_footer(); ?>