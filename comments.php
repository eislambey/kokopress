<?php

	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Lütfen bu sayfayı direkt yüklemeyin.');

?>
<div class="item yorumlar">
<?php

	if ( post_password_required() ) { ?>
		<p class="red">Bu yazı parola korumalı.</p> 
	<?php
		return;
	}
?>

<?php if ( comments_open() ) : ?>


<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() )); ?></p>
<?php else : ?>
<h2 class="yorumbaslik float-left">Yorum yaz</h2>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
<table class="form_table">
<?php if ( is_user_logged_in() ) : ?>

<?php printf('<br class="clear" /><a href="%1$s">%2$s</a> olarak giriş yapılmış', get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> - <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Çıkış">Çıkış yap</a>
<div class="clear">&nbsp;</div>
<?php else : ?>
	<tr>
		<td>İsim:</td>
		<td><input type="text" name="author" /></td>
	</tr>
	<tr>
		<td>Mail:</td>
		<td><input type="text" name="email" /></td>
	</tr>
<?php endif; ?>
	<tr>
		<td valign="0">Yorum:</td>
		<td><textarea name="comment"></textarea></td>
	</tr>
	<tr>
		<td colspan="2"><button><span class="gonder"></span>Yorumu gönder</button></td>
	</tr>
</table>
<?php comment_id_fields(); ?> 
<?php do_action('comment_form', get_the_ID()); ?>
</form>

<?php endif;?>

<?php endif;?>

	<?php if ( have_comments() ) : ?>
	<div class="clear">&nbsp;</div>
	<h2>Yorumlar</h2>
	<?php wp_list_comments('&type=comment&callback=yorum&end-callback=yorum_son&reverse_top_level=1'); ?>
		<?php if ( get_previous_comments_link() != '' ) : ?><div class="alignleft"><?php previous_comments_link() ?></div><?php endif; ?>
		<?php if ( get_next_comments_link() != '' ) : ?><div class="alignright"><?php next_comments_link() ?></div><?php endif; ?>
 <?php else :?>

	<?php if ( comments_open() ) : ?>
		

	 <?php else :?>
		
		<p>Bu yazı yorumlara kapalıdır</p>

	<?php endif; ?>
<?php endif; ?>

<br class="clear" />
</div>
