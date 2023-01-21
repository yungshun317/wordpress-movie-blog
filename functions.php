<?php

function movie_blog_load_scripts() {
    wp_enqueue_style("movie-blog-style", get_stylesheet_uri(), array(), "1.0", "all");
}
add_action("wp_enqueue_scripts", "movie_blog_load_scripts");