<?php
/* Custom search form */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form" role="search">
    <input name="search_paths[]" type="hidden" value="">
    <label class="sr-only" for="page-footer-search">Search</label>
    <input type="search" name="s" class="form-control" id="page-footer-search" placeholder="Search" value="<?php echo esc_attr( get_search_query() ); ?>">
    <button type="submit" class="btn btn-primary">Search</button>
</form>