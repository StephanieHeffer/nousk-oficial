<?php /* Template Name: Me */ ?>

<?php get_header(); ?>
<style>
.timeline {
  width: 80%;
  height: auto;
  max-width: 800px;
  margin: 0 auto;
  position: relative;
}

.timeline ul {
  list-style: none;
}
.timeline ul li {
  padding: 20px;
  background-color: #1e1f22;
  color: white;
  border-radius: 10px;
  margin-bottom: 20px;
}
.timeline ul li:last-child {
  margin-bottom: 0;
}
.timeline-content h1 {
  font-weight: 500;
  font-size: 25px;
  line-height: 30px;
  margin-bottom: 10px;
}
.timeline-content p {
  font-size: 16px;
  line-height: 30px;
  font-weight: 300;
}
.timeline-content .date {
  font-size: 12px;
  font-weight: 300;
  margin-bottom: 10px;
  letter-spacing: 2px;
}
@media only screen and (min-width: 768px) {
  .timeline:before {
    content: "";
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 100%;
    background-color: gray;
  }
  .timeline ul li {
    width: 50%;
    position: relative;
    margin-bottom: 50px;
  }
  .timeline ul li:nth-child(odd) {
    float: left;
    clear: right;
    transform: translateX(-30px);
    border-radius: 20px 0px 20px 20px;
  }
  .timeline ul li:nth-child(even) {
    float: right;
    clear: left;
    transform: translateX(30px);
    border-radius: 0px 20px 20px 20px;
  }
  .timeline ul li::before {
    content: "";
    position: absolute;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color: gray;
    top: 0px;
  }
  .timeline ul li:nth-child(odd)::before {
    transform: translate(50%, -50%);
    right: -10px;
  }
  .timeline ul li:nth-child(even)::before {
    transform: translate(-50%, -50%);
    left: -50px;
  }
  .timeline-content .date {
    position: absolute;
    top: -30px;
  }
  .timeline ul li:hover::before {
    background-color: orange;
  }
}
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
	<section class="row align-items-strech">
    <?php get_template_part('templates/components/timeline'); ?>
	</section>

</main>
<div style="text-align:right;border-bottom: 2px solid white;" id="rafa">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rafa-for-you-black.jpeg" alt="Participação Especial Rafael" style="height:50px;">
</div>

<?php get_footer(); ?>
