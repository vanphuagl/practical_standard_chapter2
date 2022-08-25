<?php get_header();?>

<main class="p-single">
    <div class="c-title c-title--page">
        <h1>404 </h1>
    </div>
    <div class="l-container">

        <!-- sidebar -->
        <?php get_sidebar(); ?>
        <!-- end sidebar -->

        <div class="l-main">
            <div class="c-404">
                <img src="<?php bloginfo('template_directory')?>/img/error-404.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="c-back">
        <a href="<?php echo home_url() ?>" class="c-widget__title ">BACK TO HOME</a>
    </div>
</main>

<?php get_footer(); ?>