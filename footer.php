<footer class="ws-page-footer">
        <div class="container">
            <div class="ws-page-footer-row">
                <aside class="ws-page-footer-col-sm">
                    

    
<div class="ws-content mb-5">
<?php $menu_obj_footer_1 = ws_get_menu_by_location('footer-menu-1'); 
echo "<h1>".esc_html($menu_obj_footer_1->name)."</h1>";?> 
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'fallback_cb' => false ) ); ?>
</div>

                </aside>
                <aside class="ws-page-footer-col-sm">
                    

    
<div class="ws-content mb-5">
<?php $menu_obj_footer_2 = ws_get_menu_by_location('footer-menu-2'); 
echo "<h1>".esc_html($menu_obj_footer_2->name)."</h1>";?> 
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'fallback_cb' => false ) ); ?>

</div>

                </aside>
                <aside class="ws-page-footer-col-sm">
                    

    
<div class="ws-content mb-5">
<?php $menu_obj_footer_3 = ws_get_menu_by_location('footer-menu-3'); 
echo "<h1>".esc_html($menu_obj_footer_3->name)."</h1>";?> 
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-3', 'fallback_cb' => false ) ); ?>
</div>

                </aside>
                <aside class="ws-page-footer-col-sm">
                    

    
<div class="ws-content mb-5">

<?php $menu_obj_social = ws_get_menu_by_location('footer-social'); 
echo "<h1>".esc_html($menu_obj_social->name)."</h1>";?> 
<?php wp_nav_menu( array( 'theme_location' => 'footer-social', 'fallback_cb' => false ) ); ?>
</div>

                </aside>
                <aside class="ws-page-footer-col-md">
                    

    
<div class="ws-content mb-5">
    <h1>Search</h1>
</div>

<?php get_search_form(); ?>

</aside>
            </div>
            <div class="ws-page-footer-row">
                <div class="ws-page-footer-col-lg">
                    

    
<div class="ws-content mb-5">

    <ul class="list-inline"><li class="list-inline-item">© <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' );  ?> </li><li class="list-inline-item"><a href="#">Privacy</a></li></ul>
</div>

                </div>
                <div class="ws-page-footer-col-lg">
                    <p class="text-md-right">
                        <a href="/login/">Log in</a>                    
                    </p>
                </div>
            </div>
        </div>
    </footer>