<div class="row">
    <div class="col-12 col-sm-4 mb-4 desta-nousk">
        <div style="margin-bottom:0.5rem;">
            <a style="color:white !important;font-weight:bold;font-size: calc((16px - 1px) + 1 * (100vw - 768px)/ (1920 - 768))!important;line-height: 1.6!important;" href="<?php echo site_url(''); ?>/projetos/#projetos">Projetos</a>
            <!--<p>Projetos</p>-->
        </div>
        <div class="desta-desc">
            <?php
            $args = array(
                'post_type'         => 'projeto',
                'post_status'       => 'publish',
                'posts_per_page'    =>  -1,
                'orderby'           => 'meta_value',
                'order'             => 'ASC'
            );

            $posts = query_posts($args);
            ?>

            <?php foreach ($posts as $post) : setup_postdata($post); ?>
                <div style="border-bottom: 0.5px solid white;padding-right: 15px;padding-left: 15px;">
                    <?php
                    $titulo = get_the_title();
                    $semespaco = preg_replace('/\s+/', '', $titulo);
                    $titulotratado = strtolower($semespaco);

                    ?>
                    <a href="https://www.nousk.com.br/projetos/#<?php echo $titulotratado; ?>" title="<?php the_title(); ?>" style="color: white !important;line-height:2;" class="tag-destaque">
                        <?php the_title(); ?>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <div class="col-12 col-sm-4 mb-4 desta-nousk">
        <div style="margin-bottom:0.5rem;">
            <a style="color:white !important;font-weight:bold;font-size: calc((16px - 1px) + 1 * (100vw - 768px)/ (1920 - 768))!important;line-height: 1.6!important;" href="<?php echo site_url(''); ?>/ferramentas/#ferramentas">Ferramentas</a>
            <!--<p>Ferramentas</p>-->
        </div>
        <div class="desta-desc">
            <?php
            $args = array(
                'post_type'         => 'especialidade',
                'post_status'       => 'publish',
                'posts_per_page'    =>  -1,
                'orderby'           => 'meta_value',
                'order'             => 'ASC',
                'meta_key'          => 'importancia'
            );

            $posts = query_posts($args);
            ?>

            <?php foreach ($posts as $post) : setup_postdata($post); ?>
                <div style="border-bottom: 0.5px solid white;padding-right: 15px;padding-left: 15px;">
                    <?php
                    $titulo = get_the_title();
                    $semespaco = preg_replace('/\s+/', '', $titulo);
                    $titulotratado = strtolower($semespaco);

                    ?>
                    <a href="https://www.nousk.com.br/ferramentas/#<?php echo $titulotratado; ?>" title="<?php the_title(); ?>" style="color: white !important;line-height:2;" class="tag-destaque">
                        <?php the_title(); ?>
                    </a></div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="col-12 col-sm-4 mb-4 desta-nousk">
        <div style="margin-bottom:0.5rem;">
            <a style="color:white !important;font-weight:bold;font-size: calc((16px - 1px) + 1 * (100vw - 768px)/ (1920 - 768))!important;line-height: 1.6!important;" href="<?php echo site_url(''); ?>/blog">Blog</a>
            <!--<p>Blog</p>-->
        </div>
        <div class="desta-desc">
            <?php $tags = get_tags(); ?>
            <?php foreach ($tags as $tag) { ?>
                <div style="border-bottom: 0.5px solid white;padding-right: 15px;padding-left: 15px;">
                    <a href="<?php echo get_tag_link($tag->term_id); ?> " rel="tag" style="color: white !important;line-height:2;" class="tag-destaque"><?php echo $tag->name; ?></a></div>
                <!--	<p><?php //echo $tag->name; 
                            ?></p>-->
            <?php } ?>
        </div>
    </div>

</div>