<?php /* Template Name:Ferramentas */ ?>


<?php get_header(); ?>

<style>
  #header a {
    color: white !important;
  }

  body {
    background-color: black !important;
    color: white !important;
  }

  ul {
    padding: 0px;
    margin: 0px;
    list-style: none;
  }

  .img {
    max-width: 100%;
    display: block;
  }

  .wrapper {
    overflow: hidden;
  }

  .slide {
    display: flex;
  }

  .slide:hover {
    will-change: transform;
  }

  .slide li {
    flex-shrink: 0;
    width: 80vw;
    max-width: 800px;
    margin: 0 20px;
    overflow: hidden;
    opacity: .8;
    transform: scale(.8);
    transition: .4s;
  }

  .slide li.active {
    opacity: 1;
    transform: scale(1);
  }
</style>


<?php

$construcao = get_field('em_construcao');

if ($construcao) {
  get_template_part('construcao');
} else {
?>


  <main class="container padtop3 padbottom10 padbottom3" style="margin-top:100px;">

    <div class="wrapper">

      <ul class="slide">
        <li id="ferramentas" class="img linkimg">
          <p class="especial-title breakword especial-martop"><?php the_title();
                                                              the_content(); ?></p>
        </li>
        <?php
        $args = array(
          'post_type'         => 'especialidade',
          'post_status'       => 'publish',
          'posts_per_page'    =>  -1,
          'order'             => 'ASC',
        );

        $posts = query_posts($args);
        ?>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>
          <?php
          $titulo = get_the_title();
          $semespaco = preg_replace('/\s+/', '', $titulo);
          $titulotratado = strtolower($semespaco);

          ?>
          <li id="<?php echo $titulotratado; ?>" class="img linkimg">
            <p class="especial-title breakword especial-martop"><?php the_title();
                                                                the_content(); ?></p>
          </li>

        <?php endforeach; ?>
      </ul>
    </div>





  </main>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/_slide1.js"></script>
  <?php get_footer(); ?>

<?php
}


?>