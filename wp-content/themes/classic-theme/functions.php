<?php
function classic_theme_setup()
{
    wp_enqueue_style("classic-theme-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "classic_theme_setup");
