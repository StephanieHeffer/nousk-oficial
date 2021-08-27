<?php get_header(); ?>

<style>
#header a{
color:white !important;
}


body{
background-image: url("<?php bloginfo('template_directory'); ?>/noise-nousk.jpg");
/*animation: animate .5s linear infinite;*/
animation: animate .5s steps(10) infinite;
}

@keyframes animate{
0%{
background-position: 0 0;
}
100%{
background-position: 100% 100%;
}

}

</style>

<div class="padtop3">

<div class="container my-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-sm-6 regiao" style="text-align:center;">
        
            <!--<p style="color:white;" class="h1 constr-p">EM CONSTRUÇÃO</p>-->
            <p style="color:white;" class="h1">EM CONSTRUÇÃO</p>
       </div>
    </div>
</div>

<?php /**
$the_content = apply_filters('the_content', get_the_content());

if ( !empty($the_content) ) {
  echo "<h1>Hello</h1>";
}

**/

?>



</div>

<?//php get_footer(); ?>
