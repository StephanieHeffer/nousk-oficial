<?php get_header(); ?>
<?php

$construcao = get_field('em_construcao');

if ( $construcao)
{
get_template_part('construcao');
}

else{
?>

<?php if (have_posts()) : ?>
<main role="main" class="container padtop3 margbot6" style="font-size:1.4rem">
    <?php get_template_part('templates/components/loop-page'); ?>
</main>
<?php endif; ?>

<?php get_footer(); ?>
<?php
}


?>

