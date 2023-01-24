<?php

function movie_blog_load_scripts() {
    wp_enqueue_style("movie-blog-style", get_stylesheet_uri(), array(), filemtime(get_template_directory() . "/style.css"), "all");
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array(), null);
    wp_enqueue_script("dropdown", get_template_directory_uri() . "/js/dropdown.js", array(), "1.0", true);
}
add_action("wp_enqueue_scripts", "movie_blog_load_scripts");

function movie_blog_config() {
    register_nav_menus(
        array(
            "movie_blog_main_menu" => "Main Menu",
            "movie_blog_footer_menu" => "Footer Menu"
        )
    );

    $args = array(
        "height" => 225,
        "width" => 1920
    );
    add_theme_support("custom-header", $args);
}
add_action("after_setup_theme", "movie_blog_config", 0);
