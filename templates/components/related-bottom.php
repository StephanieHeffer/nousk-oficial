<?php $terms = get_the_terms(get_the_ID(), 'category'); ?>
<?php if ($terms && !is_wp_error($terms)) { ?>
    <?php foreach ($terms as $term) { ?>
        <style>
            .highlight-complementary .image:before,
            .highlight-see-more .image:before {
                background-color: <?php echo get_field('cor_da_categoria', 'category_' . $term->term_id); ?>
            }
        </style>
    <?php } ?>
<?php } ?>

<section class="row">
    <?php
    global $post;
    $categories = get_the_category($post->ID);
    $catidlist = '';
    foreach ($categories as $category) {
        $catidlist .= $category->cat_ID . ",";
    }
    $custom_query_args = array(
        'posts_per_page' => 3,
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
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="image d-block mb-2 position-relative mb-4">
                        <?php if (has_post_thumbnail()) : ?>
                            <img data-src="<?php the_post_thumbnail_url(); ?>" class="img-fluid lozad">
                        <?php endif; ?>
                    </a>
                    <!-- /post thumbnail -->

                    <!-- post title -->
                    <p class="h6 mb-0">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                            <?php the_title(); ?>
                        </a>
                    </p>
                    <!-- /post title -->
                    <div class="post-tags">
                        <?php the_tags('<ul class="list-unstyled d-flex p-0 flex-wrap" style="margin-bottom:0;"><li style="margin-bottom:0;">', '</li><li>', '</li></ul>'); ?>
                    </div>
                    <div class="">
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
</section>