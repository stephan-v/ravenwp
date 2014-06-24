<?php

get_header();

/** This if statement determines wich single-filename.php file to use depending on the category **/

if( in_category( 'portfolio' ) ) {
  get_template_part( 'single', 'portfolio' );
} else {
  get_template_part( 'single', 'blog' );
}

get_footer();