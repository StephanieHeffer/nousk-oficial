<?php
// Init
define("DEBUGGING", true); // or false in production enviroment
// Functions
function get_cache_prevent_string($always = false)
{
    return (DEBUGGING || $always) ? date('_Y-m-d_H:i:s') : "";
}
?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="author" content="Nousk" />
    <meta name="publisher" content="nousk.com.br" />
    <meta name="copyright" content="nousk.com.br" />
    <meta name="audience" content="All" />
    <meta name="page-topic" content="Tecnologia" />
    <meta name="revisit-after" content="1 day" />
    <title>
        <?php wp_title(''); ?>
        <?php if (wp_title('', false)) {
            echo ' -';
        } ?>
        <?php bloginfo('name'); ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/site.css?version=1.0<?php echo get_cache_prevent_string(); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/site-min.js?version=1.0<?php echo get_cache_prevent_string(); ?>"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|PT+Serif:400,400i,700,700i&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap" rel="stylesheet">

    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

</head>
<style>
    .bg-vermelho {
        background-color: red !important;
    }

    .page-id-45 #footer {
        background-color: black !important;
    }

    .margbot6 {
        margin-bottom: 6rem;
    }


    .h1title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        text-align: center;
        font-size: 3.7rem;
    }

    .pp-user-avatar {
        width: 8rem !important;
        height: auto !important;
    }

    #btn-contato:hover {
        cursor: pointer;
        text-decoration: underline;
    }

    #contato {
        opacity: 0;
        transition: opacity 1s ease-in-out;
        -webkit-transition: opacity 1s ease-in-out;
        -moz-transition: opacity 1s ease-in-out;
        -ms-transition: opacity 1s ease-in-out;
        -o-transition: opacity 1s ease-in-out;

    }

    #contato.fade {
        opacity: 1;
        transition: opacity 1s ease-in-out;
        -webkit-transition: opacity 1s ease-in-out;
        -moz-transition: opacity 1s ease-in-out;
        -ms-transition: opacity 1s ease-in-out;
        -o-transition: opacity 1s ease-in-out;
    }

    .frame-area {
        display: block;
        width: 100%;
        /* RESPONSIVE WIDTH */
        max-width: 400px;
        height: 300px;
        overflow: auto;
        /* EDIT TO hidden FOR NO SCROLLBAR */
        border: #999999 1px solid;
        margin: 0px;
        padding: 0px;
    }

    h2.widget-title {
        display: none;
    }

    .widget_pages ul {
        list-style: none;
        display: flex;
    }

    .widget_pages ul li a {
        margin-right: 10px;
    }

    #ajaxsearchlite1 {
        width: 50%;
        justify-content: right;
        margin: auto;
    }

    .tag-destaque {
        display: block;
    }

    .profile-intro {
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        padding: 10px 0 20px 0;
        text-align: center;
        font-size: 3.7rem;
        line-height: 6.111rem;
    }

    .contato-footer {
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        padding: 10px 0 20px 0;
        text-align: center;
        font-size: 3.7rem;
        line-height: 6.111rem;
    }


    #header {
        height: 6.66666666666666rem;
    }

    #header .container {
        height: 100%;
    }

    #header .container .row {
        height: 100%;
    }

    .widget_pages a {
        color: white;
    }

    .wpcf7-submit {
        padding: 0.5rem;
    }

    .wpcf7-textarea {
        height: 10rem;
    }

    .wpcf7-form p {
        margin-bottom: 0 !important;
    }

    @media (min-width: 991.98px) {
        .margtop {
            margin-top: 6rem;
        }

        .padtop {
            padding-top: 6rem;
        }

        #header a {
            font-size: 1.9rem !important;
            font-weight: 500 !important;
        }

        .padtop2 {
            padding-top: 2rem;
        }

        .padtop10 {
            padding-top: 10rem;
        }

        .padbottom10 {
            padding-bottom: 10rem;
        }

        .desta-nousk {
            padding-right: 0;
            padding-left: 0;
        }

        .wpcf7-text {
            width: 97%;
        }

        .somobile {
            display: none;
        }

        .textend {
            text-align: end !important;
        }

        .textinitial {
            text-align: initial;
        }
    }

    @media (max-width: 991.98px) {
        .somobile {
            display: block;
        }

        .sodesktop {
            display: none;
        }

        .me-cont {
            margin-right: 5px;
            margin-left: 5px;
        }

        input {
            width: 100% !important;
        }

        .widget_pages ul {
            display: grid !important;
        }

        .author_details img {
            margin: auto;
        }

        .author_bio {
            text-align: center;
        }

        .desta-nousk {
            /*display: flex; */
        }

        .desta-desc {
            /*    width: 70%;
    flex-wrap: wrap !important;
    display: flex;
    margin-left: 20px; */
        }

        .desta-desc a {
            padding-left: 10px;
        }

        .profile-intro {
            font-size: 2rem;
            font-weight: 600;
            padding: 0;
            line-height: unset;
        }

        #header a {
            font-size: 1.9rem !important;
            font-weight: 500 !important;
        }

        .padtop3 {
            padding-top: 6rem;
        }

        .padbottom13 {
            padding-bottom: 14rem;
        }

        .padbottom3 {
            padding-bottom: 12rem;
        }

        .widget_pages ul {
            padding-left: 0 !important;
        }

        .widget_pages ul li a {
            margin-right: 0;
        }

        .constr-p {
            margin-right: 15px;
            margin-left: 15px;
        }

        .padtop9 {
            padding-top: 9rem;
        }

        .breakword {
            word-break: break-word;
        }

        .textend {
            text-align: center;
            font-size: 1.4rem;
        }

        .textinitial {
            text-align: center;
            font-size: 1.4rem;
        }

        .wrapper h2 {}


    }
</style>


<body <?php body_class(); ?>>
    <?php get_template_part('templates/core/header'); ?>
