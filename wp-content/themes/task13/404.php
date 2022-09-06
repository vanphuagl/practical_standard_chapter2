<?php get_header();?>

<main class="p-single">
    <div class="l-container">
        <div class="l-main404">
            <div class="c-404">
                <img src="<?php bloginfo('template_directory'); ?>/img/error-404.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="c-back">
        <a href="<?php echo home_url(); ?>" class="c-widget__title ">BACK TO HOME</a>
    </div>
</main>

<?php get_footer(); ?>