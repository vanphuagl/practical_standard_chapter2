<?php get_header() ;?>

<main class="p-topics">
    <div class="c-title c-title--page">
        <h1>
            <?php single_cat_title()?>
        </h1>
    </div>

    <div class="l-container">
        <ul class="c-listpost">

            <?php while (have_posts()) : the_post(); ?>
            <li>
                <span class="datepost"><?php echo get_the_date('Y/m/d'); ?></span>
                <?php 
                        $categories = get_the_category();
                        foreach ($categories as $category)
                        {
                            echo '<a class="c-label" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        }
                    ?>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>

        </ul>

        <div class="c-pnav">
            <?php if(paginate_links()!='') {
                global $wp_query;
                $big = 999999999;
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'prev_text'    => '',
                    'next_text'    => '',
                ));
            }?>
        </div>
    </div>
</main>

<?php get_footer(); ?>