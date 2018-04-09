<div id="footer">
  <div id="col">
    <div class="footer_col1">
      <h2>Inuka</h2>
      <div class="col_1">
        <?php wp_nav_menu( array('theme_location' => 'footer')); ?>
      </div>
    </div>
    <div class="strike_verticale"> </div>
    <div class="footer_col1">
      <h2>Catégories</h2>
      <div class="col_1">
        <?php wp_nav_menu( array('theme_location' => 'footer_cat')); ?>
      </div>
    </div>
    <div class="strike_verticale"> </div>
    <div class="footer_col1">
      <h2>Archives</h2>
      <div class="col_1">
        <?php wp_get_archives('type=monthly');?>
      </div>
    </div>
    <div class="strike_verticale"> </div>
    <div class="footer_col1">
      <h2>Contact</h2>
      <nav class="col_1">
        <?php wp_nav_menu( array('theme_location' => 'footer_contact')); ?>
      </nav>
    </div>
  </div>
  <div id="copyright">
    <div class="strike"> </div>
    <div id="copy">
      <p>Thème : <a href="mailto:s.buhl@hotmail.com">BÜHL Sébastien</a> &amp; <a href="#">SMIDA Safâa</a> - Powered by <a href="http://www.wordpress.org">Wordpress</a> - Hosted by <a href="http://www.ovh.com/">OVH</a> - 2011</p>
    </div>
  </div>
</div>
