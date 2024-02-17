<?php
//our navigation
function mytheme_theme_setup(){
    register_nav_menus( array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}
add_action ( 'after_setup_theme', 'mytheme_theme_setup' ); 
// add our featured image support for our posts
add_theme_support( 'post-thumbnails' );
//set up our custom footer widgets
function cmsclass_widgets_init() {
register_sidebar(array(
    'name' =>__( 'Footer Widget Area One', 'cmsclass' ),
    'id' => 'footer-widget-area-one',
    'description' => __( 'The first widget area', 'cmsclass' ),
    'before_widget' => '<div class="logo-widget">',
    'after_widget' => '</div>',
));
register_sidebar(array(
    'name' =>__( 'Footer Widget Area Two', 'cmsclass' ),
    'id' => 'footer-widget-area-two',
    'description' => __( 'The second widget area', 'cmsclass' ),
    'before_widget' => '<div class="about-widget">',
    'after_widget' => '</div>', 
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '<h4/>',
));
register_sidebar(array(
    'name' =>__( 'Footer Widget Area Three', 'cmsclass' ),
    'id' => 'footer-widget-area-three',
    'description' => __( 'The third widget area', 'cmsclass' ),
    'before_widget' => '<div class="menu-widget">',
    'after_widget' => '</div>', 
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '<h4/>',
));
register_sidebar(array(
    'name' =>__( 'Footer Widget Area Four', 'cmsclass' ),
    'id' => 'footer-widget-area-four',
    'description' => __( 'The fourth widget area', 'cmsclass' ),
    'before_widget' => '<div class="contact-widget">',
    'after_widget' => '</div>', 
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '<h4/>',
));
}
add_action(  'widgets_init', 'cmsclass_widgets_init' );
// our custom plugin 
function retro_game_init() {
    $args = array (
        'label' => 'Retro Games', 
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies' => array( 'category'),
        'hierarchical' => 'false',
        'query_var' => 'true',
        'menu_icon' => 'dashicons-album',
        'supports' => array(
            'title',
            'editor',
            'excerpts',
            'trackbacks',
            'comments',
            'thumbnail',
            'author',
            'post-formats',
            'page-attributes',

        )
    );
    register_post_type('retroGames', $args );
}
add_action('init', 'retro_game_init');
// our plugin shortcode
function retro_game_shortcode() {
    $query = new WP_Query(array ('post_type' => 'retroGames', 'post_per_page' => 8, 'order' =>'asc'));
    while ($query -> have_posts()) : $query-> the_post();
    ?>
    <div class= "retro-game-container">
        <div> 
        <a href="<?php the_permalink();  ?>">
        <?php the_post_thumbnail(); ?>
    </a>        
    </div>
    <div>
<h4><?php the_title(); ?></h4>
<?php the_content(); ?>
<p> <a href="<?php the_permalink(); ?>">Learn More</a></p>
    </div>
    </div>
    <?php wp_reset_postdata();
    endwhile;
    wp_reset_postdata();
}
add_shortcode('retroGames', 'retro_games_shortcode');
?>