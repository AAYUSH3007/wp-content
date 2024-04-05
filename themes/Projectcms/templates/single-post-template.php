<?php
/**
 * Template Name: Single Post Template
 * Template Post Type: post
 */
get_header();

// Get the URL of the featured image
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
<!-- Display the masthead section with the featured image as background -->
<section class="post-masthead" style="background: url('<?php echo $backgroundImg[0]; ?>');">
  <div>
    <!-- Display the post title -->
    <h1><?php the_title(); ?></h1>
  </div>
</section>
<!-- Display the main content section -->
<section class="row">
  <!-- Display the main content in a large column -->
  <div class="col-sm-12 col-md-8 col-lg-7">
    <?php echo get_the_content(); ?>
    <!-- Display the post author -->
    <p>By: <?php the_author(); ?></p>
    <!-- Display the post date -->
    <p>Date: <?php echo get_the_date(); ?></p>
    <!-- Display the post tags -->
    <p><?php the_tags(); ?></p>
    <!-- Display the post category -->
    <p><?php echo the_category(',', '', get_the_ID()) ?></p>
  </div>
  <!-- Display a list of related posts in a smaller column -->
  <div class="post-list col-sm-12 col-md-4 col-lg-4">
    <?php
      // Define our WP Query Parameters to fetch related posts
      $the_query = new WP_Query( 'posts_per_page=5' );
      // Start our WP Query loop
      while ($the_query -> have_posts()) : $the_query -> the_post();
    ?>
    <!-- Display each related post -->
    <article>
      <a href="<?php the_permalink() ?>">
        <!-- Display the related post title -->
        <?php the_title(); ?>
      </a>
    </article>
      <?php
        endwhile;
        // Reset post data to restore the original query
        wp_reset_postdata();
      ?>
  </div>
</section>

<!-- Secondary loop to display additional posts -->
<section class="row">
  <div class="col-12">
    <h2>More Posts</h2>
    <?php
      $more_posts_query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'post__not_in' => array( get_the_ID() ) 
      ) );

      if ( $more_posts_query->have_posts() ) :
        while ( $more_posts_query->have_posts() ) : $more_posts_query->the_post();
    ?>
    <!-- Display each additional post -->
    <article>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </article>
    <?php
        endwhile;
        wp_reset_postdata(); 
      else :
        echo 'No more posts found.';
      endif;
    ?>
  </div>
</section>

<?php get_footer(); ?>
