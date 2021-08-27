<?php get_header(); ?>

<main role="main" class="container padtop3 padbottom10 padbottom3">
 <section class="container intro-blog">
<div class="row">
        <h3 class="col-12 col-sm-6 breakword textend"><?php single_tag_title(); ?></h3>
	<?php $desc = tag_description();?>
<?php if(empty($desc)):?>
	<p class="col-12 col-sm-6 textinitial" style="margin-top: 50px;"> Anotações e soluções  de alguns perrengues que enfrentei<br>Espero que ajude!</p>
<?php else: ?>
<div class="col-12 col-sm-6 textinitial" style="margin-top: 50px;">
<?php echo $desc;?>
</div>
<?php endif;?>
</div>
  </section>

	<?php if (have_posts()) : ?>
		<section class="row">
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<?php get_template_part('templates/components/highlight-complementary'); ?>
					<?php endwhile; ?>
		</section>
	<?php endif; ?>

	<?php get_template_part('templates/components/pagination'); ?>
</main>

<?php get_footer(); ?>
