<?php get_header(); ?>

<?php
global $wp_query;
$ajax = $_GET['ajax'];
$paged = get_query_var('paged');
$paged = $paged ? $paged : 1;

?>

<main role="main" class="container">

    <h2 class="h5 section-title text-white p-2 text-uppercase mb-4">
        <?php single_cat_title(); ?>
    </h2>

    <?php if ($paged == 1 && !$ajax) { ?>
        <section class="row align-items-stretch">
            <?php $post_count = 0; ?>
            <?php while (have_posts() && $paged == 1) : ?>
                <?php the_post(); ?>
                <?php get_template_part(($post_count == 0 ? 'templates/components/highlight-primary' : 'templates/components/highlight-secondary')); ?>
                <?php $post_count++; ?>
                <?php if ($post_count === 2) { ?>
                    <?php break; ?>
                <?php  } ?>
                </div>
            <?php endwhile; ?>
        </section>
        <div class="row">
            <?php while (have_posts() && $paged == 1 && $wp_query->post_count > 2) : ?>
                <?php the_post(); ?>
                <?php get_template_part('templates/components/highlight-complementary'); ?>
                <?php $post_count++; ?>
                <?php if ($post_count === 6) { ?>
                    <?php break; ?>
                <?php } ?>
            <?php endwhile; ?>
        </div>
    <?php } ?>

    <?php if (have_posts() && ($wp_query->post_count >= 1 || $ajax)) : ?>
        <section class="row">
            <div class="col-12 col-md-3 mb-2">
                <h3 class="read-more-title h5 text-uppercase">
                    Leia mais
                    <strong class="d-block">
                        <?php if (is_category()) : ?>
                            <?php single_cat_title(); ?>
                        <?php endif ?>
                    </strong>
                </h3>
                <hr class="mt-0">
            </div>

            <div class="col-12 col-md-9">
                <div class="row list">
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <?php get_template_part('templates/components/highlight-see-more'); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part('templates/components/pagination'); ?>
</main>

<?php get_footer(); ?>
