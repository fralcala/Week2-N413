<?php

function my_theme_assets()
{
    wp_enqueue_style("style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "my_theme_assets");

function burrito_mania_widgets()
{
    register_sidebar(array(
        'name'          => __('Footer 1', 'burrito-mania'),
        'id'            => 'footer-1',
        'before_widget' => '<div class="custom-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action("widgets_init", "burrito_mania_widgets");
