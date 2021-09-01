<div class="timeline">
<ul>
 <?php
        $args = array(
          'post_type'         => 'timeline',
          'post_status'       => 'publish',
          'posts_per_page'    =>  -1,
          'order'             => 'ASC',
        );

        $posts = query_posts($args);
        ?>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>
	<li>
		<div class="timeline-content">
                        <h3 class="date"><?= the_field("campo_data");?></h3>
                        <h1><?= get_the_title();?></h1>
                        <p><?= get_the_content();?></p>
                </div>
	</li>

        <?php endforeach; ?>
</ul>






</div>





