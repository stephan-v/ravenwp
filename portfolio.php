<?php 
/*
	Template Name: Portfolio
*/
?>

<?php get_header(); ?>

	<?php 
		// Query all posts in the category 'portfolio' and count the number of posts from this category.
		$posts = query_posts( array('category_name' => 'portfolio') ); 
		$count = count($posts);
	?>

	<div class="hero-unit work">
		<div class="vert-text slogan animated bounceInDown">
			<h1>Onze <strong>laatste projecten</strong></h1>
		</div><!-- end .vert-text -->
	</div><!-- end .photo-wrapper -->

	<div class="container content portfolio animated bounceInUp">
		<!-- Custom wordpress loop for 3 column portfolio layout. -->		
		<?php $i = 0; ?>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				
				<?php if ($i == 0) :  ?>
					<div class="row">
				<?php elseif ($i % 3 == 0) :  ?>
					</div><!-- end portfolio row -->
					<div class="row">
				<?php endif; ?>
				
				<div class="column-4">
					<article class="article">
						<a href="<?php the_permalink(); ?>" class="image-holder">
							<?php the_post_thumbnail(); ?>
						</a>

						<a href="<?php the_permalink(); ?>">
							<h1><?php the_title(); ?></h1>
						</a>

						<div class="description">							
							<p>
								<?php echo wp_trim_words( get_the_content(), 10 ); ?>
							</p>
						</div><!-- end .description -->
					</article>
				</div><!-- end column-4 -->

				<?php $i++; ?>

				<?php if($i == $count) : ?>
					</div><!-- end last portfolio row -->
				<?php endif; ?>

			<?php endwhile; ?>
		<?php endif; ?>
	</div><!-- end container -->
<?php get_footer(); ?>