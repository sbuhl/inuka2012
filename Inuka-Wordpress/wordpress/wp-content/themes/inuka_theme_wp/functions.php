<?php if ( function_exists('register_sidebar'))register_sidebar();?>
<?php add_theme_support('nav-menus'); // je préviens wordpress que je veux utiliser les menus.
register_nav_menus( array(   // enregistrement des menus
'primary' => 'Menu Principal',      
'sidebar' => 'Menu Sidebar',  
'footer' => 'Menu Footer', 
'footer_cat' => 'Menu Catégories Footer',
'footer_contact' => 'Menu Contact Footer',
	) );?>
<?php
function my_custom_login_logo()
{
	echo '
<style  type="text/css"> 
h1 a {  background-image:url('.get_bloginfo('template_directory').'/images/logo.png)  !important; } 
</style>
';
}
add_action('login_head',  'my_custom_login_logo'); 
// CUSTOM ADMIN LOGIN LOGO LINK

function change_wp_login_url()
{
	echo bloginfo('url');  // OR ECHO YOUR OWN URL
}add_filter('login_headerurl', 'change_wp_login_url');

// CUSTOM ADMIN LOGIN LOGO & ALT TEXT

function change_wp_login_title()
{
	echo get_option('blogname'); // OR ECHO YOUR OWN ALT TEXT
}add_filter('login_headertitle', 'change_wp_login_title');

// Admin footer modification

function remove_footer_admin ()
{
	echo '<span id="footer-thankyou">Thème créé par <a href="mailto:s.buhl@hotmail.com" target="_blank">Sébastien BÜHL et Safâa SMIDA</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

?>