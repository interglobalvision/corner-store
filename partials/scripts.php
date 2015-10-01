<section id="scripts">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery-2.1.1.min.js"><\/script>')</script>
  <?php $analytics = IGV_get_option('_igv_analytics');
    if (! empty($analytics)) { 
      echo $analytics;
    } 
  ?>
  <?php wp_footer(); ?>
</section>