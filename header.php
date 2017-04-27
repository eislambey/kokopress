<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php wp_title('|', true, "right"); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
	<?php wp_head(); ?>
</head>
<body>
<div id="kapsayici">

<!-- üst kısım -->
<div id="ust">
	<a class="logo" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>"></a>
	<?php get_search_form(); ?>
</div>
<!-- /üst kısım -->
<!-- sol kısım -->
<div id="sol">
	<h2>.menü</h2>
	<ul>
		<li><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>">anasayfa</a></li>
		<?php wp_list_pages("title_li="); ?>
	</ul>
	<h2>.kategoriler</h2>
	<ul>
		<?php wp_list_categories("title_li="); ?>
	</ul>
</div>
<!-- /sol kısım -->

