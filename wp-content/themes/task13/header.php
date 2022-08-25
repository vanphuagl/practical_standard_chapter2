<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">

    <?php if (is_home()) : ?>
    <title>Home | Tranning Wordpress</title>
    <?php else : ?>
    <title><?php wp_title(''); ?> | Tranning Wordpress</title>
    <?php endif;  ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/style.css?ver=2.1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <?php wp_head();?>
</head>

<body>
    <header class="c-header">
        <div class="l-container">
            <div class="c-header__top">
                <div class="logo">
                    <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_directory')?>/img/logo.png"
                            alt="税理士法人下平会計事務所"></a>
                </div>
                <div class="contact">
                    <img src="<?php bloginfo('template_directory')?>/img/hed_tel.png" alt=""><br />
                    <img src="<?php bloginfo('template_directory')?>/img/hed_con_no.png" alt="" class="js-imglink">
                </div>
            </div>

            <nav class="c-gnav">
                <ul>
                    <li><a href="#">私たちの想い</a></li>
                    <li><a href="#">6つの強み</a></li>
                    <li><a href="<?php echo home_url()?>/service/">サービス</a></li>
                    <li><a href="#">所員の紹介</a></li>
                    <li><a href="#">事務所案内</a></li>
                </ul>
            </nav>
        </div>
    </header>