<?php
query_posts(array(
    'category_name'  => 'doencas-e-sintomas',
    'posts_per_page' => 3
));
?>
<?php if (have_posts()) : ?>
    <section class="row lozad">
        <div class="col-12 col-md-3 mb-2">
            <h3 class="read-more-title h5 text-uppercase">
                Leia mais
                <strong class="d-block">
                    <a href="<?php echo site_url('doencas-e-sintomas'); ?>">Doenças e Sintomas</a>
                </strong>
            </h3>
            <hr class="mt-0">
        </div>

        <div class="col-12 col-md-9">
            <div class="row my-posts">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('templates/components/highlight-see-more'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<?php
query_posts(array(
    'category_name'  => 'videos',
    'posts_per_page' => 3
));
?>
<?php if (have_posts()) : ?>
    <section class="row lozad">
        <div class="col-12 col-md-3 mb-2">
            <h3 class="read-more-title h5 text-uppercase">
                Veja mais
                <strong class="d-block">
                    <a href="<?php echo site_url('videos'); ?>">Vídeos</a>
                </strong>
            </h3>
            <hr class="mt-0">
        </div>

        <div class="col-12 col-md-9">
            <div class="row my-posts">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('templates/components/highlight-see-more'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
query_posts(array(
    'category_name'  => 'podcasts',
    'posts_per_page' => 3
));
?>
<?php if (have_posts()) : ?>
    <section class="row lozad">
        <div class="col-12 col-md-3 mb-2">
            <h3 class="read-more-title h5 text-uppercase">
                Ouça mais
                <strong class="d-block">
                    <a href="<?php echo site_url('podcasts'); ?>">Podcasts</a>
                </strong>
            </h3>
            <hr class="mt-0">
        </div>

        <div class="col-12 col-md-9">
            <div class="row my-posts">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('templates/components/highlight-see-more'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
query_posts(array(
    'category_name'  => 'mulher-2',
    'posts_per_page' => 3
));
?>
<?php if (have_posts()) : ?>
    <section class="row lozad">
        <div class="col-12 col-md-3 mb-2">
            <h3 class="read-more-title h5 text-uppercase">
                Leia mais
                <strong class="d-block">
                    <a href="<?php echo site_url('mulher-2'); ?>">Mulher</a>
                </strong>
            </h3>
            <hr class="mt-0">
        </div>

        <div class="col-12 col-md-9">
            <div class="row my-posts">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('templates/components/highlight-see-more'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
query_posts(array(
    'category_name'  => 'pediatria',
    'posts_per_page' => 3
));
?>
<?php if (have_posts()) : ?>
    <section class="row lozad">
        <div class="col-12 col-md-3 mb-2">
            <h3 class="read-more-title h5 text-uppercase">
                Leia mais
                <strong class="d-block">
                    <a href="<?php echo site_url('pediatria'); ?>">Crianças</a>
                </strong>
            </h3>
            <hr class="mt-0">
        </div>

        <div class="col-12 col-md-9">
            <div class="row my-posts">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('templates/components/highlight-see-more'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<?php
query_posts(array(
    'category_name'  => 'geriatria',
    'posts_per_page' => 3
));
?>
<?php if (have_posts()) : ?>
    <section class="row lozad">
        <div class="col-12 col-md-3 mb-2">
            <h3 class="read-more-title h5 text-uppercase">
                Leia mais
                <strong class="d-block">
                    <a href="<?php echo site_url('geriatria'); ?>">Idosos</a>
                </strong>
            </h3>
            <hr class="mt-0">
        </div>

        <div class="col-12 col-md-9">
            <div class="row my-posts">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('templates/components/highlight-see-more'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
