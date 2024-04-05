<?php
/**
 * Template Name: Second Post Template
 * Template Post Type: post
 */
get_header();
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
<section class="post-masthead" style="background: url('<?php echo $backgroundImg[0]; ?>');">
  <div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>
<section class="row">
  <div class="col-sm-12 col-md-8 col-lg-8">
    <?php echo get_the_content(); ?>
    <p>By: <?php the_author(); ?></p>
    <p>Date: <?php echo get_the_date(); ?></p>
    <p><?php the_tags(); ?></p>
    <p><?php echo the_category(',', '', get_the_ID()) ?></p>
  </div>
  <div class="post-list col-sm-12 col-md-4 col-lg-4">
    <?php
      // Define our WP Query Parameters
      $the_query = new WP_Query( 'posts_per_page=5' );
      // Start our WP Query
      while ($the_query -> have_posts()) : $the_query -> the_post();
    ?>
    <article>
      <a href="<?php the_permalink() ?>">
        <img src="<?php echo $backgroundImg[0]; ?>" alt="post image">
      </a>
      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      <?php the_excerpt(__('(more…)')); ?>
    </article>
      <?php
        endwhile;
        wp_reset_postdata();
      ?>
  </div>
</section>
<?php get_footer(); ?>
