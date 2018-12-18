<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Karla:400,700" rel="stylesheet">

    <link rel="stylesheet" href="/app/themes/frogspark/scss/dist/bundle.min.css?v=<?php echo time(); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="/app/themes/frogspark/scss/dist/new.css" type="text/css" media="all" />
    <script src="/app/themes/frogspark/js/dist/bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="/app/themes/frogspark/lib/jquery.colorwheel.js"></script>
    <link rel="stylesheet" href="/app/themes/frogspark/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
    <link rel="icon" href="/app/themes/frogspark/img/favicon.png">
    <!-- <script>
        $( document ).ready(function() {
            $("#vitawheel__wrapper").colorwheel();
        });
    </script> -->
    <link rel="stylesheet" href="/app/themes/frogspark/lib/jquery.colorwheel.css">
<!--     <link href="https://fonts.googleapis.com/css?family=Avenir:300,400,500,700" rel="stylesheet"> -->
    
</head>
<body <?php body_class(); ?>>
