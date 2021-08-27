<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<style>
    body {
        background-color: black !important;
        color: white !important;
        /*cursor: url("<?php bloginfo('template_directory'); ?>/assets/img/seta2.png"), auto;*/
    }

    .wrapper {
        width: 100%;
        height: 100%;
        background-color: black;
        position: relative;
        padding: 64px;
        filter: contrast(15);
    }

    .wrapper h2 {
        font-family: 'Montserrat', sans-serif;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate3d(-50%, -50%, 0);
        color: white;
        margin: 0;
        font-size: 128px;
        font-weight: 500;
        text-transform: uppercase;
        /*filter: blur(8px);*/
        display: block;
        animation: animate 10s infinite alternate;
    }

    @keyframes animate {
        0% {
            letter-spacing: -80px;
            filter: blur(8px);
        }

        50% {
            filter: blur(8px);
        }

        100% {
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

    .pp-user-avatar {
        border-radius: 50% !important;
    }

    .loader>.wrapper {
        width: 100%;
    }

    .loader.hidden {
        animation: fadeOut 20s;
        animation-fill-mode: forwards;
    }

    @keyframes fadeOut {
        50% {
            opacity: 1;
        }

        100% {
            opacity: 0;
            visibility: hidden;
        }
    }
</style>

<?php

$wp_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));

?>

<main class="container">
    <section class="row">
        <div class="loader">
            <div class="wrapper">
                <h2>Nousk.</h2>
            </div>
        </div>
    </section>

    <section class="row padtop padbottom10">
        <div class="col-12 col-sm-6 mb-4 padtop9 padbottom3 somobile">
            <h1 class="profile-intro">
                Desenvolvendo</h1>
            <h1 class="h1title"> suas Ideias
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
            foreach ($users as $user) {
                // get user who have posts only
                echo get_avatar($user);
                echo '<p style="font-weight: 400;text-align: center;font-size: 3.7rem;">' . $user->display_name . '</p>';
                //        echo '</h1>';
                echo '<p style="font-size: 20px;font-style: normal;line-height: 28px;text-align: center;">' . $user->user_description . '</p>';
            }

            ?>
            <a style="color: white!important;font-size: 20px;font-weight:600;text-align: center;" href="<?php echo get_page_link(get_page_by_title('Stephanie Heffer')->ID); ?>">Sobre Mim</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>