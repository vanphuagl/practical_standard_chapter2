<?php get_header(); ?>

<main class="p-topics">
    <div class="c-title c-title--page">
        <h1>SEARCH RESULTS</h1>
    </div>

    <div class="l-container">
        <?php if (have_posts()) : ?>

        <ul class="c-listpost">
            <?php while (have_posts()) : the_post(); ?>
            <li>
                <span class="datepost"><?php echo get_the_date("Y/m/d"); ?></span>
                <?php
                    $cates = get_the_category();
                    foreach($cates as $cate) :
                        $cate_id = $cate->cat_ID;
                        $cate_name = $cate->cat_name;
                        $cate_link = get_category_link($cate_id);
				?>
                <a href="<?php echo $cate_link; ?>" class="c-label"><?php echo $cate_name; ?></a>
                <?php endforeach; ?>

                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; ?>
        </ul>

        <div class="c-pnav">
            <?php 
                if(paginate_links()!='') {
                    global $wp_query;
                    $big = 999999999;
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'prev_text'    => '',
                        'next_text'    => '',
                    ) );
                } 
            ?>
        </div>

        <?php else : ?>
        <p class="c-notfound">投稿が見つかりません。</p>

        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>