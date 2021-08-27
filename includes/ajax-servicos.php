<?php



/**

 * Function for ajax

 */

function novos_videos()

{

   $ajax_params = (object) filter_input_array(INPUT_POST, [

        'id' => FILTER_VALIDATE_INT,

        'offset' => FILTER_VALIDATE_INT,

    ]);
 

    $args = array(

      'post_type' => 'especialidade',

       'post_status'       => 'publish',

    );

  $query = new WP_Query( $args );



  $html = '';

//  $template = '<div class="col-12 col-md-4 mb-4"><h5>%1$s</h5><p>%2$s</p></div>';

   $template = '%1$s';

  while ( $query->have_posts() ) {

    $query->the_post();

    $id = get_the_ID();

   if ($ajax_params->id === $id){ 

    $html.= sprintf($template,

      get_the_title()

  //    get_the_content()

    );
   }


  }

   if(!$ajax_params->id){
        $post = get_post(63);
//      echo $post->post_title;
        $html.= sprintf($template,

      get_the_title()

//     get_the_content()

    );

  }


  wp_reset_postdata();



  echo $html; 

  wp_die();

}

function novos_content()

{

   $ajax_params = (object) filter_input_array(INPUT_POST, [

        'id' => FILTER_VALIDATE_INT,

        'offset' => FILTER_VALIDATE_INT,

    ]);
 

    $args = array(

      'post_type' => 'especialidade',

       'post_status'       => 'publish',

    );


  $query = new WP_Query( $args );



  $html = '';

//  $template = '<div class="col-12 col-md-4 mb-4"><h5>%1$s</h5><p>%2$s</p></div>';

   $template = '%1$s';

   if(!$ajax_params->id){
	$post = get_post(63);
//	echo $post->post_title;
        $html.= sprintf($template,

//      get_the_title()

     get_the_content()

    );

  }

  while ( $query->have_posts() ) {

    $query->the_post();

    $id = get_the_ID();

   if ($ajax_params->id === $id){ 

    $html.= sprintf($template,

//      get_the_title()

     get_the_content()

    );
   }


  }

  wp_reset_postdata();



  echo $html; 

  wp_die();

}

/**

 * actions for novos_videos

 */

add_action( 'wp_ajax_novos_content', 'novos_content' );

add_action( 'wp_ajax_nopriv_novos_content', 'novos_content' );

/**

 * actions for novos_videos

 */

add_action( 'wp_ajax_novos_videos', 'novos_videos' );

add_action( 'wp_ajax_nopriv_novos_videos', 'novos_videos' );



/**

 * JS for novos_videos

 */



 add_action('wp_footer', function(){

   ?>

  <script>

    jQuery("#sub-dropdown").on("change", function(e){    

      e.preventDefault();

      jQuery.ajax({

          url: "wp-admin/admin-ajax.php",

          data: {

            id: jQuery(this).val(),

            action: "novos_videos"

          },

          type: "post",

          success: function (su) {

//            jQuery("#cat.row.list").html(su);
		 jQuery("#ferra-title").html(su);
          }

      });

    });

    jQuery("#sub-dropdown").on("change", function(e){    

      e.preventDefault();

      jQuery.ajax({

          url: "wp-admin/admin-ajax.php",

          data: {

            id: jQuery(this).val(),

            action: "novos_content"

          },

          type: "post",

          success: function (su) {

//            jQuery("#cat.row.list").html(su);
		 jQuery("#ferra-content").html(su);
          }

      });

    });

  </script>

   <?php

 });


?>
