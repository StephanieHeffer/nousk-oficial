<?php get_header(); ?>

<main role="main" class="container  padtop3 padbottom10 padbottom3">
        <section class="container intro-blog">
                <h4> <?php echo sprintf(__('%s resultados encontrados para ', 'nousk'), $wp_query->found_posts); ?>
                        <strong>
                                "<?php echo get_search_query(); ?>"
                        </strong>
                </h4>
        </section>

        <?php if (have_posts()) : ?>
                <section class="row">
                        <div class="list">
                                <?php while (have_posts()) : ?>
                                        <?php the_post(); ?>
                                        <?php get_template_part('templates/components/highlight-complementary'); ?>
                                <?php endwhile; ?>
                        </div>
                </section>
        <?php endif; ?>

        <?php get_template_part('templates/components/pagination'); ?>
</main>

<?php get_footer(); ?>