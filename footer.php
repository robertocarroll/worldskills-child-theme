<footer class="ws-page-footer">
        <div class="container">
            <div class="ws-page-footer-row">
                <aside class="ws-page-footer-col-sm">
                    

    
<div class="ws-content mb-5">
<?php $menu_obj_footer_1 = ws_get_menu_by_location('footer-menu-1'); 
echo "<h1>".esc_html($menu_obj_footer_1->name)."</h1>";?> 
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
</div>

                </aside>
                <aside class="ws-page-footer-col-sm">
                    

    
<div class="ws-content mb-5">


</div>

                </aside>
                <aside class="ws-page-footer-col-sm">
                    

    
<div class="ws-content mb-5">

</div>

                </aside>
                <aside class="ws-page-footer-col-sm">
                    

    
<div class="ws-content mb-5">

<?php $menu_obj_social = ws_get_menu_by_location('footer-social'); 
echo "<h1>".esc_html($menu_obj_social->name)."</h1>";?> 
<?php wp_nav_menu( array( 'theme_location' => 'footer-social' ) ); ?>
</div>

                </aside>
                <aside class="ws-page-footer-col-md">
                    

    
<div class="ws-content mb-5">

    <h1>Search</h1>
</div>


<form action="https://member-website.worldskills.org/" method="get" class="search-form" role="search">

            <input name="search_paths[]" type="hidden" value="">
    
    <label class="sr-only" for="page-footer-search">Search</label>
    <input type="text" name="query" class="form-control" id="page-footer-search" placeholder="Search">
    <button type="submit" class="btn btn-primary">Search</button>
</form>

                </aside>
            </div>
            <div class="ws-page-footer-row">
                <div class="ws-page-footer-col-lg">
                    

    
<div class="ws-content mb-5">

    <ul class="list-inline"><li class="list-inline-item">© 2018 WorldSkills Member</li><li class="list-inline-item"><a href="#">Privacy</a></li></ul>
</div>

                </div>
                <div class="ws-page-footer-col-lg">
                    <p class="text-md-right">
                        <a href="https://member-website.worldskills.org/login/">Log in</a>                    </p>
                </div>
            </div>
        </div>
    </footer>