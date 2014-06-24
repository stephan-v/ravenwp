<?php
/*
	Template Name: Contact
*/
?>

<?php get_header(); ?>

	<div class="container content">
		<div class="row">
			<div class="column-9 contact">
				<div class="row">
					<h1>Contact</h1>
					<p>Interesse in een geweldig website of prachtige grafische vormgeving? Neem contact op voor een afspraak zodat we samen uw wensen kunnen bespreken.</p>
					<?php echo do_shortcode('[contact-form-7 id="55" title="Contact form 1"]'); ?>
				</div><!-- end row -->
			</div><!-- end column-9 -->
			<?php get_sidebar('contact'); ?>
		</div><!-- end row -->
	</div><!-- end container -->
<?php get_footer(); ?>