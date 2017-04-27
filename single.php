<?php get_header(); ?>
<!-- sağ kısım -->
<div id="sag">
	<div class="item_liste">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="item">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<span class="bilgi_kutu"><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' önce'; ?></span>
		<span class="bilgi_kutu"><?php the_author(); ?></span>
		<span class="bilgi_kutu"><?php the_category(' &bull; '); ?></span>
		<span class="bilgi_kutu"><?php comments_popup_link('Yorum yok', '1 yorum', '% yorum »' ); ?></span>
		<p><?php the_content(); ?></p>
		<?php the_tags('<div class="etiketler"><b class="float-left">Etiketler:</b>', '', '</div><br class="clear" />'); ?>
	</div>
	<?php endwhile; else: ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
	</div>
	<?php
		if (comments_open() || get_comments_number()){
			comments_template();
		}
	?>
	
</div>
<!-- /sağ kısım -->
<?php get_footer(); ?>