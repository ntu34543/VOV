<?php
get_header(); ?>
<section class="section-block-upper row">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                    <div class="row">

                        <?php
                        if (have_posts()) :

                            if (is_home() && !is_front_page()) : ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>

                            <?php
                            endif; ?>
                <div id="aft-inner-row">
                            <?php

                            /* Start the Loop */
                            while (have_posts()) : the_post();

                                /*
                                 * Include the Post-Format-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */
                                get_template_part('template-parts/content', get_post_format());


                            endwhile; ?>
                        </div>
                            <div class="col col-ten">
                                <div class="covernews-pagination">
                                    <?php covernews_numeric_pagination(); ?>
                                </div>
                            </div>
                        <?php

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif; ?>

                        </div>
                    </main><!-- #main -->
                </div><!-- #primary -->

                <?php
                get_sidebar();
                ?>

    </section>
<?php
get_footer();
