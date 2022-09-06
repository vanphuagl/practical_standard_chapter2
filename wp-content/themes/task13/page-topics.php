<?php get_header() ;?>

<main class="p-topics">
	<div class="c-title c-title--page">
		<h1>
			TOPICS
		</h1>
	</div>
	<div class="l-container">
		<ul class="c-listpost">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_status' => 'publish', // Chỉ lấy những bài viết được publish
					'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page
					'posts_per_page'=> 10,     
					'paged'=>$paged
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

		<div class="c-pnav">
			<?php if (function_exists('pagination_bar')) pagination_bar($getposts); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>