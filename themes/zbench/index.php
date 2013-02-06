<?php get_header(); global $zbench_options; ?>
<div id="content">
    <div id="search-bar-container" class="highlight-box">
        <form id="search-form" method="GET" action="<?php echo home_url( '/' ); ?>">
            <input type="text" name="s" id="search-bar" placeholder="What do you need help with?" />
            <button type="submit" id="search-button"></button>
            <div class="search-icon"></div>
        </form>
    </div>
    <div class="highlight-box second_section">
        <div class="header">
            <h2><?php bloginfo('description');?></h2>
        </div>
        <div class="faq_content">
<?php if (have_posts()) : ?>
	<?php if (is_search()) { ?>
	<div class="page-title">
		<h1>
			<?php _e('Search Results for:','zbench'); ?> <?php echo get_search_query(),$archive_title; ?>
		</h1>
                <a href="<?php echo home_url( '/' ); ?>" title="<?php _e('Return to the full FAQ list.'); ?>"><?php _e('Return to the full FAQ list.'); ?></a>
	</div>
	<?php } ?>
        <ul class="accordion js_accordion">
	<?php while (have_posts()) : the_post();?>
            <li class="collapsed">
                <h5><a href="javascript:;" title="<?php printf( __('%s'), the_title_attribute('echo=0') ); ?>"><?php the_title(); ?></a></h5>
                <div class="answer">
                    <?php the_content(); ?>
                </div><!-- answer -->
            </li>
	<?php endwhile; ?>
        </ul>
<?php else: ?>
	<div class="post post-single">
		<h2 class="title title-single"><?php _e('Not Found'); ?></h2>
		<div class="post-info-top" style="height:1px;"></div>
		<div class="entry">
			<p><?php _e('Sorry, but you are looking for something that isn&#8217;t here.', 'zbench'); ?></p>
                        <a href="<?php echo home_url( '/' ); ?>" title="<?php _e('Return to the full FAQ list.'); ?>"><?php _e('Return to the full FAQ list.'); ?></a>
		</div><!--entry-->
	</div><!--post-->
<?php endif; ?>
        </div><!--faq-content-->
<?php
if(function_exists('wp_page_numbers')) {
	wp_page_numbers();
}
elseif(function_exists('wp_pagenavi')) {
	wp_pagenavi();
} else {
	global $wp_query;
	$total_pages = $wp_query->max_num_pages;
	if ( $total_pages > 1 ) {
		echo '<div id="pagination">';
			posts_nav_link(' | ', __('&laquo; Previous page','zbench'), __('Next page &raquo;','zbench'));
		echo '</div>';
	}
}
?>
    </div><!--highlight-box second_section-->
</div><!--content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>