<section class="row">
        <div class="row">
            <?php
            global $post;
            $categories = get_the_category($post->ID);
            $catidlist = '';
            foreach ($categories as $category) {
                $catidlist .= $category->cat_ID . ",";
            }
            $custom_query_args = array(
                'posts_per_page' => 6,
                'post__not_in' => array($post->ID),
                'orderby' => 'rand',
                'cat' => $catidlist,
            );
            $custom_query = new WP_Query($custom_query_args);

            if ($custom_query->have_posts()) : ?>
                <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <div class="col-12 col-md-4 mb-4">
                        <div <?php post_class('highlight-see-more'); ?>>
                            <!-- post thumbnail -->
                            <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'large'); ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="image d-block mb-2 position-relative">
                                    <img data-src="<?php the_post_thumbnail_url(); ?>" class="img-fluid lozad">
                            </a>
                            <!-- /post thumbnail -->

                            <!-- post title -->
                            <h4 class="mb-0">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                            <!-- /post title -->
                            <div class="excerpt">
                                <a href="<?php the_permalink(); ?>" class="" title="<?php the_excerpt(); ?>">
                                    <?php echo get_the_excerpt(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Sem posts relacionados.</p>
            <?php endif; ?>
        </div>
</section>
