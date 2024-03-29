<?php
/**
 * Template Name: Homepage advance custom fields
 * Template Post Type: page
 */
get_header();
?>
<main>
    <section class="masthead" style="background-image: url('<?php echo wp_kses_post(get_field('masthead_image')); ?>')">
        <div>
            <h1>  <?php echo wp_kses_post(get_field('page_title'));?></h1>
        </div>
</section>

<section class="home-intro">
<h2><?php echo wp_kses_post(get_field('row_title'));?></h2>
<p><?php echo wp_kses_post(get_field('row_one_text'));?></p>
</section>
<section class="custom-plugin-section row">
    <?php echo do_shortcode("[retroGames]"); ?>
</section>
</main>
<?php
get_footer();
?>