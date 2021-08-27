<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<style>

body{
	background-color: black !important;
	color: white !important;
        /*cursor: url("<?php bloginfo('template_directory'); ?>/assets/img/seta2.png"), auto;*/
}

.wrapper{
width: 100%;
height: 100%;
background-color: black;
position: relative;
padding: 64px;
filter: contrast(15);
}

.wrapper h2{
font-family: 'Montserrat', sans-serif;
position: absolute;
left: 50%;
top: 50%;
transform: translate3d(-50%,-50%,0);
color: white;
margin: 0;
font-size: 128px;
font-weight: 500;
text-transform: uppercase;
/*filter: blur(8px);*/
display: block;
animation: animate 10s infinite alternate;
}

@keyframes animate{
0%{
letter-spacing: -80px;
filter: blur(8px);
}
50%{
filter: blur(8px);
}
100%{
letter-spacing: 10px;
filter: blur(8px);
}
}


.loader {
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pp-user-avatar{
border-radius: 50%!important;
}
.loader > .wrapper {
    width: 100%;
}

.loader.hidden {
    animation: fadeOut 20s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
   50%{
	opacity: 1;
    }

    100% {
        opacity: 0;
        visibility: hidden;
    }
}
</style>

<?php

$wp_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

?>

<main class="container">
<!--<section class="row">
<div class="loader">
<div class="wrapper">
<h2>Nousk.</h2>
</div>
</div>
</section>-->
<!--<section class="row introducao">
   <div class="col-12">	
    <img class="col-12 col-sm-6 mb-4 fundo-noob-cima" src="<?php //echo get_template_directory_uri(); ?>/assets/img/fundo-noob.png" alt="fundo noob">
    </div>
    <div class="col-12">
    <h1>SOLUÇÕES<br><span>WEB</span></h1></div>
<div class="col-12">    <img class="col-12 col-sm-6 mb-4 fundo-noob-baixo" src="<?php //echo get_template_directory_uri(); ?>/assets/img/fundo-noob.png" alt="fundo-noob"></div>
  </section>-->

<?php
/*
$args = array(
    'post_type'         => 'especialidade',
    'post_status'       => 'publish',
    'posts_per_page'    =>  -1,
    'orderby'           => 'meta_value',
    'order'             => 'ASC',
    'meta_key'          => 'importancia'
);

$posts = query_posts($args);
*/?>

<!--<section class="row ferramentas" id="ferramentas">
<div class="col-12 ferra-drop">
	<form name="FiltroEspecialidade" id="FiltroEspecialidade" method="post">
        <select name="sub-dropdown" id="sub-dropdown">
          <option selected disabled>Ferramentas</option>-->
         <?php /* foreach ($posts as $post) : setup_postdata($post); 
               echo '<option value="'.$post->ID.'">';
               echo the_title();
               echo '</option>';
*/	?>
	<?php/* endforeach; */ ?>
<!--        </select>
      </form>-->
 <!--     <div class="">
        <select>
          <option selected disabled>option Ferramentas option </option>
          <option value="wordpress"> option Wordpress option </option>
          <option value="react"> option React option </option>
          <option value="seo"> option SEO option </option>
          <option value="servidores"> option Servidores option </option>
        </select>
      </div>-->
<!--    </div>
    <div class="row list" id="cat"></div>
    <div class="row resultado-tools">
      <img class="img-fundo" src="<?php //echo get_template_directory_uri(); ?>/assets/img/fundo-noob.png" alt="fundo-noob">
      <div class="col-12 resultado-texto"> <?php //$post = get_post( 63 );?>
        <h3 id="ferra-title" class="col-12 col-sm-2"><?php //echo $post->post_title;?></h3>
        <p id="ferra-content" class="col-12 col-sm-3"><?php// echo $post->post_content;?></p>
      </div>
    </div>
                                                        </section>-->
<!--<section class="row projetos container" id="projetos">
    <h3 class="col-12">PROJETOS</h3>-->
<?php /**
$the_query = new WP_Query( array(
                           'post_type' => 'projeto',
                           'order'  => 'ASC',
                           'posts_per_page' =>'1000'
                        ));
**/
?>


<?php // $endereco = get_field("src"); ?>
<!-- <div class="row c-carousel c-carousel-pro" >
        <button class=" col-12 col-sm-2 js-carousel-pro-prev" style="color: white;background: transparent;font-weight: bold;border-color: transparent;outline: none !important;font-size: -webkit-xxx-large;">&lt;</button>
        <div class="col-12 col-sm-8 c-carousel__slides js-carousel-pro" style="padding-left: 0 !important; padding-right: 0 !important;">-->
<?php //while ($the_query->have_posts()) : ?>
                <?php// $the_query (setinha) the_post();?>
<!--<div class="glider-track">-->
<!--<div class="col-12 col-sm-3">
<iframe name="Framename" src="<?//php echo get_field('src');?>" frameborder="0" scrolling="yes" class="frame-area"> </iframe></div>-->
<!--<iframe name="Framename" src="<?//php echo get_field('src');?>" width="550" height="550" frameborder="0" scrolling="yes" style="width: 100%;" class="frame-area"> </iframe>--><!--</div>-->
            <?php //endwhile; ?>
<!--	</div>
        <button class="col-12 col-sm-2 js-carousel-pro-next" style="color: white;background: transparent;font-weight: bold;border-color: transparent;outline: none !important;font-size: -webkit-xxx-large;">&gt;</button>
    </div>
        <script src="<?php// echo get_template_directory_uri(); ?>/assets/js/_projetos.js"></script>
  </section>-->

<!--<section class="row blog align-items-stretch" id="blog">
	 <div class="blog-intro container">
      <h3>BLOG</h3>
      <p class="grid-6">Tutoriais de uns perrengues que passei e tive que pesquisar</p>
      <a href="https://www.nousk.com.br/blog/">VER TODOS</a>
    </div>
            <?//php while (have_posts()) : ?>
                <?//php the_post(); ?>
                <?//php get_template_part('templates/components/highlight-complementary'); ?>
            <?//php endwhile; ?>
 <div class="row"> -->
<!--                <div class="col-12">-->
                    <!-- related posts -->
                    <?php// get_template_part('templates/components/random-posts'); ?>
                    <!-- /related posts -->
               <!-- </div>
            </div>

        </section>-->

<section class="row padtop padbottom10">
<div class="col-12 col-sm-6 mb-4 padtop9 padbottom3 somobile">
<h1 class="profile-intro">
Desenvolvendo</h1><h1 class="h1title"> suas Ideias
</h1>
</div>
<div class="col-12 col-sm-6 mb-4 padtop3 padbottom13 sodesktop">
<h1 class="profile-intro">
Desenvolvendo suas Ideias
</h1>
</div>
<div class="col-12 col-sm-6 mb-4 padtop2 padtop3 padbottom3">
<?php get_template_part('templates/components/destaques-home'); ?>
</div>
</section>

<section class="row padtop10 padbottom10 padbottom3">
<div class="col-12 col-sm-6 mb-4" style="margin:auto;text-align:center">
<?php
$users = get_users('role=editor');
    foreach ($users as $user)
    {
        // get user who have posts only
	  echo get_avatar($user);
          echo '<p style="font-weight: 400;text-align: center;font-size: 3.7rem;">'.$user->display_name.'</p>';
  //        echo '</h1>';
	  echo '<p style="font-size: 20px;font-style: normal;line-height: 28px;text-align: center;">'.$user->user_description.'</p>';
    }

?>
<a style="color: white!important;font-size: 20px;font-weight:600;text-align: center;" href="<?php echo get_page_link( get_page_by_title( 'Stephanie Heffer' )->ID ); ?>">Sobre Mim</a>
</div>
</section>

</main>

<?php get_footer(); ?>
