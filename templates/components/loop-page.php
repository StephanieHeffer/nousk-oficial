 <?php while (have_posts()) : the_post(); ?>
 <article <?php post_class('page-template') ?>>
     <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100 lozad')); ?>
     <h1 class="page-title mb-3 h4"><?php the_title(); ?></h1>
     <?php the_content(); ?>
 </article>
 <?php endwhile; ?>
