<div class="l-sidebar">
    <div class="c-widget">
        <h3 class="c-widget__title">Search</h3>
        <div class="c-search">
            <form action="<?php bloginfo('url')?>" method="get">
                <input type="search" name="s" id="search" value="" placeholder="" />
                <input type="hidden" name="post_type" value="post" />
                <input type="submit" name="search" value="Search" />
            </form>
        </div>
    </div>
    <div class="c-widget">
        <h3 class="c-widget__title">Category</h3>
        <ul class="c-list">
            <?php
                $args = array(
                    'type'      =>'post',
                    'child_of'	=> 0,
                    'parent'	=> '',
                    'hide_empty' => 1
                );
            ?>

            <?php
                $categories = get_categories();
                foreach ($categories as $category):
                    $category_name = $category->name;
                    $category_link = get_category_link($category->cat_ID);
                    // $count = $category->count;
            ?>
            <li>
                <a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a>
            </li>

            <?php endforeach; ?>
        </ul>
    </div>
    <div class="c-widget">
        <h3 class="c-widget__title">Archive</h3>
        <ul class="c-list">
            <?php wp_get_archives( array( 
                'type'  =>  'yearly',
            ));?>
        </ul>
    </div>
</div>