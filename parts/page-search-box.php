<?php

/*  ----------------------------------------------------------------------------
    This is the search box used at the top of the search results
    It's used by /search.php


 */

/**
 * @note:
 * we use esc_url(home_url( '/' )) instead of the WordPress @see get_search_link function because that's what the internal
 * WordPress widget it's using and it was creating duplicate links like: yoursite.com/search/search_query and yoursite.com?s=search_query
 */
?>
<form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
<div class="form-group">
<div class="input-group -search">
  <input type="text" placeholder="Поиск" class="form-control" name="s" id="s" value="<?php echo $_GET['s'] ?>"/>
  <?php 
	if ( isset( $_GET[ 'post_type' ] ) ) :
	?>
	<input type="hidden" name="post_type" value="<?php echo $_GET[ 'post_type' ]; ?>" />
	<?php
	endif;
  ?>
  <button type="submit" class="btn btn-default">Найти</button>
</div>
</div>
</form>