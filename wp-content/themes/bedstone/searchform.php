<?php
/**
 * searchform
 *
 * @package Bedstone
 */

$rand = rand(1000, 9999); // for id so we can use this multiple times on a page
?>

<div class="well searchform">
	<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <h4>Search</h4>
    <div class="input-group">
        <input type="text" class="form-control" name="s" id="searchform-query-<?php echo $rand; ?>" placeholder="<?php _e('Search'); ?>" value="<?php echo get_search_query() ?>" title="<?php _e('Search'); ?>">
        <span class="input-group-btn">
            <button type="button" class="btn btn-default"><i class="fa fa-search" title="<?php _e('Submit Search'); ?>"></i></button>
        </span>
    </div>
    <!-- /.input-group -->
    </form>
</div>