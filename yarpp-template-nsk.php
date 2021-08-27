<div class="sidebar-related">
    <?php if (have_posts()) : ?>
        <?php $i = 0; ?>
        <?php while (have_posts()) : ?>
            <?php the_post(); ?>
            <?php if ($i == 0) : ?>
                <?php get_template_part('templates/components/sidebar-related'); ?>
                <div class="mb-4">
                    <?php dfp_tag(array('id' => 'banner-300x250-area')); ?>
                </div>
            <br />  
            <hr>
            <?php else : ?>
                <?php get_template_part('templates/components/sidebar-related'); ?>
            <?php endif; ?>
            <?php $i++; ?>
        <?php endwhile; ?>

        <div class="mb-4">
            <?php dfp_tag(array('id' => 'banner-300x600-2-area')); ?>
        </div>

       <!-- <div class="mb-4">
            <?//php dfp_tag(array('id' => 'banner-300x250-2-area')); ?>
        </div> -->

    <?php else : ?>
        <p>Sem posts relacionados.</p>
    <?php endif; ?>
</div>
