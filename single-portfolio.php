<div class="row portfolio-header">
	<div class="container">
		<?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>
	</div>
</div>

<div class="row">
	<div class="container">
		<div class="question">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, dolores, laudantium, qui odit inventore sit adipisci a architecto reiciendis necessitatibus ut aliquam ab. Explicabo consequatur accusamus incidunt ea nihil ipsa.</p>
		</div>
	</div>
</div>

<div class="row">
	<div class="container content">
		<div class="column-12">
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

