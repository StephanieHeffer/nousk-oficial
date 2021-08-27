<div class="col-12 col-md-4 mb-4">
    <div <?php post_class('highlight-secondary h-100'); ?> >
        <!-- post thumbnail -->
        <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'large'); ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block">
                    <img data-src="<?php the_post_thumbnail_url($size); ?>" class="img-fluid w-100 lozad">
            </a>
        <!-- /post thumbnail -->

        <!-- post title -->
        <h2 class="p-3 mb-0 text-uppercase h4">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <!-- /post title -->

        <div class="excerpt p-3">
            <a href="<?php the_permalink(); ?>">
                <?php the_excerpt(); ?>
            </a>
        </div>
    </div>
</div>
