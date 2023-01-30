<?php

require get_template_directory() . "/inc/customizer.php";

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
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo", array(
       "width" => 200,
       "height" => 110,
       "flex-height" => true,
       "flex-width" => true
    ));
}
add_action("after_setup_theme", "movie_blog_config", 0);

add_action("widgets_init", "movie_blog_sidebars");
function movie_blog_sidebars() {
    register_sidebar(
        array(
            "name" => "Blog Sidebar",
            "id" => "sidebar-blog",
            "description" => "This is the Blog Sidebar. You can add your widgets here.",
            "before_widget" => "<div class='widget-wrapper'>",
            "after_widget" => "</div>",
            "before_title" => "<h4 class='widget-title'>",
            "after_title" => "</h4>"
        )
    );
    register_sidebar(
        array(
            "name" => "Service 1",
            "id" => "services-1",
            "description" => "First Service Area",
            "before_widget" => "<div class='widget-wrapper'>",
            "after_widget" => "</div>",
            "before_title" => "<h4 class='widget-title'>",
            "after_title" => "</h4>"
        )
    );
    register_sidebar(
        array(
            "name" => "Service 2",
            "id" => "services-2",
            "description" => "First Service Area",
            "before_widget" => "<div class='widget-wrapper'>",
            "after_widget" => "</div>",
            "before_title" => "<h4 class='widget-title'>",
            "after_title" => "</h4>"
        )
    );
    register_sidebar(
        array(
            "name" => "Service 3",
            "id" => "services-3",
            "description" => "First Service Area",
            "before_widget" => "<div class='widget-wrapper'>",
            "after_widget" => "</div>",
            "before_title" => "<h4 class='widget-title'>",
            "after_title" => "</h4>"
        )
    );
}
