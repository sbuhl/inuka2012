<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">
  <?php if(have_posts()):?>
  <?php while(have_posts()) : the_post();?>
  <div class="post" id="post-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink();?>" title="<?php the_title();?>">
      <?php the_title();?>
      </a></h2>
    <p class="postmetadata">
      <div class="date"><?php the_time('j F Y') ?>
      </div>
      <div class="auteur">
      Par <?php the_author() ?> - Cat&eacute;gorie : <?php the_category(', ') ?> - <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% commentaire');?>   <?php edit_post_link('Editer', '&#124;', ' '); ?>
      </div>
    </p>
    <br>
    <div class="post_content">
    <div class="entry">
    <?php the_content('Lire la suite &raquo;');?>
    </div>
    <div class="strike_article">
    </div>
    </div>
  </div>
  <?php endwhile;?>
  <div class="num_page">
  <?php wp_pagenavi(); ?>
  </div>
  <?php else : ?>
  <h2 class="center">Aucun article trouvé. Essayer une autre recherche ? </h2>
  <?php include (TEMPLATEPATH . '/searchform.php');?>
  <?php endif; ?>
</div>
<?php get_footer();?>
</div>
</div>
</body></html>