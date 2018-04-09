<div class="sidebar">
  <ul class="sidebar_nav">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
    <?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li=<h2>Catégories</h2>'); ?>
    <?php get_links_list(); ?> 
	<?php wp_nav_menu( array('theme_location' => 'sidebar')); ?>
    <?php endif; ?>
  </ul>
</div>
