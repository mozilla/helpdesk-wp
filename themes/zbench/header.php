<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en-US" dir="ltr"" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US" dir="ltr" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US" dir="ltr" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US" dir="ltr" <?php language_attributes(); ?>> <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">
	
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<title>
	<?php $the_title = wp_title('', false);
		if ($the_title != '') :
			echo wp_title('',false),' | '; bloginfo('name');
		else :
			bloginfo('name');
			if ($paged > 1) { echo ' - page '.$paged; } else { if ($blogdesc=get_bloginfo('description')) echo ' - '.$blogdesc; }
		endif; ?>
	</title>
	
	<?php //if ( is_singular() && get_option('thread_comments') ) wp_enqueue_script('comment-reply'); ?>
        <link href="<?php bloginfo('template_url'); ?>/style.css?v=1111" rel="stylesheet">
      
	<?php wp_head(); ?>
</head>
<body id="affiliates">
<?php global $zbench_options; ?>
<div id="wrapper" <?php if($zbench_options['left_sidebar']==TRUE) echo ' class="LorR"'; ?>>
    <div id="doc">
	<div id="header">
            <div>
                <h1>
                    <a title="Back to FAQ home page" href="http://desktop.mv.mozilla.com/">Mozilla Firefox</a>
                </h1>
                <a class="mozilla" href="http://www.mozilla.org/">mozilla</a>
                <div id="nav-main" role="navigation">
                    <ul role="menubar">
                        <li id="nav-main-features" class="first current">
							<a href="<?php echo home_url('/'); ?>">
								<?php _e(bloginfo('name')); ?>
							</a>
						</li>
                        <?php wp_nav_menu( array( 'container' => 'li', 'theme_location' => 'primary', 'items_wrap' => '%3$s' ) ); ?>
                    </ul>
                </div>
            </div>
	</div>
        <div id="main-feature">
            <h2><?php bloginfo('name'); ?></h2>
        </div>
