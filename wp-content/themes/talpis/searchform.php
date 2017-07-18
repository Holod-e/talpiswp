<?php
/**
 * Шаблон формы поиска (searchform.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<form role="search" id="searchform" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
		<input type="search" class="form-control input-sm" id="search-field" placeholder="" value="<?php echo get_search_query() ?>" name="s" required="">
	<button type="submit" class="btn-search"></button>
</form>