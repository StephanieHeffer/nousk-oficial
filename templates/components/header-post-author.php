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
    }

?>
</div>
</section>

<!-- <div class="author_bio_section mb-5">-->

<?php /* 

                $url =  "{$_SERVER['REQUEST_URI']}";
                $e = explode('/', $url);
                $taxonomy = wp_get_post_terms(get_the_ID(), 'category');
                $tax_names = '';
                foreach ($taxonomy as $tax) {
                    $tax_names .= '&nbsp;' . $tax->slug;
                }
                     $term = get_term_by('slug', $e[1], 'category');

        $display_name = get_the_author_meta('display_name', $post->post_author);
        $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author));
	$user_description = get_the_author_meta('user_description', $post->post_author);

        // If display name is not available then use nickname as display name
        if (empty($display_name))
            $display_name = get_the_author_meta('nickname', $post->post_author);

           // $author_details .= '<div class="author_details d-flex flex-wrap">' . get_avatar(get_the_author_meta('user_email'), 90) . '<div class="author_bio align-self-center ml-md-3">' . $display_name .'<br>'. nl2br($user_description) . '</div></div>';
//	$author_details = '<div class="author_details d-flex flex-wrap">' . '<img src="https://www.nousk.com.br/wp-content/uploads/2021/05/eu-e1628991513416.png" alt="Stephanie Heffer">' . '<div class="author_bio align-self-center ml-md-3">' . $display_name .'<br>'. nl2br($user_description) . '</div></div>';
	$author_details = '<div class="author_details d-flex">' . '<img src="https://www.nousk.com.br/wp-content/uploads/2021/08/sheffer-1-768x774.jpg" alt="Stephanie Heffer" class="avatar pp-user-avatar avatar-96 photo " height="96" width="96">' . '<div class="author_bio align-self-center ml-md-3">' . $display_name .'<br>'. nl2br($user_description) . '</div></div>';

        echo $author_details;

       */ ?>
<!-- </div> -->
