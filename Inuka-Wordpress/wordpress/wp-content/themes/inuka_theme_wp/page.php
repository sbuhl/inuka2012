<?php get_header(); ?>
<div id="content">
  <?php if(have_posts()):?>
  <?php while(have_posts()) : the_post();?>
  <div class="post" id="post-<?php the_ID(); ?>">
   
    <h2 class="h2pagefixe"><a href="<?php the_permalink();?>" title="<?php the_title();?>">
      <?php the_title();?>
      </a></h2>
    <div class="post_content">
      <?php the_content();?>
    </div>
    <div class="strike_article"> </div>
  </div>
  <?php endwhile;?>
  <?php edit_post_link('Modifier cette page', '<p>', '</p>');?>
  <?php else : ?>
  <h2 class="center">Aucun article trouvé. Essayer une autre recherche ? </h2>
  <?php include (TEMPLATEPATH . '/searchform.php');?>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
</p>
<?php get_footer(); ?>
</div>
</div>
</body></html>
