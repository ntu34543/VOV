<div class="post_topimg_dowcontent">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
            <?php congbio_thumbnail('large') ?>
        </div>
        <div class="entry-header">
            <?php congbio_entry_header(); ?>
        </div>
        <div class="entry-content">
            <?php tu_entry_content(); ?>
            <?php (is_single() ? congbio_entry_tag() : ''); ?>
        </div>
    </article>
</div>