<?php /* Template Name: Me */ ?>

<?php get_header(); ?>
<style>
  body {
    background-color: black;
    color: white;
  }

  .pp-user-avatar {
    border-radius: 50%;
  }

  .me-cont a{
	color:white; 
  }

  .me-cont a:hover{
       color:white;
	text-decoration: underline;
  }
</style>
<main class="container padtop3">
        <div class="loader" style="display:none;">
            <div class="wrapper">
                <h2>Nousk.</h2>
            </div>
        </div>
  <?php get_template_part('templates/components/header-post-author'); ?>
  <section class="row align-items-stretch me-cont" style="font-size:1.4rem;">
    <?php the_content(); ?>
  </section>

</main>
<div style="text-align:right;border-bottom: 2px solid white;" id="rafa">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rafa-for-you-black.jpeg" alt="Participação Especial Rafael" style="height:50px;">
</div>

<?php get_footer(); ?>
