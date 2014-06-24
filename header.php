<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,300italic,300,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>

	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'>

	<link href="<?php bloginfo('stylesheet_url'); ?>" media="screen, projection" rel="stylesheet" type="text/css" />
	<?php wp_head(); ?> 
</head>
<body>

	<!-- main navigation **this is not displayed when a single blog post is shown** -->
	<div class="row header-navigation">
		<div class="container">
			<header>
				<div class="logo hide-text">
					<a href="<?php echo home_url(); ?>">home</a>
				</div>			
				<nav>
					<?php wp_nav_menu( array('container_class' => 'navigation') ); ?>
				</nav>
			</header><!-- end header -->
		</div><!-- end .container -->
	</div><!-- end row .header-navigation -->