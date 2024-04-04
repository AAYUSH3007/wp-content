<?php
//our navigation
function scenarioOne_theme_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
}
add_action( 'after_setup_theme', 'mychildtheme_theme_setup' );
// Adding Featured image support to my posts
add_theme_support( 'post-thumbnails' );
//  footer widgets
function cms_widgets_init(){
  register_sidebar(array(
    'name'          => __( 'Footer Widget Area One', 'scenarioOne' ),
    'id'            => 'footer-widget-area-one',
    'description'   => __( 'The first footer widget area', 'scenarioOne' ),
    'before_widget' => '<div class="logo-widget">',
    'after_widget'  => '</div>'
    
  ));
  register_sidebar( array(
    'name'          => __( 'Footer Widget Area Two', 'scenarioOne' ),
    'id'            => 'footer-widget-area-two',
    'description'   => __( 'The second footer widget area', 'scenarioOne' ),
    'before_widget' => '<div class="about-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
}
add_action( 'widgets_init', 'cms_widgets_init' );
?>