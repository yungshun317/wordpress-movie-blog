<?php get_header(); ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header() -> height; ?>" width="<?php echo get_custom_header() -> width; ?>" alt="" />
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="page-item">
                            <?php
                                while (have_posts()): the_post();
                                get_template_part("parts/content", "page");
                                if (comments_open() || get_comments_number()) {
                                    comments_template();
                                }
                                endwhile;
                            ?>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
