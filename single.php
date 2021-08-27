<?php get_header(); ?>
<style>
.post-tags ul li a {
    color: black !important;
}
</style>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <main role="main" class="container padtop3 padbottom10 padbottom3">
            <h2 class="h5 section-title text-white p-2 text-uppercase mb-4">
                <?php /** $url =  "{$_SERVER['REQUEST_URI']}"; ?>
                <?php $e = explode('/', $url); ?>
                <?php $taxonomy = wp_get_post_terms(get_the_ID(), 'category'); ?>
                <?php $tax_names = ''; ?>
                <?php foreach ($taxonomy as $tax) { ?>
                    <?php $tax_names .= '&nbsp;' . $tax->slug; ?>
                <?php } ?>
                <?php if (isset($e[1]) && strpos($tax_names, $e[1]) !== false) { ?>
                    <?php $term = get_term_by('slug', $e[1], 'category'); ?>
                    <?php _e($term->name); ?>
                <?php } else { ?>
                    <?php _e($e[1] . ' is not a valid taxonomy for this post'); ?>
                <?php } **/ ?>
            </h2>


            <h1 class="h3 mb-3 text-center">
                <?php the_title(); ?>
            </h1>
<div class="excerpt text-center">
                                    <?php echo get_the_excerpt(); ?>
                            </div>

            <!-- section -->
            <div class="row center">

                <section class="col-12 col-sm-7 col-md-10 order-0" style="word-break: break-word;">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <!-- post thumbnail -->
			 <?php $imagem= get_field('mostrar_thumb');
                               if ($imagem):
                                  the_post_thumbnail('full', array('class' => 'img-fluid w-100 lozad'));
                               endif; ?>
                        <!-- /post thumbnail -->

                        <!-- post details -->
                            <header class="post-info mb-4">
                    <!-- post tags -->
                    <div class="post-tags my-5">
                        <?php the_tags('<ul class="list-unstyled d-flex p-0 flex-wrap" style="justify-content: center;"><li>', '</li><li>', '</li></ul>'); ?>
                    </div>
                    <!-- /post tags -->
                                <?php the_time('j \d\e F \d\e Y'); ?><br>
<hr class="mb-0 mt-2">
                            </header>
                        <!-- /post details -->
                        <!-- post content -->
                        <?php the_content(); ?>
			<!-- /post content -->
			<script src="<?php echo get_template_directory_uri(); ?>/assets/js/_codearea.js"></script>
                    </article>
                </section>
            </div>
                                <hr class="mb-4 mt-2">
            <div class="row">
                <div class="col-12 mb-4 padtop3"><p class="mb-4 h1 padtop text-center">Relacionados</p>
                    <!-- related posts -->
                    <?php get_template_part('templates/components/related-bottom'); ?>
                    <!-- /related posts -->
                </div>
            </div>



	</div>
		
            <!-- /section -->
        </main>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
