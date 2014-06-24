<?php $background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>

	<div class="thumbnail-cover"></div>
	<div class="blog-thumbnail" style="background: url('<?php echo $background[0]; ?>'); background-size: cover;">
		<div class="vert-text slogan">									
			<h1><?php the_title(); ?></h1>
		</div><!--end .slogan -->	
	</div><!-- end .blog-thumbnail -->		

	<div class="row blog-content">
		<div class="container">
			<article class="article">
				<div class="post">	
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>															
							<?php the_content(); ?>		
						<?php endwhile; ?>
					<?php endif; ?>							
				</div><!-- end .description -->						
			</article>
		</div><!-- end .container -->
	</div><!-- end row -->				