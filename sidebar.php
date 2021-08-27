<!-- sidebar -->
<aside class="sidebar col-12 col-sm-5 col-md-4 order-12 order-sm-1" role="complementary">
    <div class="sticky-top">
        <div <?php post_class(); ?>>
            <h3 class="h5 section-title text-white p-2 text-uppercase mb-0" style="background-color: <?php echo get_field('cor_da_categoria', 'category_' . $term->term_id); ?>">Relacionados</h3>
            <?php related_posts(); ?>
        </div>
    </div>
</aside>
<!-- /sidebar -->