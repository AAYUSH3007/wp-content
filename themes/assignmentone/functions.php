<?php
//our navigation
function mychildtheme_theme_setup() {
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
    'name'          => __( 'Footer Widget Area One', 'cms1' ),
    'id'            => 'footer-widget-area-one',
    'description'   => __( 'The first footer widget area', 'cms1' ),
    'before_widget' => '<div class="logo-widget">',
    'after_widget'  => '</div>'
    
  ));
  register_sidebar( array(
    'name'          => __( 'Footer Widget Area Two', 'cms1' ),
    'id'            => 'footer-widget-area-two',
    'description'   => __( 'The second footer widget area', 'cms1' ),
    'before_widget' => '<div class="about-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
  register_sidebar( array(
    'name'          => __( 'Footer Widget Area Three', 'cms1' ),
    'id'            => 'footer-widget-area-three',
    'description'   => __( 'The third footer widget area', 'cms1' ),
    'before_widget' => '<div class="menu-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
}
add_action( 'widgets_init', 'cms_widgets_init' );
?>