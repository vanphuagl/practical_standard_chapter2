<?php get_header(); ?>

<div class="c-mainvisual">
    <div class="l-container">
        <div class="c-mainvisual__inner js-slider">

            <!-- mainvisual -->
            <?php $images = get_field('mainvisual', 'option'); ?>

            <?php if ($images): ?>
            <?php foreach ($images as $image): ?>
            <a href="<?php echo $image['link']; ?>">
                <img src="<?php echo esc_url($image['image']['url']); ?>"
                    alt="<?php echo esc_attr($image['image']['alt']); ?>" />
            </a>
            <?php endforeach; ?>
            <?php endif; ?>
            <!-- end mainvisual -->

        </div>
    </div>
</div>

<main>
    <div class="l-container">
        <div class="c-grouplink">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/img_01_no.png" alt=""
                    class="js-imglink"></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/img_02_no.png" alt=""
                    class="js-imglink"></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/img_03_no.png" alt=""
                    class="js-imglink"></a>
        </div>

        <!-- topic -->
        <div class="p-topics">
            <h2 class="c-title">Topics</h2>
            <ul class="c-listpost">
                <!-- lấy bài post -->
                <?php $args = array(
					'post_status' => 'publish', // đã được publish thì mói xuất hiện
					'posts_per_page' => 5, // số lượng bài viết xuất hiện
				    );
				?>

                <?php $getposts = new WP_query($args); ?>
                <?php global $wp_query; $wp_query->in_the_loop = true; ?>

                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <li>
                    <span class="datepost"><?php echo get_the_date('Y/m/d'); ?></span>

                    <?php 
							$categories = get_the_category();
							foreach ($categories as $category)
							{
								echo '<a class="c-label" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
							}
						?>

                    <a href="<?php the_permalink(); ?>"> <?php the_title();?> </a>
                </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>

            <div class="l-btn">
                <a href="<?php echo home_url(); ?>/topics" class="c-btn c-btn--small">一覧を見る</a>
            </div>
        </div>
        <!-- end topic -->

        <div class="c-grouplink">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/btn_03_no.png" alt=""
                    class="js-imglink"></a>
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/btn_04_no.png" alt=""
                    class="js-imglink"></a>
        </div>

        <!-- access -->
        <?php $access = get_field('access_map', 'option'); ?>

        <?php if($access): ?>
        <?php foreach ($access as $map): ?>
        <?php
                    $title = $map['title_map'];
                    $address = $map['address_map'];
                    $time = $map['time_map'];
                    $tel = $map['tel_map'];
                    $fax = $map['fax_map'];
                    $email = $map['email_map'];
                    $image_link = $map['image_map']['url'];
                    $image_alt = $map['image_map']['alt'];	
                ?>

        <div class="c-access">
            <div class="c-access__info">
                <h3 class="c-title c-title--sub"><?php echo $title ?></h3>
                <p class="address"><?php echo $address ?></p>
                <p class="time"><?php echo $time ?></p>
                <br />
                <p>
                    <span class="tel"><?php echo $tel ?></span>
                    <span class="fax"><?php echo $fax ?></span>
                    <br />
                    <span class="email"><?php echo $email ?></span>
                </p>
            </div>
            <div class="c-access__img">
                <img src="<?php echo esc_url($image_link); ?>" alt="<?php echo esc_attr($image_alt); ?>">
            </div>
        </div>

        <?php endforeach; ?>
        <?php endif; ?>
        <!-- end access -->
    </div>
</main>

<?php get_footer(); ?>