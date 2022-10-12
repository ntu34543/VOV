<div class="home_newpost">
<h1 class="right_header" style="font-size: 20px;color:#c02a29;font-weight:700;">Mới cập nhật</h1>
        <?php $postquery = new WP_Query(array('posts_per_page' => '7'));
		if ($postquery->have_posts()) {
			while ($postquery->have_posts()) : $postquery->the_post();
				$do_not_duplicate = $post->ID;
		?>
        <div class="post_format">
            <?php get_template_part('teamplate-content/content-post/lefImage_rightContent' )?>
        </div>
        <?php endwhile;
			?>
        <?php


		} ?>


</div>