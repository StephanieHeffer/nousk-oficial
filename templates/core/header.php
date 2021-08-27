<header id="header">
    <div class="container">
        <div class="row justify-content-between align-items-end">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0 justify-content-between">
            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0 justify-content-between lognousk" style="text-align:center;">
                <?php if (is_page('8') || is_page('45')) : ?>
                    <a style="color:white !important;" href="<?php echo site_url(''); ?>">Nousk.
                    </a>
                <?php else : ?>
                    <a href="<?php echo site_url(''); ?>">Nousk.
                    </a>
                <?php endif; ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php if (!is_page('8')) : ?>
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

</header>

<?php /**

$construcao = get_field('em_construcao');

if ( $construcao)
{
get_template_part('construcao');
}**/

?>