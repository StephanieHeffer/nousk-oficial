<?php get_header(); ?>

<style>
    body {
        background: white;
    }

    .intro-blog ul {
        margin: auto;
        justify-content: center;
    }

    .custom-tags ul li a {
        font-weight: 500;
        font-size: 1.4rem;
    }

    @media (max-width: 991.98px) {}
</style>
<?php
$paged = get_query_var('paged');
$paged = $paged ? $paged : 1;

?>


<main role="main" class="container padtop3 padbottom10 padbottom3">
    <section class="container intro-blog">
        <div class="row" style="margin-bottom:50px;">
            <h3 class="col-12 col-sm-6 textend">Blog</h3>
            <p class="col-12 col-sm-6 textinitial" style="margin-top: 50px;"> Anotações e soluções de alguns perrengues que enfrentei<br>Espero que ajude!</p>
        </div>
        <?php $tags = get_tags(); ?>
        <div class="custom-tags">
            <p class="h4">Nuvem de Tags</p>
            <div class="post-tags">
                <ul class="list-unstyled d-flex p-0 flex-wrap">
                    <?php foreach ($tags as $tag) { ?>
                        <li><a href="<?php echo get_tag_link($tag->term_id); ?> " rel="tag"><?php echo $tag->name; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    </section>
    <section class="row align-items-stretch">
        <?php while (have_posts() && $paged == 1) : ?>
            <?php the_post(); ?>
            <?php get_template_part('templates/components/highlight-complementary'); ?>
            </div>
        <?php endwhile; ?>
    </section>

</main>

<?php get_footer(); ?>