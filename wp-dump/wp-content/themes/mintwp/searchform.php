<?php
/**
* The file for displaying the search form
*
* @package MintWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<form role="search" method="get" class="mintwp-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
    <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'mintwp' ); ?></span>
    <input type="search" class="mintwp-search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'mintwp' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</label>
<input type="submit" class="mintwp-search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'mintwp' ); ?>" />
</form>