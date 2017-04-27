<?php
show_admin_bar(0);
function wp_corenavi() {  
  global $wp_query, $wp_rewrite;  
  $pages = '';  
  $max = $wp_query->max_num_pages;  
  if (!$current = get_query_var('paged')) $current = 1;  
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));  
  $a['total'] = $max;  
  $a['current'] = $current;  
  
  $total = 1; //1 - display the text "Page N of N", 0 - not display  
  $a['mid_size'] = 5; //how many links to show on the left and right of the current  
  $a['end_size'] = 1; //how many links to show in the beginning and end  
  $a['prev_text'] = '&laquo; Önceki'; //text of the "Previous page" link  
  $a['next_text'] = 'Sonraki &raquo;'; //text of the "Next page" link  
  
  if ($max > 1) echo '<div class="sayfalama">';  
  echo $pages . paginate_links($a);  
  if ($max > 1) echo '<br class="clear" /></div>';  
}
function time_ago($type = 'post') {
	$d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';
	return human_time_diff($d('U'), current_time('timestamp')).' önce';
}

function yorum($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	if ($comment->comment_approved == '0'){
		$onay_bekliyor = "<small class='red'>&nbsp;&nbsp;(yorumunuz onay bekliyor)</small>";
	}
	if ($comment->user_id == 1){
		$admin_class = '<img src="'.get_bloginfo('stylesheet_directory').'/img/admin.png" alt="" /> ';
	}

	?>
	<div class="yorum_item" id="comment-<?php comment_ID(); ?>">
		<span class="yazar"><?php echo $admin_class; echo comment_author(); ?></span>
		<span class="tarih"><?php echo time_ago('comment'); ?></span>
		<?php echo $onay_bekliyor; ?>
		<?php comment_text(); ?>
	</div>

<?php
}
function yorum_son(){ return 0; }

?>