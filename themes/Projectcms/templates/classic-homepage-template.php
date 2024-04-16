<?php
/**
 * Template Name: Flooring Company
 * Template Post Type: page
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Check if there are posts
        if (have_posts()) :
            // Loop through the posts
            while (have_posts()) : the_post();
                // Display the post content
                the_content();
            endwhile;
        else :
            // If no posts found, display a message
            ?>
            <p><?php esc_html_e('Nothing here?', 'text-domain'); ?></p>
        <?php
        endif;
        ?>

        <div class="posts-list">
            <?php
            // Query for carpet posts
            $carpet_args = array(
                'post_type' => 'post', 
                'posts_per_page' => 5, 
                'category_name' => 'carpet', 
            );
            $carpet_query = new WP_Query($carpet_args);

            // Check if there are carpet posts
            if ($carpet_query->have_posts()) :
                // Loop through carpet posts
                while ($carpet_query->have_posts()) : $carpet_query->the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div><!-- .entry-content -->

                        <footer class="entry-footer">
                            <?php the_tags('<span class="tag-links">Tags: ', ', ', '</span>'); ?>
                        </footer><!-- .entry-footer -->
                    </article><!-- #post-<?php the_ID(); ?> -->
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the post data
            else :
                // If no carpet posts found, display a message
                echo '<p>No carpet posts found</p>';
            endif;
            ?>

        </div><!-- .posts-list -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
