<?php get_header(); ?>

	<?php if (has_post_thumbnail() ) : ?> 
		<?php get_template_part('pageheader'); ?>
	<?php endif; ?>

	<div class="container content">
		<div class="row">
			<div class="column-9">
				<h1><?php the_title(); ?></h1>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div><!-- end row -->
	</div><!-- end container -->

<?php get_footer(); ?>