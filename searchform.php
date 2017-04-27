	<div class="arama">
		<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" value="<?php echo the_search_query(); ?>" name="s" id="s" placeholder="aranacak kelimeler..." />
			<button>Ara</button>
		</form>
	</div>
