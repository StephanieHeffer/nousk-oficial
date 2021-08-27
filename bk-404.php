<?php get_header(); ?>

<style>

@import url('https://fonts.googleapis.com/css?family=Archivo+Black');

body {
  font-family: 'Archivo Black', sans-serif;
  background-color: #2c2c2c;
  // background: radial-gradient(ellipse at center, #444756 0%,#1d1b26 100%);
  background: radial-gradient(ellipse at center, #29382c 0%, #0c100d 100%);
  color: #fff;
}

html,
body {
  height: 100%;
}

.main-wrapper {
  position: relative;
  padding: 0;
  min-height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.loader {
  position: relative;
  font-size: 60px;
  text-align: center;
  margin: 0;
  padding: 0;
  z-index: 1;
}

.noise-wrapper {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  overflow: hidden;
  z-index: 10;
  
  &:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: radial-gradient(ellipse at center, rgba(0,0,0,0) 0%,rgba(0,0,0,0.75) 100%);
  }
}

.noise {
  position: absolute;
  top: -500px;
  right: -500px;
  bottom: -500px;
  left: -500px;
  background: transparent url(https://www.dropbox.com/s/h7ab1c82ctzy83n/noise.png?raw=1) 0 0;
  background-size: 320px 320px;
	opacity: .35;
	animation: noise 1s steps(8,end) infinite both;
}

@keyframes noise {
  0% {
    transform: translateX(0px,0px); }
  10% {
    transform: translate(-100px, 100px);
  }
  20% {
    transform: translate(150px, -100px);
  }
  30% {
    transform: translate(-100px,100px);
  }
  40% {
    transform: translate(100px, -150px);
  }
  50% {
    transform: translate(-100px, 200px);
  }
  60% {
    transform: translate(-200px, -100px);
  }
  70% {
    transform: translateY(50px, 100px);
  }
  80% {
    transform: translate(100px, -150px);
  }
  90% {
    transform: translate(0px, 200px);
  }
  100% {
    transform: translate(-100px, 100px);
  }
}


</style>


<div class="main-wrapper">
<div class="noise-wrapper">
<div class="noise">
</div>
</div>
<!--<p class="loader">Wait for it..</p>-->
</div>

<!--
<section></section>
<svg>
<filter id="noise">
<feTurbulence id="turbulence">
<animate attributeName="baseFrequency" dur="0s" value="0.9 0.9;0.8 0.8;0.9 0.9;"></animate>
</feTurbulence>
<feDisplacementMap in="SourceGraphic" scale="60"></feDisplacementMap>
</filter>
</svg>-->

<!--<div class="container my-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-sm-3 regiao">
	
            <p class="h1">Buguei</p>
            <p>O que tava pesquisando?</p>
                	<?//php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            <p>Ou vai para <a href="<?//php echo site_url(''); ?>">home</a></p>
        </div>
    </div>
</div>-->

<script>
$(window).on('load', addNoise);

function addNoise() {
//  $('.loader').text('Bring in \'da noise!');
  $('.noise-wrapper').css('opacity',1);
}
</script>

<?php get_footer(); ?>
