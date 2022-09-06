<?php get_header();?>

<main class="p-single">
    <div class="c-title c-title--page">
        <h1>TOPICS</h1>
    </div>
    <div class="l-container">
        <!-- sidebar -->
        <?php get_sidebar(); ?>
        <!-- end sidebar -->

        <div class="l-main">
            <h2 class="p-single__title"><?php the_title(); ?></h2>
            <div class="p-single__info">
                <span><?php echo get_the_date('Y/m/d'); ?></span>
                <p>
                    <?php
                        $categories = get_the_category();
                        foreach($categories as $category):
                            $category_id = $category->cat_ID;
							$category_name = $category->cat_name;
							$category_link = get_category_link($category_id);
                    ?>
                    <a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a>
                    <?php endforeach; ?>
                </p>
            </div>

            <div class="p-single__content">
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
            </div>

            <ul class="groupbtn">
                <li class="prev_link"><?php previous_post_link('%link', 'Prev', 0 ); ?></li>
                <li class="next_link"><?php next_post_link('%link', 'Next', 0 ); ?></li>
            </ul>
        </div>
    </div>
</main>

<?php get_footer(); ?>