<?php
/**
 * Template Name: Homepage Classic & Bloacks
 * Template Post Type: page
 */
get-header();
if(have_posts()) : while (have_posts()) : the_post();
  the_content();
endwhile; else;
?>
<p> Sorry, no content found </p>
<?php
endif;
get_footer();
?>