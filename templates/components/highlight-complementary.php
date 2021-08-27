<div class="col-12 col-sm-4 mb-4">
    <div <?php post_class('highlight-complementary item'); ?>>
        <!-- post thumbnail -->
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="d-block mb-4">
                    <img data-src="<?php the_post_thumbnail_url(); ?>" class="img-fluid w-100 lozad">
            </a>
        <!-- /post thumbnail -->

        <!-- post title -->
        <p class="mb-0 h6">
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
                <?php the_excerpt(); ?>
            </a>
        </div>
    </div>
</div>
